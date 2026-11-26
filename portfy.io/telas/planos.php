<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha seu Plano — portFY.io</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- Seu CSS Principal -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="auth-body">

    <!-- Navbar Simples -->
    <nav class="navbar py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="../index.php">
                <div class="brand-logo-box">
                    <span class="fw-bold text-white">P</span>
                </div>
                <span class="brand-text">portFY.io</span>
            </a>
            <a href="dashboard.html" class="small text-muted text-decoration-none">
                Ir para o Painel <i class="bi bi-arrow-right ms-1"></i>
            </a>
        </div>
    </nav>

    <div class="container py-5">
        <!-- Cabeçalho -->
        <div class="text-center max-w-600 mx-auto mb-5">
            <span class="badge rounded-pill px-3 py-2 mb-2" style="background-color: rgba(0, 184, 200, 0.15); color: var(--dark-teal);">
                Passo 2 de 2
            </span>
            <h1 class="h2 fw-bold mb-2" style="font-family: 'Plus Jakarta Sans', sans-serif;">
                Escolha o plano ideal para você
            </h1>
            <p class="text-muted">
                Comece gratuitamente ou desbloqueie projetos extras e templates exclusivos para destacar seu trabalho.
            </p>
        </div>

        <!-- Cards de Planos -->
        <div class="row g-4 justify-content-center align-items-stretch">
            
            <!-- PLANO 1: GRATUITO -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 plan-card">
                    <div class="card-body d-flex flex-column">
                        <h3 class="h5 fw-bold mb-1">Plano Gratuito</h3>
                        <p class="text-muted small mb-4">Ideal para dar os primeiros passos online</p>
                        
                        <div class="mb-4">
                            <span class="display-6 fw-bold">R$ 0</span>
                            <span class="text-muted small">/mês</span>
                        </div>

                        <ul class="list-unstyled d-flex flex-column gap-3 mb-5 small">
                            <li class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-cyan-icon fs-5"></i>
                                <span>Até <strong>3 projetos</strong> publicados</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-cyan-icon fs-5"></i>
                                <span>Templates básicos inclusos</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-cyan-icon fs-5"></i>
                                <span>Link público compartilhável</span>
                            </li>
                            <li class="d-flex align-items-center gap-2 text-muted">
                                <i class="bi bi-x-circle fs-5"></i>
                                <span>Templates Pro exclusivos</span>
                            </li>
                        </ul>

                        <!-- Fluxograma: Gratuito vai direto para Página Inicial do Usuário -->
                        <a href="dashboard.php" class="btn btn-outline-dark rounded-pill w-100 py-2 fw-semibold mt-auto">
                            Começar Grátis
                        </a>
                    </div>
                </div>
            </div>

            <!-- PLANO 2: PRO (DESTAQUE) -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-2 shadow rounded-4 p-4 plan-card plan-featured position-relative">
                    <span class="badge rounded-pill position-absolute top-0 start-50 translate-middle px-3 py-2 fw-semibold" style="background-color: var(--cyan-primary); color: #fff;">
                        Mais Escolhido
                    </span>

                    <div class="card-body d-flex flex-column">
                        <h3 class="h5 fw-bold mb-1">Plano Pro</h3>
                        <p class="text-muted small mb-4">Para freelancers e profissionais em crescimento</p>
                        
                        <div class="mb-4">
                            <span class="display-6 fw-bold">R$ 29,90</span>
                            <span class="text-muted small">/mês</span>
                        </div>

                        <ul class="list-unstyled d-flex flex-column gap-3 mb-5 small">
                            <li class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-cyan-icon fs-5"></i>
                                <span>Até <strong>15 projetos</strong> publicados</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-cyan-icon fs-5"></i>
                                <span>Acesso aos <strong>Templates Pro</strong></span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-cyan-icon fs-5"></i>
                                <span>Personalização de cores</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-cyan-icon fs-5"></i>
                                <span>Suporte prioritário</span>
                            </li>
                        </ul>

                        <!-- Fluxograma: Pro vai para Check out de Pagamento -->
                        <a href="checkout.php?plano=pro" class="btn btn-cyan rounded-pill w-100 py-2 fw-semibold shadow-sm mt-auto">
                            Assinar Plano Pro
                        </a>
                    </div>
                </div>
            </div>

            <!-- PLANO 3: AVANÇADO -->
            <div class="col-md-6 col-lg-4">
                <div class="card h-100 border-0 shadow-sm rounded-4 p-4 plan-card">
                    <div class="card-body d-flex flex-column">
                        <h3 class="h5 fw-bold mb-1">Plano Avançado</h3>
                        <p class="text-muted small mb-4">Sem limites para agências e criadores intensivos</p>
                        
                        <div class="mb-4">
                            <span class="display-6 fw-bold">R$ 59,90</span>
                            <span class="text-muted small">/mês</span>
                        </div>

                        <ul class="list-unstyled d-flex flex-column gap-3 mb-5 small">
                            <li class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-cyan-icon fs-5"></i>
                                <span><strong>Projetos ilimitados</strong></span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-cyan-icon fs-5"></i>
                                <span>Todos os <strong>Templates Pro</strong> liberados</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-cyan-icon fs-5"></i>
                                <span>Personalização completa</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <i class="bi bi-check-circle-fill text-cyan-icon fs-5"></i>
                                <span>Destaque na comunidade portFY</span>
                            </li>
                        </ul>

                        <!-- Fluxograma: Avançado vai para Check out de Pagamento -->
                        <a href="checkout.php?plano=avancado" class="btn btn-dark-teal rounded-pill w-100 py-2 fw-semibold mt-auto">
                            Assinar Plano Avançado
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>