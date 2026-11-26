<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta — portFY.io</title>
    
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

    <div class="container min-vh-100 d-flex flex-column justify-content-center py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                
                <!-- Logo Centralizada -->
                <div class="text-center mb-4">
                    <a href="../index.php" class="d-inline-flex align-items-center gap-2 text-decoration-none">
                        <div class="brand-logo-box">
                            <span class="fw-bold text-white">P</span>
                        </div>
                        <span class="brand-text">portFY.io</span>
                    </a>
                </div>

                <!-- Card de Cadastro -->
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                    <div class="text-center mb-4">
                        <h1 class="h4 fw-bold mb-1">Crie sua conta</h1>
                        <p class="text-muted small">Comece a montar seu portfólio profissional em minutos</p>
                    </div>

                    <!-- Por enquanto action aponta para planos.html para simular o fluxo -->
                    <form action="planos.html" method="GET">
                        <div class="mb-3">
                            <label for="nome" class="form-label small fw-semibold">Nome Completo</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control bg-light border-start-0" id="nome" name="nome" placeholder="Ex: Sofia Mendes" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label small fw-semibold">E-mail</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control bg-light border-start-0" id="email" name="email" placeholder="seu@email.com" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="telefone" class="form-label small fw-semibold">Telefone / WhatsApp</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-phone"></i></span>
                                <input type="tel" class="form-control bg-light border-start-0" id="telefone" name="telefone" placeholder="(11) 99999-9999">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="senha" class="form-label small fw-semibold">Senha</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-end-0 text-muted"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control bg-light border-start-0" id="senha" name="senha" placeholder="Mínimo 6 caracteres" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-cyan w-100 rounded-pill py-2 fw-semibold shadow-sm mb-3">
                            Continuar para Escolha do Plano <i class="bi bi-arrow-right ms-1"></i>
                        </button>
                    </form>

                    <div class="text-center mt-2">
                        <p class="small text-muted mb-0">
                            Já tem uma conta? 
                            <a href="login.html" class="fw-semibold text-decoration-none" style="color: var(--dark-teal);">Fazer Log In</a>
                        </p>
                    </div>
                </div>

                <!-- Voltar para Home -->
                <div class="text-center mt-4">
                    <a href="../index.php" class="small text-muted text-decoration-none">
                        <i class="bi bi-arrow-left me-1"></i> Voltar para a página inicial
                    </a>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>