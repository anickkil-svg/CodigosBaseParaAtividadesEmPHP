<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>

<body>
    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="card shadow-sm" style="width: 100%; max-width: 400px;">
            <div class="card-body p-4">
                <h2 class="card-title text-center mb-4">Login</h2>
                <form method="POST" action="includes/valida.php">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input
                            type="email"
                            class="form-control"
                            id="email"
                            placeholder="Digite seu email"
                            required
                            name="email"
                        >
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label">Senha</label>
                        <input
                            type="password"
                            class="form-control"
                            id="senha"
                            placeholder="Digite sua senha"
                            required
                            name="senha"
                        >
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">
                            Entrar
                        </button>
                    </div>
                    <div class="d-grid text-center mt-3">
                        <a href="recuperar.php">Esqueceu a SENHA clique aqui!</a>
                    </div>
                    <div class="d-grid text-center mt-3">
                        <a href="cadastro.php">Não tem conta? Clique aqui!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>