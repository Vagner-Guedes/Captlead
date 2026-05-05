<?php
/**
 * CAPTLEADS - Configuração Principal
 * @security Mantenha este arquivo protegido
 */

// ============================================
// CONFIGURAÇÕES DE SEGURANÇA
// ============================================

// Impedir acesso direto
if (!defined('CAPTLEADS_SECURE')) {
    header('HTTP/1.0 403 Forbidden');
    exit('Acesso direto negado.');
}

// Timezone
date_default_timezone_set('America/Sao_Paulo');

// ============================================
// TRATAMENTO DE ERROS (desativar em produção)
// ============================================
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/logs/php-error.log');
error_reporting(E_ALL);

// ============================================
// SESSÃO SEGURA
// ============================================
ini_set('session.cookie_httponly', 1);
ini_set('session.use_only_cookies', 1);
ini_set('session.cookie_secure', 1);
ini_set('session.cookie_samesite', 'Strict');
session_start();

// ============================================
// CHAVES DE SEGURANÇA
// ============================================
define('SECRET_KEY', 'CaptLeads@2026#SecureKey_' . md5(__DIR__));
define('CSRF_TOKEN_KEY', 'csrf_token_captleads');

// ============================================
// RATE LIMITING
// ============================================
define('MAX_ATTEMPTS_PER_HOUR', 5);
define('RATE_LIMIT_WINDOW', 3600); // 1 hora

// ============================================
// DESTINO DOS LEADS (EMAIL)
// ============================================
define('LEAD_EMAIL', 'contato@captleads.com.br'); // Altere para o email do cliente
define('EMAIL_FROM', 'naoresponda@captleads.com.br');

// ============================================
// FUNÇÕES DE SEGURANÇA
// ============================================

/**
 * Gera token CSRF
 */
function generateCSRFToken() {
    if (empty($_SESSION[CSRF_TOKEN_KEY])) {
        $_SESSION[CSRF_TOKEN_KEY] = bin2hex(random_bytes(32));
    }
    return $_SESSION[CSRF_TOKEN_KEY];
}

/**
 * Valida token CSRF
 */
function validateCSRFToken($token) {
    return isset($_SESSION[CSRF_TOKEN_KEY]) && hash_equals($_SESSION[CSRF_TOKEN_KEY], $token);
}

/**
 * Sanitiza input
 */
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

/**
 * Rate Limiting por IP
 */
function checkRateLimit($ip) {
    $rateFile = __DIR__ . '/cache/rate_' . md5($ip) . '.txt';
    
    if (file_exists($rateFile)) {
        $data = explode('|', file_get_contents($rateFile));
        $attempts = (int)$data[0];
        $timestamp = (int)$data[1];
        
        // Reset após o período
        if (time() - $timestamp > RATE_LIMIT_WINDOW) {
            $attempts = 0;
        }
        
        if ($attempts >= MAX_ATTEMPTS_PER_HOUR) {
            return false;
        }
    }
    return true;
}

/**
 * Registra tentativa de rate limit
 */
function registerRateAttempt($ip) {
    $rateFile = __DIR__ . '/cache/rate_' . md5($ip) . '.txt';
    $attempts = 0;
    
    if (file_exists($rateFile)) {
        $data = explode('|', file_get_contents($rateFile));
        $attempts = (int)$data[0];
        $timestamp = (int)$data[1];
        
        if (time() - $timestamp > RATE_LIMIT_WINDOW) {
            $attempts = 0;
        }
    }
    
    $attempts++;
    file_put_contents($rateFile, $attempts . '|' . time());
}

/**
 * Log de atividade
 */
function logActivity($type, $message, $data = null) {
    $logFile = __DIR__ . '/logs/activity.log';
    $logEntry = date('Y-m-d H:i:s') . " | {$type} | IP: " . ($_SERVER['REMOTE_ADDR'] ?? 'unknown') . " | {$message}";
    
    if ($data) {
        $logEntry .= " | Data: " . json_encode($data);
    }
    
    error_log($logEntry . PHP_EOL, 3, $logFile);
}

/**
 * Envia email com PHPMailer (alternativa segura ao mail())
 * Se não tiver PHPMailer, usa mail() com validação
 */
function sendLeadEmail($to, $subject, $message, $replyTo = null) {
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    $headers .= "From: " . EMAIL_FROM . "\r\n";
    
    if ($replyTo) {
        $headers .= "Reply-To: " . $replyTo . "\r\n";
    }
    
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "X-Priority: 1\r\n";
    
    // Formatar mensagem HTML
    $htmlMessage = "<html><body style='font-family: Arial, sans-serif;'>";
    $htmlMessage .= "<h2 style='color: #f97316;'>📋 Novo Lead CaptLeads</h2>";
    $htmlMessage .= "<hr style='border-color: #f97316;'>";
    $htmlMessage .= nl2br($message);
    $htmlMessage .= "<br><br>";
    $htmlMessage .= "<small style='color: #666;'>Enviado por CaptLeads - Sistema de Captura de Leads</small>";
    $htmlMessage .= "</body></html>";
    
    return mail($to, $subject, $htmlMessage, $headers);
}
?>