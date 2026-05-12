# 🚀 Capt Leads - Plataforma de Captura de Leads

Sua marca em movimento. Leads em tempo real.

## 📋 Sobre o Projeto

A Capt Leads é uma plataforma de tecnologia que conecta marcas ao público certo por meio de experiências interativas, capturando dados instantaneamente onde as pessoas estão. O sistema oferece soluções como mídia em veículos por app, totens interativos, TV corporativa e sistema de gestão de filas.

## 🛠️ Tecnologias Utilizadas

### Frontend
| Tecnologia | Versão | Descrição |
|------------|--------|-------------|
| **HTML5** | - | Estrutura semântica da aplicação |
| **CSS3** | - | Estilização com variáveis CSS e design responsivo |
| **JavaScript (ES6+)** | - | Interatividade e manipulação do DOM |
| **PHP** | 7.4+ | Processamento de formulários e segurança |
| **AOS.js** | 2.3.1 | Animações scroll-based |
| **Font Awesome** | 6.4.0 | Ícones vetoriais |
| **Google Fonts** | Inter | Tipografia moderna |

### Recursos CSS Utilizados
- ✅ CSS Grid Layout
- ✅ Flexbox
- ✅ CSS Variables (Custom Properties)
- ✅ Media Queries (Responsividade)
- ✅ Animações e Keyframes
- ✅ Clamp() para fontes responsivas
- ✅ Backdrop-filter para efeitos de vidro
- ✅ Gradientes e Transições

### Recursos JavaScript Utilizados
- ✅ Intersection Observer API (Lazy loading)
- ✅ Smooth Scroll
- ✅ Menu Mobile com toggle
- ✅ Preloader
- ✅ Fetch API para envio assíncrono de formulários
- ✅ Event Listeners

### Backend (Simulado)
- PHP para processamento de formulários
- CSRF Token para segurança
- Validação de dados

## 📁 Estrutura do Projeto
captleads/
│
├── index.php # Página principal
├── config.php # Configurações do sistema
├── processa-lead.php # Processamento do formulário
│
├── css/
│ └── style.css # Estilos principais
│
├── js/
│ └── main.js # Scripts JavaScript
│
├── assets/
│ ├── videos/
│ │ ├── loop.mp4 # Vídeo hero section
│ │ └── loop2.mp4 # Vídeo sobre section
│ │
│ └── images/
│ ├── santaluzia.jpg # Logo cliente
│ ├── mercadolivre.png # Logo cliente
│ └── unopar.png # Logo cliente
│
├── blog/ # Artigos do blog
│ ├── artigo-conversao-leads.html
│ ├── artigo-midia-veiculos-app.html
│ └── artigo-gamificacao-captura-leads.html
│
└── README.md # Este arquivo


## 🖥️ Como Rodar o Projeto no XAMPP

### Pré-requisitos

