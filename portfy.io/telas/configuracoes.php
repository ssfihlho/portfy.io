<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurações da Conta — portFY.io</title>
    
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
                    <a href="configuracoes.php" class="nav-link active d-flex align-items-center gap-2">
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
            <div class="container-fluid" style="max-width: 850px;">
                
                <div class="mb-4">
                    <h1 class="h3 fw-bold mb-1" style="font-family: 'Plus Jakarta Sans', sans-serif;">Configurações</h1>
                    <p class="text-muted small mb-0">Atualize seus dados pessoais, informações do portfólio e credenciais de acesso</p>
                </div>

                <form action="configuracoes.php" method="POST" enctype="multipart/form-data">
                    
                    <!-- BLOCO 1: PERFIL PÚBLICO DO PORTFÓLIO -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                        <h2 class="h6 fw-bold mb-3">Perfil Público do Portfólio</h2>
                        
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <div class="rounded-circle bg-secondary-subtle d-flex align-items-center justify-content-center" style="width: 72px; height: 72px;">
                                <i class="bi bi-person fs-2 text-muted"></i>
                            </div>
                            <div>
                                <label class="btn btn-sm btn-outline-dark rounded-pill px-3 mb-1">
                                    Alterar Foto de Perfil <input type="file" name="foto_perfil" hidden accept="image/*">
                                </label>
                                <div class="small text-muted">JPG ou PNG. Recomendado 400x400px.</div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">Nome de Exibição</label>
                                <input type="text" class="form-control bg-light" name="nome" value="Sofia Mendes" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">Título Profissional</label>
                                <input type="text" class="form-control bg-light" name="titulo_profissional" value="Visual Designer & Art Director">
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-semibold">Biografia / Sobre Mim</label>
                                <textarea class="form-control bg-light" name="biografia" rows="3">Criando identidades visuais memoráveis e experiências digitais intuitivas focadas na fusão entre forma, função e emoção.</textarea>
                            </div>
                        </div>
                    </div>

                    <!-- BLOCO 2: DADOS DE CONTATO E ENDEREÇO (Fluxograma) -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                        <h2 class="h6 fw-bold mb-3">Contato & Endereço</h2>
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">E-mail de Acesso</label>
                                <input type="email" class="form-control bg-light" name="email" value="sofia.mendes@email.com" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">Número / Telefone</label>
                                <input type="tel" class="form-control bg-light" name="telefone" value="(11) 98765-4321">
                            </div>
                            <div class="col-12">
                                <label class="form-label small fw-semibold">Endereço / Cidade</label>
                                <input type="text" class="form-control bg-light" name="endereco" value="São Paulo, SP - Brasil">
                            </div>
                        </div>
                    </div>

                    <!-- BLOCO 3: SEGURANÇA (ALTERAR SENHA) -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 mb-4">
                        <h2 class="h6 fw-bold mb-1">Alterar Senha</h2>
                        <p class="small text-muted mb-3">Deixe em branco caso não queira alterar sua senha atual.</p>
                        
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">Nova Senha</label>
                                <input type="password" class="form-control bg-light" name="nova_senha" placeholder="••••••••">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label small fw-semibold">Confirmar Nova Senha</label>
                                <input type="password" class="form-control bg-light" name="confirmar_senha" placeholder="••••••••">
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-cyan rounded-pill px-5 py-2 fw-semibold shadow-sm">
                            Salvar Alterações
                        </button>
                    </div>

                </form>

            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>