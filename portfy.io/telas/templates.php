<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Templates e Personalização — portFY.io</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap 5 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <!-- CSS Principal -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="bg-light">

    <div class="d-flex min-vh-100">
        
        <!-- SIDEBAR LATERAL -->
        <aside class="dashboard-sidebar bg-white border-end d-flex flex-column p-3">
            <a href="index.php" class="d-flex align-items-center gap-2 text-decoration-none px-2 py-2 mb-4">
                <div class="brand-logo-box">
                    <span class="fw-bold text-white">P</span>
                </div>
                <span class="brand-text">portFY.io</span>
            </a>

            <ul class="nav nav-pills flex-column gap-1 mb-auto">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link d-flex align-items-center gap-2">
                        <i class="bi bi-folder2-open"></i> Projetos
                    </a>
                </li>
                <li class="nav-item">
                    <a href="templates.php" class="nav-link active d-flex align-items-center gap-2">
                        <i class="bi bi-palette"></i> Templates
                    </a>
                </li>
                <li class="nav-item">
                    <a href="planos.php" class="nav-link d-flex align-items-center gap-2">
                        <i class="bi bi-gem"></i> Planos
                    </a>
                </li>
                <li class="nav-item">
                    <a href="configuracoes.php" class="nav-link d-flex align-items-center gap-2">
                        <i class="bi bi-gear"></i> Configurações
                    </a>
                </li>
            </ul>

            <hr>

            <a href="portfolio.php" target="_blank" class="btn btn-outline-dark rounded-pill btn-sm w-100 mb-2 fw-medium">
                <i class="bi bi-box-arrow-up-right me-1"></i> Ver Meu Portfólio
            </a>
            <a href="index.php" class="btn btn-link text-muted btn-sm text-decoration-none">
                <i class="bi bi-box-arrow-left me-1"></i> Sair da conta
            </a>
        </aside>

        <!-- CONTEÚDO PRINCIPAL -->
        <main class="flex-grow-1 p-4 p-lg-5">
            <div class="container-fluid" style="max-width: 1100px;">
                
                <div class="mb-4">
                    <h1 class="h3 fw-bold mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">Templates & Personalização</h1>
                    <p class="text-muted small mb-0">Escolha o visual do seu portfólio e defina a cor de destaque</p>
                </div>

                <form action="dashboard.php" method="POST">
                    <input type="hidden" name="template_id" id="template_selecionado" value="1">

                    <!-- ETAPA 1: ESCOLHA DO TEMPLATE -->
                    <h2 class="h6 fw-bold text-uppercase text-muted mb-3">1. Escolha um Modelo</h2>
                    <div class="row g-4 mb-5">
                        
                        <!-- Template 1: Clássico Minimalista (Gratuito / Ativo) -->
                        <div class="col-md-4">
                            <div class="card h-100 rounded-4 overflow-hidden plan-card selected position-relative" data-template="1">
                                <div class="plan-check-indicator">
                                    <i class="bi bi-check-lg"></i>
                                </div>
                                <div class="bg-white border-bottom p-4 text-center" style="height: 180px;">
                                    <!-- Miniatura visual simulada -->
                                    <div class="border rounded-3 h-100 p-3 bg-light d-flex flex-column justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="rounded-circle bg-secondary" style="width: 24px; height: 24px;"></div>
                                            <div class="bg-secondary-subtle rounded w-50" style="height: 10px;"></div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-4"><div class="bg-white border rounded" style="height: 45px;"></div></div>
                                            <div class="col-4"><div class="bg-white border rounded" style="height: 45px;"></div></div>
                                            <div class="col-4"><div class="bg-white border rounded" style="height: 45px;"></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <h3 class="h6 fw-bold mb-0">Clássico Minimalista</h3>
                                        <span class="badge bg-success-subtle text-success">Gratuito</span>
                                    </div>
                                    <p class="small text-muted mb-0">Fundo claro, tipografia limpa e foco total nas imagens dos projetos.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Template 2: Dark Developer Pro -->
                        <div class="col-md-4">
                            <div class="card h-100 rounded-4 overflow-hidden plan-card position-relative" data-template="2">
                                <div class="plan-check-indicator">
                                    <i class="bi bi-check-lg"></i>
                                </div>
                                <div class="bg-dark border-bottom p-4 text-center" style="height: 180px;">
                                    <div class="border border-secondary rounded-3 h-100 p-3 bg-black d-flex flex-column justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <div class="rounded-circle bg-info" style="width: 24px; height: 24px;"></div>
                                            <div class="bg-secondary rounded w-50" style="height: 10px;"></div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-6"><div class="bg-dark border border-secondary rounded" style="height: 45px;"></div></div>
                                            <div class="col-6"><div class="bg-dark border border-secondary rounded" style="height: 45px;"></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <h3 class="h6 fw-bold mb-0">Dark Developer</h3>
                                        <span class="badge" style="background-color: var(--dark-teal);"><i class="bi bi-gem me-1"></i>PRO</span>
                                    </div>
                                    <p class="small text-muted mb-0">Tema escuro moderno ideal para programadores, UI designers e tech.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Template 3: Criativo Moderno Pro -->
                        <div class="col-md-4">
                            <div class="card h-100 rounded-4 overflow-hidden plan-card position-relative" data-template="3">
                                <div class="plan-check-indicator">
                                    <i class="bi bi-check-lg"></i>
                                </div>
                                <div class="p-4 text-center border-bottom" style="height: 180px; background-color: #f5f2eb;">
                                    <div class="border rounded-3 h-100 p-3 bg-white d-flex flex-column justify-content-between">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="bg-dark rounded w-50" style="height: 12px;"></div>
                                            <div class="rounded-circle bg-warning" style="width: 26px; height: 26px;"></div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-4"><div class="bg-light border rounded" style="height: 45px;"></div></div>
                                            <div class="col-8"><div class="bg-light border rounded" style="height: 45px;"></div></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-4">
                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                        <h3 class="h6 fw-bold mb-0">Criativo Editorial</h3>
                                        <span class="badge" style="background-color: var(--dark-teal);"><i class="bi bi-gem me-1"></i>PRO</span>
                                    </div>
                                    <p class="small text-muted mb-0">Layout assimétrico estilo revista para diretores de arte e criativos.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- ETAPA 2: PERSONALIZAR COR E EXIBIÇÃO -->
                    <h2 class="h6 fw-bold text-uppercase text-muted mb-3">2. Personalizar Aparência</h2>
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                        <div class="row align-items-center g-4">
                            <div class="col-md-6">
                                <label for="cor_personalizada" class="form-label fw-semibold mb-1">Cor de Destaque do Portfólio</label>
                                <p class="small text-muted mb-3">Essa cor será aplicada nos botões, links e detalhes do seu portfólio público.</p>
                                <div class="d-flex align-items-center gap-3">
                                    <input type="color" class="form-control form-control-color rounded-3" id="cor_personalizada" name="cor_personalizada" value="#00b8c8" title="Escolha sua cor">
                                    <span class="small fw-mono text-muted" id="codigo_cor">#00b8c8</span>
                                </div>
                            </div>

                            <div class="col-md-6 border-start-md">
                                <label class="form-label fw-semibold mb-2">Opções de Exibição</label>
                                <div class="form-check form-switch mb-2">
                                    <input class="form-check-input" type="checkbox" id="exibirEmail" checked>
                                    <label class="form-check-label small" for="exibirEmail">Exibir botão de contato por e-mail</label>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="exibirTelefone" checked>
                                    <label class="form-check-label small" for="exibirTelefone">Exibir botão de WhatsApp no perfil</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end gap-2">
                        <a href="portfolio.php" target="_blank" class="btn btn-outline-dark rounded-pill px-4 fw-medium">
                            Pré-visualizar Portfólio
                        </a>
                        <button type="submit" class="btn btn-cyan rounded-pill px-5 fw-semibold shadow-sm">
                            Salvar Personalização
                        </button>
                    </div>
                </form>

            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Seleção visual dos cards de templates
        const tplCards = document.querySelectorAll('.plan-card');
        const inputTemplate = document.getElementById('template_selecionado');

        tplCards.forEach(card => {
            card.addEventListener('click', () => {
                tplCards.forEach(c => c.classList.remove('selected'));
                card.classList.add('selected');
                inputTemplate.value = card.getAttribute('data-template');
            });
        });

        // Atualiza o texto hexadecimal ao escolher a cor
        const colorInput = document.getElementById('cor_personalizada');
        const colorText = document.getElementById('codigo_cor');
        colorInput.addEventListener('input', () => {
            colorText.textContent = colorInput.value;
        });
    </script>
</body>
</html>