- [XAMPP](https://www.apachefriends.org/) instalado (versão 7.4 ou superior)
- Navegador web moderno (Chrome, Firefox, Edge, Safari)
- Editor de código (opcional - VS Code, Sublime, etc.)

### Passo a Passo

#### 1. Instalar o XAMPP

1. Baixe o XAMPP no site oficial: https://www.apachefriends.org/
2. Execute o instalador (recomendado: manter configurações padrão)
3. Instale os componentes:
   - ✅ Apache
   - ✅ PHP
   - ✅ phpMyAdmin (opcional)
   - ✅ MySQL (opcional - para futuras implementações)

#### 2. Configurar o Projeto

1. Navegue até a pasta do XAMPP:
   - Windows: `C:\xampp\htdocs\`
   - Linux: `/opt/lampp/htdocs/`
   - Mac: `/Applications/XAMPP/htdocs/`

2. Crie uma pasta para o projeto:
   ```bash
   cd C:\xampp\htdocs\
   mkdir captleads
Copie todos os arquivos do projeto para dentro da pasta captleads

3. Iniciar o Servidor
Abra o XAMPP Control Panel

Clique em Start ao lado de Apache

(Opcional) Clique em Start ao lado de MySQL se for usar banco de dados

Verifique se o Apache está rodando (ícone verde)

4. Acessar o Projeto
Abra seu navegador e acesse uma das URLs:

text
http://localhost/captleads/
ou

text
http://127.0.0.1/captleads/
🔧 Configuração Adicional
Habilitar PHP no XAMPP (já vem habilitado por padrão)
Verifique se o PHP está ativo:

Abra o XAMPP Control Panel

Clique em Config ao lado do Apache

Selecione PHP (php.ini)

Verifique se as extensões estão habilitadas:

ini
extension=curl
extension=gd
extension=mbstring
extension=mysqli
extension=pdo_mysql
Configurar Virtual Host (opcional)
Para acessar como http://captleads.local/:

Abra C:\xampp\apache\conf\extra\httpd-vhosts.conf

Adicione:

apache
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/captleads"
    ServerName captleads.local
    <Directory "C:/xampp/htdocs/captleads">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
Abra C:\Windows\System32\drivers\etc\hosts (como administrador)

Adicione:

text
127.0.0.1 captleads.local
Reinicie o Apache

📝 Funcionalidades do Sistema
Páginas e Seções
Home - Hero section com chamada principal

Sobre - Apresentação da empresa

Soluções - Cards com os serviços oferecidos

Como Funciona - Passo a passo do processo

Benefícios - Vantagens da plataforma

Contato - Formulário de captura de leads

Blog - Artigos e conteúdos

Formulário de Contato
✅ Validação HTML5

✅ Prevenção de CSRF (Cross-Site Request Forgery)

✅ Sanitização de dados

✅ Envio assíncrono via AJAX/Fetch

✅ Feedback visual para usuário

Responsividade
✅ Desktop (1200px+)

✅ Tablet (768px - 1199px)

✅ Mobile (320px - 767px)

✅ Menu hambúrguer para dispositivos móveis

✅ Imagens e vídeos adaptativos

✅ Fontes fluidas com clamp()

🚨 Possíveis Problemas e Soluções
Problema: Página não carrega
Solução: Verifique se o Apache está rodando no XAMPP Control Panel.

Problema: Erro 403 - Forbidden
Solução: Verifique as permissões da pasta htdocs/captleads.

Problema: Formulário não envia
Solução:

Verifique se o PHP está ativo

Confira se o arquivo processa-lead.php existe

Verifique as permissões do arquivo

Problema: Vídeos não carregam
Solução:

Verifique se os arquivos existem em assets/videos/

Converta os vídeos para formato MP4 (H.264)

Verifique as permissões da pasta

Problema: Menu mobile com fundo escuro
Solução:

Limpe o cache do navegador (Ctrl + Shift + R)

Verifique se o main.js está atualizado

Verifique se o style.css tem as classes corretas

🔒 Segurança
✅ Define constante de segurança (CAPTLEADS_SECURE)

✅ CSRF Token nos formulários

✅ Sanitização de inputs

✅ Validação de dados no servidor

✅ Proteção contra SQL Injection (se aplicável)

✅ HTTPS recomendado para produção

📱 Testes Realizados
Dispositivo	Resolução	Status
Desktop 4K	3840x2160	✅
Desktop HD	1920x1080	✅
Notebook	1366x768	✅
Tablet	768x1024	✅
Mobile Grande	414x896	✅
Mobile Pequeno	375x667	✅
🌐 Navegadores Compatíveis
✅ Google Chrome (últimas 2 versões)

✅ Mozilla Firefox (últimas 2 versões)

✅ Safari (últimas 2 versões)

✅ Microsoft Edge (últimas 2 versões)

✅ Opera (últimas 2 versões)

✅ Brave (últimas 2 versões)

📦 Dependências Externas
html
<!-- CSS -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<!-- JavaScript -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
🚀 Próximas Implementações
Integração com banco de dados MySQL

Dashboard administrativo

API para integração com CRMs

Relatórios e métricas avançadas

Autenticação de usuários

Sistema de notificações por e-mail

Chat ao vivo

PWA (Progressive Web App)

📞 Suporte
Para dúvidas ou problemas:

Email: contato@captleads.com.br

WhatsApp: (71) 99717-2077

Instagram: @captleads

📄 Licença
© 2026 Capt Leads - Todos os direitos reservados.

⚡ Comandos Rápidos para Desenvolvimento
bash
# Verificar se o Apache está rodando
netstat -ano | findstr :80

# Reiniciar Apache via linha de comando (Windows)
net stop Apache2.4
net start Apache2.4

# Limpar cache do navegador via JavaScript (console)
location.reload(true);

# Verificar versão do PHP
php -v
🎯 Checklist para Primeiro Acesso
XAMPP instalado

Apache rodando (ícone verde)

Arquivos copiados para htdocs/captleads/

Acessar http://localhost/captleads/

Verificar se o formulário envia

Testar responsividade (F12 → Modo dispositivo)

Verificar se vídeos estão carregando

Testar menu mobile (redimensionar janela)

Desenvolvido com ❤️ pela equipe Capt Leads

text

Este README fornece todas as informações necessárias para rodar o projeto no XAMPP, além de documentar as tecnologias utilizadas e resolver possíveis problemas que possam surgir.
