<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Painel — portFY.io</title>
    
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
        
        <!-- =================================================================
             SIDEBAR LATERAL (Projetos, Templates, Planos, Configurações)
        ================================================================== -->
        <aside class="dashboard-sidebar bg-white border-end d-flex flex-column p-3">
            <!-- Logo -->
            <a href="../index.php" class="d-flex align-items-center gap-2 text-decoration-none px-2 py-2 mb-4">
                <div class="brand-logo-box">
                    <span class="fw-bold text-white">P</span>
                </div>
                <span class="brand-text">portFY.io</span>
            </a>

            <!-- Menu de Navegação -->
            <ul class="nav nav-pills flex-column gap-1 mb-auto">
                <li class="nav-item">
                    <a href="dashboard.php" class="nav-link active d-flex align-items-center gap-2">
                        <i class="bi bi-folder2-open"></i> Projetos
                    </a>
                </li>
                <li class="nav-item">
                    <a href="templates.php" class="nav-link d-flex align-items-center gap-2">
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

            <!-- Atalho para Ver Portfólio Público -->
            <a href="portfolio.php" target="_blank" class="btn btn-outline-dark rounded-pill btn-sm w-100 mb-2 fw-medium">
                <i class="bi bi-box-arrow-up-right me-1"></i> Ver Meu Portfólio
            </a>
            <a href="logout.php" class="btn btn-link text-muted btn-sm text-decoration-none">
                <i class="bi bi-box-arrow-left me-1"></i> Sair da conta
            </a>
        </aside>

        <!-- =================================================================
             CONTEÚDO PRINCIPAL
        ================================================================== -->
        <main class="flex-grow-1 p-4 p-lg-5">
            <div class="container-fluid" style="max-width: 1100px;">
                
                <!-- Cabeçalho + Botão Novo Projeto -->
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">
                    <div>
                        <h1 class="h3 fw-bold mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">Meus Projetos</h1>
                        <p class="text-muted small mb-0">Gerencie os trabalhos exibidos na sua página pública</p>
                    </div>

                    <button type="button" class="btn btn-cyan rounded-pill px-4 py-2 fw-semibold shadow-sm" data-bs-toggle="modal" data-bs-target="#modalProjeto" onclick="abrirModalNovo()">
                        <i class="bi bi-plus-lg me-1"></i> Novo Projeto
                    </button>
                </div>

                <!-- Card de Status do Plano (Limite de Projetos) -->
                <div class="card border-0 shadow-sm rounded-4 p-3 px-4 mb-4 bg-white">
                    <div class="row align-items-center g-3">
                        <div class="col-md-8">
                            <div class="d-flex justify-content-between align-items-center mb-1">
                                <span class="small fw-semibold">
                                    Uso do Plano: <span class="badge bg-info-subtle text-dark ms-1">Plano Gratuito</span>
                                </span>
                                <span class="small text-muted fw-medium">2 de 3 projetos utilizados</span>
                            </div>
                            <div class="progress" style="height: 8px;">
                                <div class="progress-bar" role="progressbar" style="width: 66%; background-color: var(--cyan-primary);"></div>
                            </div>
                        </div>
                        <div class="col-md-4 text-md-end">
                            <a href="planos.php" class="small fw-semibold text-decoration-none" style="color: var(--dark-teal);">
                                Precisa de mais espaço? Fazer Upgrade <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Grade de Projetos Cadastrados (READ do CRUD) -->
                <div class="row g-4" id="lista-projetos">
                    
                    <!-- Projeto Exemplo 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden project-card">
                            <div class="project-thumb-box bg-secondary-subtle d-flex align-items-center justify-content-center">
                                <i class="bi bi-image text-muted fs-1"></i>
                            </div>
                            <div class="card-body d-flex flex-column p-4">
                                <div class="mb-2">
                                    <span class="badge bg-light text-dark border small">HTML • CSS • Bootstrap</span>
                                </div>
                                <h3 class="h5 fw-bold mb-2">Redesign E-commerce Aurora</h3>
                                <p class="text-muted small mb-4 flex-grow-1">
                                    Criação de identidade visual, prototipagem no Figma e desenvolvimento front-end responsivo para loja de cosméticos.
                                </p>
                                
                                <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                                    <a href="#" target="_blank" class="small fw-semibold text-decoration-none" style="color: var(--dark-teal);">
                                        <i class="bi bi-link-45deg"></i> Ver link
                                    </a>
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3" 
                                                data-bs-toggle="modal" data-bs-target="#modalProjeto"
                                                onclick="abrirModalEditar(1, 'Redesign E-commerce Aurora', 'Criação de identidade visual, prototipagem no Figma e desenvolvimento front-end responsivo.', 'HTML, CSS, Bootstrap', 'https://exemplo.com')">
                                            <i class="bi bi-pencil"></i> Editar
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-danger rounded-circle" 
                                                data-bs-toggle="modal" data-bs-target="#modalExcluir" 
                                                onclick="prepararExclusao(1)" title="Excluir">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Projeto Exemplo 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden project-card">
                            <div class="project-thumb-box bg-secondary-subtle d-flex align-items-center justify-content-center">
                                <i class="bi bi-image text-muted fs-1"></i>
                            </div>
                            <div class="card-body d-flex flex-column p-4">
                                <div class="mb-2">
                                    <span class="badge bg-light text-dark border small">PHP • MySQL • CRUD</span>
                                </div>
                                <h3 class="h5 fw-bold mb-2">Sistema de Gestão Financeira</h3>
                                <p class="text-muted small mb-4 flex-grow-1">
                                    Aplicação web completa para controle de receitas, despesas e geração de relatórios mensais em PDF.
                                </p>
                                
                                <div class="d-flex justify-content-between align-items-center pt-3 border-top">
                                    <a href="#" target="_blank" class="small fw-semibold text-decoration-none" style="color: var(--dark-teal);">
                                        <i class="bi bi-link-45deg"></i> Ver link
                                    </a>
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-sm btn-outline-secondary rounded-pill px-3"
                                                data-bs-toggle="modal" data-bs-target="#modalProjeto"
                                                onclick="abrirModalEditar(2, 'Sistema de Gestão Financeira', 'Aplicação web completa para controle de receitas, despesas e geração de relatórios.', 'PHP, MySQL, CRUD', 'https://github.com')">
                                            <i class="bi bi-pencil"></i> Editar
                                        </button>
                                        <button type="button" class="btn btn-sm btn-outline-danger rounded-circle"
                                                data-bs-toggle="modal" data-bs-target="#modalExcluir" 
                                                onclick="prepararExclusao(2)" title="Excluir">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card Fantasma: Atalho Rápido para Adicionar -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 rounded-4 add-project-placeholder d-flex align-items-center justify-content-center p-4 text-center"
                             data-bs-toggle="modal" data-bs-target="#modalProjeto" onclick="abrirModalNovo()">
                            <div>
                                <div class="rounded-circle bg-white shadow-sm d-inline-flex align-items-center justify-content-center mb-3" style="width: 56px; height: 56px;">
                                    <i class="bi bi-plus-lg fs-4" style="color: var(--cyan-primary);"></i>
                                </div>
                                <h4 class="h6 fw-bold mb-1">Adicionar Novo Projeto</h4>
                                <p class="small text-muted mb-0">Você ainda tem 1 vaga disponível no seu plano</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>

    <!-- =================================================================
         MODAL: CRIAR / EDITAR PROJETO (CREATE & UPDATE do CRUD)
    ================================================================== -->
    <div class="modal fade" id="modalProjeto" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow rounded-4">
                <div class="modal-header border-0 pb-0 px-4 pt-4">
                    <h5 class="modal-title fw-bold" id="modalProjetoTitulo">Novo Projeto</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form id="formProjeto" action="salvar_projeto.php" method="POST" enctype="multipart/form-data">
                    <!-- Campo oculto para identificar edição (UPDATE) vs criação (INSERT) -->
                    <input type="hidden" name="id" id="proj_id" value="">

                    <div class="modal-body p-4">
                        <div class="mb-3">
                            <label for="proj_titulo" class="form-label small fw-semibold">Título do Projeto *</label>
                            <input type="text" class="form-control bg-light" id="proj_titulo" name="titulo" placeholder="Ex: App de Delivery Mobile" required>
                        </div>

                        <div class="mb-3">
                            <label for="proj_descricao" class="form-label small fw-semibold">Descrição *</label>
                            <textarea class="form-control bg-light" id="proj_descricao" name="descricao" rows="3" placeholder="Explique o objetivo do projeto e seu papel nele..." required></textarea>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="proj_tecnologias" class="form-label small fw-semibold">Tecnologias / Tags</label>
                                <input type="text" class="form-control bg-light" id="proj_tecnologias" name="tecnologias" placeholder="Ex: PHP, Bootstrap, Figma">
                            </div>
                            <div class="col-md-6">
                                <label for="proj_link" class="form-label small fw-semibold">Link do Projeto / GitHub</label>
                                <input type="url" class="form-control bg-light" id="proj_link" name="link_projeto" placeholder="https://...">
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="proj_imagem" class="form-label small fw-semibold">Imagem de Capa</label>
                            <input type="file" class="form-control bg-light" id="proj_imagem" name="imagem" accept="image/*">
                            <div class="form-text small">Formatos aceitos: JPG, PNG ou WebP (máx. 2MB).</div>
                        </div>
                    </div>
                    <div class="modal-footer border-0 pt-0 px-4 pb-4">
                        <button type="button" class="btn btn-light rounded-pill px-4" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-cyan rounded-pill px-4 fw-semibold">Salvar Projeto</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- =================================================================
         MODAL: CONFIRMAR EXCLUSÃO (DELETE do CRUD)
    ================================================================== -->
    <div class="modal fade" id="modalExcluir" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content border-0 shadow rounded-4 text-center p-3">
                <div class="modal-body">
                    <div class="text-danger mb-2">
                        <i class="bi bi-exclamation-circle fs-1"></i>
                    </div>
                    <h5 class="fw-bold h6 mb-2">Excluir este projeto?</h5>
                    <p class="small text-muted mb-4">Essa ação não poderá ser desfeita e o projeto sairá do seu portfólio.</p>
                    <div class="d-flex justify-content-center gap-2">
                        <button type="button" class="btn btn-light rounded-pill px-3 btn-sm" data-bs-dismiss="modal">Cancelar</button>
                        <a href="excluir_projeto.php" id="btnConfirmarExclusao" class="btn btn-danger rounded-pill px-3 btn-sm">Sim, excluir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script para reaproveitar o mesmo Modal para Criar, Editar e Excluir -->
    <script>
        function abrirModalNovo() {
            document.getElementById('modalProjetoTitulo').textContent = 'Novo Projeto';
            document.getElementById('formProjeto').reset();
            document.getElementById('proj_id').value = '';
        }

        function abrirModalEditar(id, titulo, descricao, tecnologias, link) {
            document.getElementById('modalProjetoTitulo').textContent = 'Editar Projeto';
            document.getElementById('proj_id').value = id;
            document.getElementById('proj_titulo').value = titulo;
            document.getElementById('proj_descricao').value = descricao;
            document.getElementById('proj_tecnologias').value = tecnologias;
            document.getElementById('proj_link').value = link;
        }

        function prepararExclusao(id) {
            document.getElementById('btnConfirmarExclusao').href = 'excluir_projeto.php?id=' + id;
        }
    </script>
</body>
</html>