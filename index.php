<?php define('CAPTLEADS_SECURE', true); require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
    <meta name="description"
        content="Capt Leads - Transforme telas em oportunidades reais de negócio. Capture leads em tempo real através de veículos por app, totens interativos, TV corporativa e sistema de filas.">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#10b981">
    
    <title>Capt Leads | Sua marca em movimento. Leads em tempo real.</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <link rel="shortcut icon"
        href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Ccircle cx='50' cy='50' r='45' fill='%2310b981'/%3E%3Ctext x='50' y='67' text-anchor='middle' fill='white' font-size='40' font-weight='bold'%3EC%3C/text%3E%3C/svg%3E"
        type="image/svg+xml">
</head>

<body>

    <div class="preloader">
        <div class="loader"></div>
    </div>

    <header class="header">
        <div class="container header-container">
            <div class="logo">
                <div class="logo-icon" style="font-size: 2rem;">
                    <i class="fas fa-wifi" style="color: #10b981;"></i>
                </div>
                <span class="logo-text">Capt<span class="logo-highlight"> Leads</span></span>
            </div>
            <nav>
                <ul class="nav-links">
                    <li><a href="#home">Início</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#solucoes">Soluções</a></li>
                    <li><a href="#como-funciona">Como funciona</a></li>
                    <li><a href="#beneficios">Benefícios</a></li>
                    <li><a href="#contato" class="nav-cta">Solicitar demo</a></li>
                    <li><a href="https://admin.captleads.com.br" target="_blank" rel="noopener noreferrer" class="btn-demo">Acesse o sistema</a></li>
                </ul>
                <div class="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <section id="home" class="hero">
        <div class="hero-overlay"></div>
        <div class="hero-bg-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>

        <div class="container hero-container">
            <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
                <div class="hero-badge animate-pulse">
                    <i class="fas fa-chart-line"></i> +350% de captura de leads
                </div>
                <h1>Sua marca em <span class="highlight-orange">movimento</span> através de <span
                        class="highlight-glow">telas interativas</span></h1>
                <p class="hero-description">Transforme telas em oportunidades reais de negócio.
                    A Capt Leads conecta sua
                    marca ao público certo por meio de experiências interativas que capturam dados instantaneamente
                    onde as pessoas estão.</p>
                <div class="hero-buttons">
                    <a href="#contato" class="btn btn-primary btn-glow">
                        <i class="fas fa-rocket"></i> Solicitar demonstração
                    </a>
                    <a href="#como-funciona" class="btn btn-outline-white">
                        <i class="fas fa-play"></i> Como funciona
                    </a>
                </div>

                <div class="hero-solutions">
                    <div class="solution-tag">
                        <i class="fas fa-car-side"></i>
                        <span>Veículos por app</span>
                    </div>
                    <div class="solution-tag">
                        <i class="fas fa-tv"></i>
                        <span>TV Corporativa</span>
                    </div>
                    <div class="solution-tag">
                        <i class="fas fa-chalkboard-user"></i>
                        <span>Totens interativos</span>
                    </div>
                    <div class="solution-tag">
                        <i class="fas fa-clock"></i>
                        <span>Sistema de filas</span>
                    </div>
                </div>
            </div>

            <div class="hero-visual" data-aos="fade-left" data-aos-duration="1000">
                <div class="dashboard-container">
                    <div class="dashboard-glow"></div>
                    <div class="dashboard-preview">
                        <video autoplay muted loop playsinline loading="lazy" class="dashboard-video">
                            <source src="assets/videos/loop.mp4" type="video/mp4">
                            Seu navegador não suporta vídeos.
                        </video>
                    </div>
                </div>
                <div class="stat-card stat-card-2">
                    <div class="stat-icon"><i class="fas fa-chart-line"></i></div>
                    <div class="stat-info">
                        <span class="stat-value">342%</span>
                        <span class="stat-label">Aumento em vendas</span>
                    </div>
                </div>
                <div class="stat-card stat-card-3">
                    <div class="stat-icon"><i class="fas fa-clock"></i></div>
                    <div class="stat-info">
                        <span class="stat-value">24/7</span>
                        <span class="stat-label">Captura contínua</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="clientes">
        <div class="container">
            <div class="clientes-header" data-aos="fade-up">
                <div class="badge-orange">Parceiros de confiança</div>
                <h2>Empresas que <span class="orange">confiam</span> na Capt Leads</h2>
                <p>Tecnologia de ponta que impulsiona negócios de todos os segmentos</p>
            </div>

            <div class="clientes-grid" data-aos="fade-up" data-aos-delay="100">
                <div class="cliente-card cliente-card-1">
                    <div class="cliente-icon">
                        <img src="assets/images/santaluzia.jpg" alt="Hospital Santa Luzia" class="cliente-img-icon" loading="lazy">
                    </div>
                    <div class="cliente-info">
                        <h3>Hospital Santa Luzia</h3>
                        <p>Saúde & Bem-estar</p>
                    </div>
                </div>

                <div class="cliente-card cliente-card-2">
                    <div class="cliente-icon">
                        <img src="assets/images/mercadolivre.png" alt="Mercado Livre" class="cliente-img-icon" loading="lazy">
                    </div>
                    <div class="cliente-info">
                        <h3>Mercado Livre</h3>
                        <p>E-commerce & Varejo</p>
                    </div>
                </div>

                <div class="cliente-card cliente-card-3">
                    <div class="cliente-icon">
                        <img src="assets/images/unopar.png" alt="Unopar" class="cliente-img-icon" loading="lazy">
                    </div>
                    <div class="cliente-info">
                        <h3>Unopar</h3>
                        <p>Educação & Tecnologia</p>
                    </div>
                </div>
            </div>

            <div class="clientes-footer" data-aos="fade-up" data-aos-delay="200">
                <div class="trust-badge">
                    <i class="fas fa-shield-alt"></i>
                    <span>Mais de 500 campanhas realizadas com sucesso</span>
                </div>
            </div>
        </div>
    </div>

    <section id="sobre" class="sobre">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="badge-orange">Quem somos</div>
                <h2>Marketing <span class="orange">inteligente</span> + Tecnologia</h2>
                <p>Mais visibilidade. Mais interação. Mais resultados.</p>
            </div>
            <div class="sobre-grid">
                <div class="sobre-texto" data-aos="fade-right">
                    <p style="font-size: 1.1rem; margin-bottom: 24px;">A <strong>Capt Leads</strong> é uma empresa de
                        tecnologia que conecta sua marca ao público certo por meio de experiências interativas que
                        capturam dados instantaneamente onde as pessoas estão.</p>
                    <div class="feature-item">
                        <div class="feature-icon bounce-animation">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div>
                            <h3>Mobilidade</h3>
                            <p>Campanhas que alcançam pessoas onde elas estão - em movimento, em eventos, em pontos
                                físicos</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon bounce-animation">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div>
                            <h3>Captura em tempo real</h3>
                            <p>Dados coletados e disponibilizados instantaneamente para sua equipe comercial</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon bounce-animation">
                            <i class="fas fa-database"></i>
                        </div>
                        <div>
                            <h3>Integração de dados</h3>
                            <p>API completa para integração com seu CRM e ferramentas de automação</p>
                        </div>
                    </div>
                </div>
                <div class="sobre-imagem" data-aos="fade-left">
                    <div class="video-wrapper">
                        <video autoplay muted loop playsinline loading="lazy" class="sobre-video">
                            <source src="assets/videos/loop2.mp4" type="video/mp4">
                            Seu navegador não suporta vídeos.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="solucoes" class="solucoes">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="badge-orange">Soluções completas</div>
                <h2>Sua marca aparece. <span class="orange">Seus leads são capturados</span> automaticamente.</h2>
                <p>Ative campanhas inteligentes em múltiplas plataformas</p>
            </div>
            <div class="solucoes-grid">
                <div class="solucao-card" data-aos="zoom-in" data-aos-delay="0">
                    <div class="card-icon"><i class="fas fa-car-side"></i></div>
                    <h3>Mídia em veículos por app</h3>
                    <p>Alcance pessoas em movimento com campanhas dinâmicas e segmentadas em apps de transporte (Uber,
                        99, etc).</p>
                    <div class="card-features">
                        <span><i class="fas fa-check"></i> Geo-localização</span>
                        <span><i class="fas fa-check"></i> Segmentação</span>
                        <span><i class="fas fa-check"></i> Alta conversão</span>
                    </div>
                    <a href="#contato" class="card-link">Quero saber mais <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="solucao-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card-icon"><i class="fas fa-chalkboard-user"></i></div>
                    <h3>Totens interativos personalizados</h3>
                    <p>Perfeitos para eventos, pontos de venda e ativações de marca. Experiência única que captura
                        leads.</p>
                    <div class="card-features">
                        <span><i class="fas fa-check"></i> Customização total</span>
                        <span><i class="fas fa-check"></i> Gamificação</span>
                        <span><i class="fas fa-check"></i> Dados em tempo real</span>
                    </div>
                    <a href="#contato" class="card-link">Quero saber mais <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="solucao-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card-icon"><i class="fas fa-clock"></i></div>
                    <h3>Sistema de gestão de filas e atendimento</h3>
                    <p>Organize seu fluxo, reduza espera, melhore a experiência do cliente e capture leads durante o
                        processo.</p>
                    <div class="card-features">
                        <span><i class="fas fa-check"></i> Redução de espera</span>
                        <span><i class="fas fa-check"></i> Relatórios completos</span>
                        <span><i class="fas fa-check"></i> Automação</span>
                    </div>
                    <a href="#contato" class="card-link">Quero saber mais <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="solucao-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="card-icon"><i class="fas fa-tv"></i></div>
                    <h3>TV corporativa / Digital signage</h3>
                    <p>Comunique, engaje e informe com controle total do conteúdo exibido em múltiplas telas.</p>
                    <div class="card-features">
                        <span><i class="fas fa-check"></i> Gestão remota</span>
                        <span><i class="fas fa-check"></i> Programação inteligente</span>
                        <span><i class="fas fa-check"></i> QR Code interativo</span>
                    </div>
                    <a href="#contato" class="card-link">Quero saber mais <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="como-funciona" class="como-funciona">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="badge-orange">Simples, rápido e eficiente</div>
                <h2>Como <span class="orange">funciona</span></h2>
                <p>Em 4 passos, sua campanha está no ar gerando leads qualificados</p>
            </div>
            <div class="funciona-grid">
                <div class="funciona-card" data-aos="flip-left">
                    <div class="funciona-number">01</div>
                    <div class="funciona-icon"><i class="fas fa-display"></i></div>
                    <h3>Exibição da campanha</h3>
                    <p>Sua campanha é exibida em telas estratégicas - veículos por app, totens, TVs corporativas</p>
                </div>
                <div class="funciona-card" data-aos="flip-left" data-aos-delay="100">
                    <div class="funciona-number">02</div>
                    <div class="funciona-icon"><i class="fas fa-fingerprint"></i></div>
                    <h3>Interação do usuário</h3>
                    <p>O público interage com a experiência através de QR Code, gamificação ou formulário integrado</p>
                </div>
                <div class="funciona-card" data-aos="flip-left" data-aos-delay="200">
                    <div class="funciona-number">03</div>
                    <div class="funciona-icon"><i class="fas fa-database"></i></div>
                    <h3>Captura dos dados</h3>
                    <p>Os dados são capturados em tempo real e armazenados na nossa plataforma</p>
                </div>
                <div class="funciona-card" data-aos="flip-left" data-aos-delay="300">
                    <div class="funciona-number">04</div>
                    <div class="funciona-icon"><i class="fas fa-envelope-open-text"></i></div>
                    <h3>Entrega dos leads</h3>
                    <p>Você recebe leads qualificados prontos para conversão via CRM, API ou e-mail</p>
                </div>
            </div>
        </div>
    </section>

    <section id="beneficios" class="beneficios">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="badge-orange">Por que escolher a Capt Leads</div>
                <h2>Mais do que visibilidade, <span class="orange">entregamos dados</span></h2>
                <p>Transforme atenção em oportunidades comerciais concretas</p>
            </div>
            <div class="beneficios-grid">
                <div class="beneficio-card" data-aos="fade-up">
                    <div class="beneficio-icon"><i class="fas fa-bolt"></i></div>
                    <h3>Captura em tempo real</h3>
                    <p>Leads disponíveis instantaneamente para sua equipe comercial</p>
                </div>
                <div class="beneficio-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="beneficio-icon"><i class="fas fa-gamepad"></i></div>
                    <h3>Experiência interativa</h3>
                    <p>Engajamento real que aumenta a taxa de conversão</p>
                </div>
                <div class="beneficio-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="beneficio-icon"><i class="fas fa-chart-line"></i></div>
                    <h3>Alto impacto visual</h3>
                    <p>Design atrativo que chama atenção onde seu público está</p>
                </div>
                <div class="beneficio-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="beneficio-icon"><i class="fas fa-chart-pie"></i></div>
                    <h3>Dados organizados</h3>
                    <p>Dashboard completo com métricas e relatórios detalhados</p>
                </div>
                <div class="beneficio-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="beneficio-icon"><i class="fas fa-chart-simple"></i></div>
                    <h3>Escalável</h3>
                    <p>Campanhas que crescem com seu negócio, para diferentes regiões</p>
                </div>
                <div class="beneficio-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="beneficio-icon"><i class="fas fa-headset"></i></div>
                    <h3>Suporte especializado</h3>
                    <p>Time dedicado para garantir o sucesso da sua campanha</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contato" class="contato">
        <div class="container contato-container">
            <div class="contato-info" data-aos="fade-right">
                <div class="badge-orange" style="background: rgba(16,185,129,0.15);">Fale com um especialista</div>
                <h2>Preencha o formulário <span class="orange"></span></h2>
                <p>Descubra como aplicar essa tecnologia no seu negócio.</p>
                <div class="info-item">
                    <i class="fab fa-whatsapp"></i>
                    <span>(71) 99717-2077</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <span>contato@captleads.com.br</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <span>Atendimento: Seg-Sex, 9h às 18h</span>
                </div>
                <div class="social-links">
                    <a href="https://www.instagram.com/captleads/" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="contato-form">
                <h3>Solicitar contato comercial</h3>
                
                <form id="leadFormSecure" method="POST" action="processa-lead.php">
                    <input type="hidden" name="csrf_token" value="<?php echo generateCSRFToken(); ?>">
                    
                    <div class="form-group">
                        <input type="text" id="nome" name="nome" placeholder="Nome completo" required>
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="E-mail corporativo" required>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="whatsapp" name="whatsapp" placeholder="WhatsApp" required>
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <div class="form-group">
                        <input type="text" id="empresa" name="empresa" placeholder="Empresa">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="form-group">
                        <select id="solucao" name="solucao" required>
                            <option value="">Qual solução te interessa?</option>
                            <option>Mídia em veículos por app</option>
                            <option>Totens interativos personalizados</option>
                            <option>Sistema de gestão de filas</option>
                            <option>TV corporativa / Digital signage</option>
                            <option>Todas as soluções</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary-orange btn-block btn-glow">
                        <i class="fas fa-paper-plane"></i> Enviar mensagem
                    </button>
                    <p class="form-note"><i class="fas fa-lock"></i> Seus dados estão seguros. Respondemos em até 24h.</p>
                </form>
                
                <div id="formFeedback" style="display: none; margin-top: 20px; padding: 15px; border-radius: 12px; text-align: center;"></div>
            </div>
        </div>
    </section>

    <section class="blog">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="badge-orange">Conteúdo exclusivo</div>
                <h2>Insights para <span class="orange">impulsionar</span> seus resultados</h2>
                <p>Marketing digital, mídia OOH, geração de leads e experiência do consumidor</p>
            </div>
            <div class="blog-grid">
                <div class="blog-card" data-aos="fade-up">
                    <div class="blog-image"><i class="fas fa-chart-line"></i></div>
                    <div class="blog-category">Marketing Digital</div>
                    <h3>Como aumentar a conversão de leads em 300%</h3>
                    <p>Estratégias comprovadas para transformar visitantes em clientes...</p>
                    <a href="blog/artigo-conversao-leads.html" class="card-link">Ler artigo <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="blog-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="blog-image"><i class="fas fa-chart-simple"></i></div>
                    <div class="blog-category">Mídia OOH</div>
                    <h3>O poder da mídia em veículos por app</h3>
                    <p>Como alcançar seu público em movimento com alta segmentação...</p>
                    <a href="blog/artigo-midia-veiculos-app.html" class="card-link">Ler artigo <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="blog-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="blog-image"><i class="fas fa-gamepad"></i></div>
                    <div class="blog-category">Experiência do Consumidor</div>
                    <h3>Gamificação: a chave para engajar e capturar leads</h3>
                    <p>Como elementos de jogos aumentam a interação e conversão...</p>
                    <a href="blog/artigo-gamificacao-captura-leads.html" class="card-link">Ler artigo <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <div class="cta-final">
        <div class="container cta-container">
            <div class="cta-content">
                <h2>Pronto para <span class="orange">transformar telas em oportunidades</span>?</h2>
                <p>Fale com um especialista e descubra o potencial de captura para sua empresa</p>
                <div class="cta-buttons">
                    <a href="https://wa.me/5571997172077" target="_blank" class="btn btn-outline-white">
                        <i class="fab fa-whatsapp"></i> Falar no WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <div class="logo-icon" style="font-size: 2rem;">
                        <i class="fas fa-wifi" style="color: #10b981;"></i>
                    </div>
                    <h3>Capt <span>Leads</span></h3>
                    <p>Tecnologia, mídia e performance trabalhando juntas para impulsionar seus resultados.</p>
                    <p class="tagline">Sua marca em movimento. Leads em tempo real.</p>
                </div>
                <div class="footer-links">
                    <h4>Mapa do site</h4>
                    <ul>
                        <li><a href="#home">Início</a></li>
                        <li><a href="#sobre">Sobre</a></li>
                        <li><a href="#solucoes">Soluções</a></li>
                        <li><a href="#como-funciona">Como funciona</a></li>
                        <li><a href="#beneficios">Benefícios</a></li>
                        <li><a href="#contato">Contato</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Soluções</h4>
                    <ul>
                        <li><a href="#">Mídia em veículos por app</a></li>
                        <li><a href="#">Totens interativos</a></li>
                        <li><a href="#">Sistema de gestão de filas</a></li>
                        <li><a href="#">TV corporativa</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h4>Contato</h4>
                    <ul>
                        <li><a href="mailto:contato@captleads.com.br">contato@captleads.com.br</a></li>
                        <li><a href="tel:+5571997172077">(71) 99717-2077</a></li>
                        <li><a href="#">Fale conosco</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Capt Leads - Todos os direitos reservados</p>
                <p class="heart">Transformando telas em oportunidades <i class="fas fa-heart"></i></p>
            </div>
        </div>
    </footer>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="js/main.js"></script>

