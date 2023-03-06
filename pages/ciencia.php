<?php
    $sciencePostsUrl = "https://noticiascidade.wsformasites.com.br/wp-json/wp/v2/posts?categories=7&per_page=6&order=desc";
    $curlInitForSciencePostsUrl = curl_init($sciencePostsUrl);
    curl_setopt($curlInitForSciencePostsUrl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlInitForSciencePostsUrl, CURLOPT_SSL_VERIFYPEER, false);
    $sciencePosts = json_decode(curl_exec($curlInitForSciencePostsUrl));
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notícias Cidade - Acompanhe as notícias relacionadas a área da Ciência</title>
    </head>
    <body>
        <?php include_once("includes/header.php");?>
        <section id="science-news">
            <div class="container-fluid">
                <div id="title">
                    <h2 class="text-center">Notícias relacionadas a Ciência</h2>
                </div>
                <div class="row">
                    <?php foreach($sciencePosts as $sciencePost) {?>
                        <div class="col-sm-6 col-md-6 col-xl-4 col-xxl-6">
                            <div class="card">
                                <img src="<?php echo($sciencePost->better_featured_image->source_url);?>" alt="<?php echo($sciencePost->better_featured_image->alt_text);?>" title="Imagem relacionada a notícia da seção Ciência">
                                <div class="card-body">
                                    <h5><?php echo($sciencePost->title->rendered);?></h5>
                                    <div class="related-content">
                                        <p><?php echo(substr($sciencePost->excerpt->rendered, 0, 160)."...");?></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-block">
                                        <a href="noticia-ciencia/<?php echo($sciencePost->id);?>/<?php echo($sciencePost->slug);?>">Leia mais</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </section>
        <?php include_once("includes/footer.php");?>
    </body>
</html>