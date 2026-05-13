<?php
/**
 * CAPTLEADS - Processamento do Formulário (BACKEND)
 * @security Validação completa no servidor
 */

define('CAPTLEADS_SECURE', true);
require_once 'config.php';

// ============================================
// CONFIGURAÇÃO DE RESPOSTA
// ============================================
header('Content-Type: application/json');
header('X-Content-Type-Options: nosniff');

// Permitir apenas POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Método não permitido']);
    exit;
}

// ============================================
// VALIDAÇÃO CSRF
// ============================================
if (!isset($_POST['csrf_token']) || !validateCSRFToken($_POST['csrf_token'])) {
    logActivity('SECURITY', 'Token CSRF inválido');
    http_response_code(403);
    echo json_encode(['success' => false, 'message' => 'Token de segurança inválido. Recarregue a página e tente novamente.']);
    exit;
}

// ============================================
// RATE LIMITING
// ============================================
$ip = $_SERVER['REMOTE_ADDR'];
if (!checkRateLimit($ip)) {
    logActivity('SECURITY', 'Rate limit excedido', ['ip' => $ip]);
    http_response_code(429);
    echo json_encode(['success' => false, 'message' => 'Muitas tentativas. Aguarde 1 hora para enviar novamente.']);
    exit;
}

// ============================================
// SANITIZAÇÃO DOS DADOS
// ============================================
$nome = isset($_POST['nome']) ? sanitizeInput($_POST['nome']) : '';
$email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_EMAIL) : '';
$whatsapp = isset($_POST['whatsapp']) ? sanitizeInput($_POST['whatsapp']) : '';
$empresa = isset($_POST['empresa']) ? sanitizeInput($_POST['empresa']) : '';
$solucao = isset($_POST['solucao']) ? sanitizeInput($_POST['solucao']) : '';
$dataHora = date('d/m/Y H:i:s');

// ============================================
// VALIDAÇÃO DOS CAMPOS OBRIGATÓRIOS
// ============================================
$errors = [];

if (empty($nome) || strlen($nome) < 2) {
    $errors[] = 'Nome inválido';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'E-mail inválido';
}

if (empty($whatsapp) || strlen($whatsapp) < 10) {
    $errors[] = 'WhatsApp inválido';
}

if (empty($solucao)) {
    $errors[] = 'Selecione uma solução';
}

// Registrar tentativa (mesmo se falhar)
registerRateAttempt($ip);

if (!empty($errors)) {
    logActivity('VALIDATION', 'Erro de validação', ['errors' => $errors, 'ip' => $ip]);
    echo json_encode(['success' => false, 'message' => implode(', ', $errors)]);
    exit;
}

// ============================================
// MONTAR MENSAGEM DO LEAD
// ============================================
$mensagem = "📋 DADOS DO LEAD\n\n";
$mensagem .= "👤 Nome: {$nome}\n";
$mensagem .= "📧 E-mail: {$email}\n";
$mensagem .= "📱 WhatsApp: {$whatsapp}\n";
$mensagem .= "🏢 Empresa: " . ($empresa ?: 'Não informado') . "\n";
$mensagem .= "🎯 Solução: {$solucao}\n";
$mensagem .= "⏰ Data/Hora: {$dataHora}\n";
$mensagem .= "🌐 IP: {$ip}\n";
$mensagem .= "🖥️ User Agent: " . ($_SERVER['HTTP_USER_AGENT'] ?? 'Desconhecido');

// ============================================
// ENVIAR EMAIL
// ============================================
$assunto = "📢 NOVO LEAD - CaptLeads - {$nome}";
$emailEnviado = sendLeadEmail(LEAD_EMAIL, $assunto, $mensagem, $email);

// ============================================
// LOG DO LEAD
// ============================================
$leadData = [
    'nome' => $nome,
    'email' => $email,
    'whatsapp' => $whatsapp,
    'empresa' => $empresa,
    'solucao' => $solucao,
    'ip' => $ip,
    'data' => $dataHora,
    'email_enviado' => $emailEnviado
];

logActivity('LEAD', 'Novo lead capturado', $leadData);

// ============================================
// RESPOSTA
// ============================================
if ($emailEnviado) {
    echo json_encode([
        'success' => true,
        'message' => 'Lead enviado com sucesso! Em breve entraremos em contato.'
    ]);
} else {
    logActivity('ERROR', 'Falha ao enviar email', ['email' => $email]);
    echo json_encode([
        'success' => false,
        'message' => 'Erro ao enviar. Por favor, entre em contato pelo WhatsApp: (71) 99717-2077'
    ]);
}
?>