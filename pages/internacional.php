<?php
    $internationalNewsUrl = "https://noticiascidade.wsformasites.com.br/wp-json/wp/v2/posts?categories=4&per_page=6&order=desc";
    $curlInitForInternationalNewsUrl = curl_init($internationalNewsUrl);
    curl_setopt($curlInitForInternationalNewsUrl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlInitForInternationalNewsUrl, CURLOPT_SSL_VERIFYPEER, false);
    $internationalNews = json_decode(curl_exec($curlInitForInternationalNewsUrl));
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notícias Cidade - Acompanhe as notícias relacionadas ao que acontecem no Mundo</title>
    </head>
    <body>
        <?php include_once("includes/header.php");?>
        <section id="international-news">
            <div class="container-fluid">
                <div id="title">
                    <h2 class="text-center">Notícias relacionadas a Internacional</h2>
                </div>
                <div class="row">
                    <?php foreach($internationalNews as $post) {?>
                        <div class="col-sm-6 com-md-6 col-xl-4 col-xxl-6">
                            <div class="card">
                                <img src="<?php echo($post->better_featured_image->source_url);?>" alt="<?php echo($post->better_featured_image->alt_text);?>">
                                <div class="card-body">
                                    <h5><?php echo($post->title->rendered)?></h5>
                                    <div class="related-content">
                                        <p><?php echo(substr($post->excerpt->rendered, 0, 160)."...");?></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-block">
                                        <a href="noticia-internacional/<?php echo($post->id);?>/<?php echo($post->slug);?>">Leia mais</a>
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