<script>
// Inicializar AOS (garantia)
if (typeof AOS !== 'undefined') {
    AOS.init({
        once: true,
        duration: 800
    });
}

// Formulário de contato
const form = document.getElementById('leadFormSecure');
const feedbackDiv = document.getElementById('formFeedback');

if (form && feedbackDiv) {
    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Enviando...';
        submitBtn.disabled = true;
        
        const formData = new FormData(form);
        
        try {
            const response = await fetch('processa-lead.php', {
                method: 'POST',
                body: formData
            });
            
            const result = await response.json();
            
            feedbackDiv.style.display = 'block';
            
            if (result.success) {
                feedbackDiv.style.background = 'rgba(34, 197, 94, 0.15)';
                feedbackDiv.style.border = '1px solid #22c55e';
                feedbackDiv.style.color = '#22c55e';
                feedbackDiv.innerHTML = '<i class="fas fa-check-circle"></i> ' + result.message;
                form.reset();
                setTimeout(() => {
                    feedbackDiv.style.display = 'none';
                }, 5000);
            } else {
                feedbackDiv.style.background = 'rgba(239, 68, 68, 0.15)';
                feedbackDiv.style.border = '1px solid #ef4444';
                feedbackDiv.style.color = '#ef4444';
                feedbackDiv.innerHTML = '<i class="fas fa-exclamation-triangle"></i> ' + result.message;
            }
        } catch (error) {
            feedbackDiv.style.display = 'block';
            feedbackDiv.style.background = 'rgba(239, 68, 68, 0.15)';
            feedbackDiv.style.border = '1px solid #ef4444';
            feedbackDiv.style.color = '#ef4444';
            feedbackDiv.innerHTML = '<i class="fas fa-exclamation-triangle"></i> Erro de conexão. Tente novamente ou fale pelo WhatsApp.';
        } finally {
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            feedbackDiv.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }
    });
}
</script>
</body>
</html>