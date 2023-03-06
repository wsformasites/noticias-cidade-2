<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <footer class="footer">
            <div class="container-fluid">
                <div class="site-map">
                    <div class="footer-title">
                        <h2 class="text-center">Mapa do Site</h2>
                    </div>
                    <div class="row">
                        <div class="col-sm">
                            <a href="home" class="footer-link">Home</a>
                        </div>
                        <div class="col-sm">
                            <a href="brasil" class="footer-link">Brasil</a>
                        </div>
                        <div class="col-sm">
                            <a href="internacional" class="footer-link">Internacional</a>
                        </div>
                        <div class="col-sm">
                            <a href="economia" class="footer-link">Economia</a>
                        </div>
                        <div class="col-sm">
                            <a href="saude" class="footer-link">Saúde</a>
                        </div>
                        <div class="col-sm">
                            <a href="ciencia" class="footer-link">Ciência</a>
                        </div>
                        <div class="col-sm">
                            <a href="contato" class="footer-link">Contato</a>
                        </div>
                    </div>
                    <div class="newsletter mt-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="footer-title">
                                    <h2 class="text-center">Newsletter</h2>
                                </div>
                                <div class="newsletter-content">
                                    <p>Assine nossa newsletter agora mesmo e receba notícias e conteúdos personalizados em primeira mão para você ficar ainda mais bem informado.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <form method="POST" action="newsletter.php">
                                    <div class="input-group input-group-lg mb-3">
                                        <input type="email" class="form-control" id="input-newsletter" placeholder="E-mail:" name="email-newsletter" required>
                                        <button type="submit" class="btn btn-secondary" id="submit-newsletter">Enviar</button>
                                    </div>
                                    <div class="position-fixed bottom-0 top-0 end-0 p-3">
                                        <div id="error-toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-body bg-danger text-white">
                                                <h5 id="toast-content">Campos de preenchimento obrigatório!</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-fixed bottom-0 top-0 end-0 p-3" style="z-index: 11">
                                        <div id="success-toast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-body bg-success text-white">
                                                <h5 id="toast-content">Mensagem enviada com sucesso!</h5>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h3 class="text-center">Site desenvolvido por WS - FormaSites</h3>
                        </div>
                        <div class="col-6">
                            <h3 class="text-center">© Todos os direitos reservados</h3>
                        </div>
                    </div>
                </div>
            </div>
            <script src="scripts/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        </footer>
    </body>
</html>