<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portFY.io — Crie seu Portfólio Profissional</title>
    
    <!-- Google Fonts: Inter & Plus Jakarta Sans -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- CSS Customizado -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <!-- =================================================================
         HERO & NAVBAR (Fundo suave integrado)
    ================================================================== -->
    <div class="hero-wrapper">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg py-3">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center gap-2" href="#">
                    <div class="brand-logo-box">
                        <span class="fw-bold text-white">P</span>
                    </div>
                    <span class="brand-text">portFY.io</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav align-items-center gap-lg-4 gap-2 mt-3 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-medium" href="#templates">Templates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-medium" href="telas/planos.php">Preços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark fw-medium" href="telas/login.php">Log In</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn btn-dark-teal rounded-pill px-4 py-2 fw-medium" href="telas/cadastro.php">
                                Comece Gratuitamente
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Conteúdo Principal do Hero -->
        <section class="hero-section pt-4 pb-5">
            <div class="container">
                <div class="row align-items-center gy-5">
                    <!-- Coluna Esquerda: Texto e CTA -->
                    <div class="col-lg-5 text-center text-lg-start">
                        <h1 class="hero-title mb-3">
                            Crie seu portfolio<br>
                            Profissional Facilmente
                        </h1>
                        <p class="hero-subtitle text-muted mb-4">
                            Destaque no seu trabalho, mostre suas habilidades e conquiste oportunidades
                        </p>
                        <a href="cadastro.php" class="btn btn-cyan rounded-pill px-5 py-2.5 fw-semibold shadow-sm">
                            Começar agora
                        </a>
                    </div>

                    <!-- Coluna Direita: Mockup Notebook -->
                    <div class="col-lg-7">
                        <div class="laptop-mockup mx-auto">
                            <div class="laptop-screen">
                                <!-- Substitua src pela imagem real do seu mockup -->
                                <img src="assets/img/mockup-notebook.png" alt="Preview do Portfólio no Notebook" class="img-fluid rounded-top">
                            </div>
                            <div class="laptop-base"></div>
                        </div>
                    </div>
                </div>

                <!-- Seta Indicadora para Baixo -->
                <div class="text-center mt-5 pt-2">
                    <a href="#beneficios" class="scroll-down-link text-dark">
                        <i class="bi bi-chevron-down fs-4"></i>
                    </a>
                </div>
            </div>
        </section>
    </div>

    <!-- =================================================================
         SEÇÃO 1: 3 PILARES (Segurança, Praticidade, Criatividade)
    ================================================================== -->
    <section id="beneficios" class="py-5 my-4">
        <div class="container">
            <div class="row text-center gy-5 justify-content-center">
                <!-- Pilar 1: Segurança -->
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="feature-icon-circle mx-auto mb-3">
                            <i class="bi bi-shield-lock-fill text-primary-blue"></i>
                        </div>
                        <h3 class="feature-title">Segurança</h3>
                    </div>
                </div>

                <!-- Pilar 2: Praticidade -->
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="feature-icon-circle mx-auto mb-3">
                            <i class="bi bi-check2-square text-cyan-icon"></i>
                        </div>
                        <h3 class="feature-title">Praticidade</h3>
                    </div>
                </div>

                <!-- Pilar 3: Criatividade -->
                <div class="col-md-4">
                    <div class="feature-item">
                        <div class="feature-icon-circle mx-auto mb-3">
                            <i class="bi bi-lightbulb-fill text-cyan-icon"></i>
                        </div>
                        <h3 class="feature-title">Criatividade</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =================================================================
         SEÇÃO 2: VITRINE DE TEMPLATES (Zigue-Zague)
    ================================================================== -->
    <section id="templates" class="py-5">
        <div class="container">
            
            <!-- Bloco 1: Imagem à Esquerda + Texto à Direita -->
            <div class="row align-items-center gy-4 mb-5 pb-lg-5">
                <div class="col-lg-6">
                    <div class="template-showcase-card bg-soft-gray p-3 rounded-4 shadow-sm">
                        <!-- Substitua pelo print do template Sofia Mendes -->
                        <img src="assets/img/template-sofia.png" alt="Template Sofia Mendes - Visual Designer" class="img-fluid rounded-3 w-100">
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <h2 class="section-heading fw-bold mb-3">Mostre seu talento ao mundo</h2>
                    <p class="text-secondary lh-lg mb-3">
                        Apresente seus projetos de forma profissional e destaque tudo o que você já conquistou. Escolha um template, personalize cada detalhe e crie um portfólio que reflita sua identidade e valorize seu trabalho.
                    </p>
                    <p class="text-secondary lh-lg mb-0">
                        Compartilhe suas experiências, fortaleça sua presença online e aumente suas oportunidades com uma apresentação moderna, clara e feita para impressionar.
                    </p>
                </div>
            </div>

            <!-- Bloco 2: Texto à Esquerda + Imagem à Direita -->
            <div class="row align-items-center gy-4 mt-4">
                <div class="col-lg-5 order-2 order-lg-1">
                    <h2 class="section-heading fw-bold mb-3">Pronto para começar?</h2>
                    <p class="text-secondary lh-lg mb-3">
                        Criar um portfólio profissional nunca foi tão simples. Escolha o template que mais combina com você, adicione seus projetos e personalize as informações para destacar sua trajetória e suas conquistas.
                    </p>
                    <p class="text-secondary lh-lg mb-0">
                        Em poucos minutos, você terá uma página pronta para compartilhar com recrutadores, clientes e empresas. Sem complicação, sem conhecimentos técnicos e com tudo o que você precisa para apresentar seu trabalho de forma profissional.
                    </p>
                </div>
                <div class="col-lg-6 offset-lg-1 order-1 order-lg-2">
                    <div class="template-showcase-card bg-soft-beige p-3 rounded-4 shadow-sm">
                        <!-- Substitua pelo print do template Lucas Fontana -->
                        <img src="assets/img/template-lucas.png" alt="Template Lucas Fontana - UI/UX Designer" class="img-fluid rounded-3 w-100">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =================================================================
         FOOTER
    ================================================================== -->
    <footer class="footer-section border-top mt-5 pt-4 pb-4">
        <div class="container">
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 pb-3">
                <!-- Links Institucionais -->
                <ul class="list-inline mb-0 small text-muted footer-links">
                    <li class="list-inline-item"><a href="#">Sobre Nós</a></li>
                    <li class="list-inline-item">•</li>
                    <li class="list-inline-item"><a href="#">Carreiras</a></li>
                    <li class="list-inline-item">•</li>
                    <li class="list-inline-item"><a href="#">Ajuda</a></li>
                    <li class="list-inline-item">•</li>
                    <li class="list-inline-item"><a href="#">Blog</a></li>
                    <li class="list-inline-item">•</li>
                    <li class="list-inline-item"><a href="#">Termos</a></li>
                    <li class="list-inline-item">•</li>
                    <li class="list-inline-item"><a href="#">Privacidade</a></li>
                </ul>

                <!-- Ícones Sociais -->
                <div class="d-flex gap-3 social-icons">
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                    <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                </div>
            </div>

            <!-- Linha Inferior de Copyright -->
            <div class="d-flex flex-column flex-sm-row justify-content-between align-items-center pt-2 small text-muted">
                <div>
                    <strong class="text-dark">PORTFY.IO</strong> | Crie seu • Portfólio
                </div>
                <div>
                    © 2026 PORTFY.io. Todos os direitos reservados.
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>