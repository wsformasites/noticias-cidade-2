<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notícias Cidade - Entre em contato conosco</title>
    </head>
    <body>
        <?php include_once("includes/header.php");?>
        <section id="contact">
            <div class="container-fluid">
                <div id="title">
                    <h2 class="text-center">Entre em contato com o Portal Notícias Cidade</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="subtitle">
                            <h3 class="text-center">Endereço</h3>
                        </div>
                        <address id="address">
                            <p>Rua X, 123</p>
                            <p>Campinas - SP</p>
                            <p>CEP: XXXXX - XXX</p>
                            <p><i class="bi bi-telephone-fill"></i> / <i class="bi bi-whatsapp"></i> / <i class="bi bi-telegram"></i>: (19) XXXXX - XXXX</p>
                        </address>
                    </div>
                    <div class="col-sm-6 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                        <div class="subtitle">
                            <h3 class="text-center">Formulário de contato</h3>
                        </div>
                        <form method="POST" id="contact">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nome:" required>
                                <label for="name">Nome:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail:" required>
                                <label for="email">E-mail:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefone:" data-mask="(00)00000-0000" required>
                                <label for="phone">Telefone:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Assunto:" required>
                                <label for="subject">Assunto:</label>
                            </div>
                            <div class="form-floating mb-3">
                                <textarea id="message" name="message" cols="30" rows="5" class="form-control" placeholder="Mensagem:" required></textarea>
                                <label for="message">Mensagem:</label>
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-secondary btn-lg" id="toast">Enviar</button>
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
                                <button type="reset" class="btn btn-secondary btn-lg">Limpar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once("includes/footer.php");?>
    </body>
</html>