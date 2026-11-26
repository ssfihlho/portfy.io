<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout — portFY.io</title>
    
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
    <nav class="navbar py-3 border-bottom bg-white">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2" href="../index.php">
                <div class="brand-logo-box">
                    <span class="fw-bold text-white">P</span>
                </div>
                <span class="brand-text">portFY.io</span>
            </a>
            <span class="small text-muted d-flex align-items-center gap-1">
                <i class="bi bi-shield-lock-fill text-success"></i> Pagamento 100% Seguro
            </span>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center g-4">
            
            <!-- Coluna Esquerda: Dados de Pagamento -->
            <div class="col-lg-7">
                <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h1 class="h4 fw-bold mb-0">Finalizar Assinatura</h1>
                        <a href="planos.php" class="small text-decoration-none" style="color: var(--dark-teal);">Alterar plano</a>
                    </div>

                    <!-- Abas de Forma de Pagamento -->
                    <ul class="nav nav-pills nav-fill bg-light p-1 rounded-pill mb-4" id="paymentTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active rounded-pill fw-semibold small" id="cartao-tab" data-bs-toggle="pill" data-bs-target="#cartao" type="button">
                                <i class="bi bi-credit-card me-1"></i> Cartão de Crédito
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link rounded-pill fw-semibold small" id="pix-tab" data-bs-toggle="pill" data-bs-target="#pix" type="button">
                                <i class="bi bi-qr-code me-1"></i> PIX Instantâneo
                            </button>
                        </li>
                    </ul>

                    <!-- Fluxograma: Checkout -> Página Inicial do Usuário -->
                    <form action="dashboard.html" method="GET">
                        <div class="tab-content" id="paymentTabContent">
                            
                            <!-- Opção 1: Cartão -->
                            <div class="tab-pane fade show active" id="cartao" role="tabpanel">
                                <div class="mb-3">
                                    <label class="form-label small fw-semibold">Nome impresso no cartão</label>
                                    <input type="text" class="form-control bg-light" placeholder="SOFIA MENDES">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label small fw-semibold">Número do cartão</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light" placeholder="0000 0000 0000 0000" maxlength="19">
                                        <span class="input-group-text bg-light text-muted"><i class="bi bi-credit-card-2-front"></i></span>
                                    </div>
                                </div>

                                <div class="row g-3 mb-4">
                                    <div class="col-6">
                                        <label class="form-label small fw-semibold">Validade</label>
                                        <input type="text" class="form-control bg-light" placeholder="MM/AA" maxlength="5">
                                    </div>
                                    <div class="col-6">
                                        <label class="form-label small fw-semibold">CVV</label>
                                        <input type="text" class="form-control bg-light" placeholder="123" maxlength="4">
                                    </div>
                                </div>
                            </div>

                            <!-- Opção 2: PIX -->
                            <div class="tab-pane fade text-center py-3" id="pix" role="tabpanel">
                                <div class="p-4 bg-light rounded-4 d-inline-block mb-3">
                                    <i class="bi bi-qr-code" style="font-size: 6rem; color: var(--navy-brand);"></i>
                                </div>
                                <p class="small text-muted mb-3">
                                    Escaneie o QR Code acima com o app do seu banco ou clique abaixo para simular a aprovação imediata.
                                </p>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-cyan w-100 rounded-pill py-2.5 fw-semibold shadow-sm">
                            <i class="bi bi-lock-fill me-1"></i> Confirmar Pagamento e Acessar Painel
                        </button>
                    </form>
                </div>
            </div>

            <!-- Coluna Direita: Resumo do Pedido -->
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm rounded-4 p-4">
                    <h2 class="h6 fw-bold text-uppercase text-muted mb-3">Resumo do Pedido</h2>
                    
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <span class="fw-bold" id="resumo-nome-plano">Plano Pro</span>
                        <span class="badge bg-info-subtle text-dark rounded-pill">Mensal</span>
                    </div>
                    <p class="small text-muted mb-3" id="resumo-desc-plano">
                        Até 15 projetos e acesso aos templates Pro.
                    </p>

                    <hr>

                    <div class="d-flex justify-content-between small mb-2">
                        <span class="text-muted">Subtotal</span>
                        <span id="resumo-subtotal">R$ 29,90</span>
                    </div>
                    <div class="d-flex justify-content-between small mb-3">
                        <span class="text-muted">Taxa de ativação</span>
                        <span class="text-success fw-medium">Grátis</span>
                    </div>

                    <div class="d-flex justify-content-between align-items-center border-top pt-3">
                        <span class="fw-bold">Total a pagar</span>
                        <span class="h4 fw-bold mb-0" style="color: var(--dark-teal);" id="resumo-total">R$ 29,90</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Script leve para atualizar o resumo conforme o plano clicado -->
    <script>
        const params = new URLSearchParams(window.location.search);
        if (params.get('plano') === 'avancado') {
            document.getElementById('resumo-nome-plano').textContent = 'Plano Avançado';
            document.getElementById('resumo-desc-plano').textContent = 'Projetos ilimitados, todos os templates Pro e personalização completa.';
            document.getElementById('resumo-subtotal').textContent = 'R$ 59,90';
            document.getElementById('resumo-total').textContent = 'R$ 59,90';
        }
    </script>
</body>
</html>