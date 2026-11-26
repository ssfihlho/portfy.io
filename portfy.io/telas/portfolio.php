<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sofia Mendes — Portfólio | portFY.io</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:wght@600;700&family=Plus+Jakarta+Sans:wght@600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- CSS Principal -->
    <link rel="stylesheet" href="../assets/css/portfolio.css">

    <!-- Cor personalizada vinda do banco (padrão #00b8c8) -->
    <style>
        :root {
            --cor-destaque: #00b8c8;
        }
    </style>
</head>
<!-- Troque a classe do body para "tema-minimal", "tema-dark" ou "tema-criativo" para testar os 3 visuais -->
<body class="portfolio-page tema-minimal">

    <!-- Barra discreta de pré-visualização (aparece apenas quando o dono abre pelo painel) -->
    <div class="bg-dark text-white py-2 px-3 small d-flex justify-content-between align-items-center">
        <div>
            <span class="badge bg-info text-dark me-2">Modo Pré-visualização</span>
            Visualizando como visitante • Troque o tema para testar:
            <button type="button" class="btn btn-xs btn-outline-light ms-2 py-0 px-2" onclick="mudarTema('tema-minimal')">Minimal</button>
            <button type="button" class="btn btn-xs btn-outline-light ms-1 py-0 px-2" onclick="mudarTema('tema-dark')">Dark Pro</button>
            <button type="button" class="btn btn-xs btn-outline-light ms-1 py-0 px-2" onclick="mudarTema('tema-criativo')">Criativo</button>
        </div>
        <a href="dashboard.php" class="text-white text-decoration-none fw-semibold">
            <i class="bi bi-arrow-left me-1"></i> Voltar ao Painel
        </a>
    </div>

    <!-- =================================================================
         NAVBAR DO PORTFÓLIO
    ================================================================== -->
    <header class="py-4">
        <div class="container" style="max-width: 980px;">
            <nav class="d-flex justify-content-between align-items-center">
                <a href="#" class="portfolio-brand fw-bold text-decoration-none">
                    SM<span class="accent-dot">.</span>
                </a>

                <ul class="list-inline mb-0 small d-flex gap-4 portfolio-nav">
                    <li class="list-inline-item"><a href="#projetos">Projetos</a></li>
                    <li class="list-inline-item"><a href="#sobre">Sobre</a></li>
                    <li class="list-inline-item"><a href="#contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- =================================================================
         HERO DO PERFIL (Foto + Nome + Título + Bio + Botão Colaborar)
    ================================================================== -->
    <section id="sobre" class="py-4 py-md-5">
        <div class="container" style="max-width: 980px;">
            <div class="row align-items-center gy-4">
                <!-- Foto de Perfil -->
                <div class="col-md-5 text-center text-md-start">
                    <div class="portfolio-avatar-box mx-auto mx-md-0">
                        <!-- Quando houver foto no banco, substitua pelo <img> -->
                        <div class="w-100 h-100 d-flex align-items-center justify-content-center bg-secondary-subtle rounded-4">
                            <i class="bi bi-person-bounding-box text-muted" style="font-size: 4.5rem;"></i>
                        </div>
                    </div>
                </div>

                <!-- Apresentação -->
                <div class="col-md-7 text-center text-md-start">
                    <h1 class="portfolio-name mb-1">Sofia Mendes</h1>
                    <p class="portfolio-role fw-medium mb-3">Visual Designer & Art Director</p>
                    <p class="portfolio-bio mb-4">
                        Criando identidades visuais memoráveis e experiências digitais intuitivas focadas na fusão entre forma, função e emoção. Baseada em São Paulo, SP.
                    </p>
                    <div class="d-flex flex-wrap justify-content-center justify-content-md-start gap-2">
                        <a href="#contato" class="btn btn-portfolio-outline rounded-pill px-4 py-2 fw-medium">
                            Colaborar
                        </a>
                        <a href="mailto:sofia.mendes@email.com" class="btn btn-portfolio-accent rounded-pill px-4 py-2 fw-medium">
                            <i class="bi bi-envelope me-1"></i> Enviar e-mail
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =================================================================
         SELEÇÃO DE PROJETOS (GRADE ASSIMÉTRICA ESTILO VITRINE)
    ================================================================== -->
    <section id="projetos" class="py-4">
        <div class="container" style="max-width: 980px;">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="h6 text-uppercase tracking-wider fw-bold mb-0 opacity-75">Seleção de Projetos</h2>
                <span class="small opacity-75">2025 — 2026</span>
            </div>

            <div class="row g-4">
                
                <!-- Projeto Destaque (Largura Total - Col-12) -->
                <div class="col-12">
                    <article class="portfolio-work-card rounded-4 overflow-hidden border">
                        <div class="row g-0 align-items-center">
                            <div class="col-md-7">
                                <div class="work-img-lg bg-secondary-subtle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-image text-muted fs-1"></i>
                                </div>
                            </div>
                            <div class="col-md-5 p-4 p-lg-5">
                                <span class="badge rounded-pill mb-2 badge-accent">Branding & Visual Identity</span>
                                <h3 class="h4 fw-bold mb-2">AURORA | Identidade Visual</h3>
                                <p class="small opacity-75 mb-4">
                                    Criação de identidade visual, sistema tipográfico e embalagens sustentáveis para marca de cosméticos botânicos.
                                </p>
                                <a href="#" target="_blank" class="small fw-semibold text-decoration-none accent-link">
                                    Ver projeto completo <i class="bi bi-arrow-up-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                </div>

                <!-- Projeto 2 (Meia Largura - Col-md-6) -->
                <div class="col-md-6">
                    <article class="portfolio-work-card h-100 rounded-4 overflow-hidden border d-flex flex-column">
                        <div class="work-img-md bg-secondary-subtle d-flex align-items-center justify-content-center">
                            <i class="bi bi-image text-muted fs-1"></i>
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="h5 fw-bold mb-0">FLUX | Digital Interface</h3>
                                <a href="#" target="_blank" class="accent-link fs-5"><i class="bi bi-arrow-up-right"></i></a>
                            </div>
                            <p class="small opacity-75 mb-3 flex-grow-1">
                                Redesign completo de plataforma SaaS com foco em usabilidade, design system e conversão de usuários.
                            </p>
                            <div class="small fw-medium opacity-75">UI/UX • Figma • Design System</div>
                        </div>
                    </article>
                </div>

                <!-- Projeto 3 (Meia Largura - Col-md-6) -->
                <div class="col-md-6">
                    <article class="portfolio-work-card h-100 rounded-4 overflow-hidden border d-flex flex-column">
                        <div class="work-img-md bg-secondary-subtle d-flex align-items-center justify-content-center">
                            <i class="bi bi-image text-muted fs-1"></i>
                        </div>
                        <div class="p-4 d-flex flex-column flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mb-2">
                                <h3 class="h5 fw-bold mb-0">SPECTRUM | Motion & Video</h3>
                                <a href="#" target="_blank" class="accent-link fs-5"><i class="bi bi-arrow-up-right"></i></a>
                            </div>
                            <p class="small opacity-75 mb-3 flex-grow-1">
                                Direção de arte e animações 3D para campanha digital de lançamento de produto tecnológico.
                            </p>
                            <div class="small fw-medium opacity-75">Art Direction • 3D • Motion</div>
                        </div>
                    </article>
                </div>

            </div>
        </div>
    </section>

    <!-- =================================================================
         RODAPÉ E CONTATO DO PORTFÓLIO
    ================================================================== -->
    <footer id="contato" class="py-5 mt-5 border-top">
        <div class="container" style="max-width: 980px;">
            <div class="row align-items-center gy-3">
                <div class="col-md-6 text-center text-md-start">
                    <h2 class="h4 fw-bold mb-1">Vamos trabalhar juntos?</h2>
                    <p class="small opacity-75 mb-0">
                        <i class="bi bi-geo-alt me-1"></i> São Paulo, SP • 
                        <i class="bi bi-whatsapp ms-2 me-1"></i> (11) 98765-4321
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <a href="mailto:sofia.mendes@email.com" class="btn btn-portfolio-accent rounded-pill px-4 py-2 fw-semibold">
                        sofia.mendes@email.com
                    </a>
                </div>
            </div>

            <div class="text-center mt-5 pt-3 small opacity-50">
                Criado gratuitamente com <strong>portFY.io</strong>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Função apenas para você testar os 3 temas no modo pré-visualização
        function mudarTema(tema) {
            document.body.className = 'portfolio-page ' + tema;
        }
    </script>
</body>
</html>