<?php
    $brazilNewsUrl = "https://noticiascidade.wsformasites.com.br/wp-json/wp/v2/posts?categories=3&per_page=6&order=desc";
    $curlInitForBrazilNewsUrl = curl_init($brazilNewsUrl);
    curl_setopt($curlInitForBrazilNewsUrl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlInitForBrazilNewsUrl, CURLOPT_SSL_VERIFYPEER, false);
    $brazilNews = json_decode(curl_exec($curlInitForBrazilNewsUrl));
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notícias Cidade - Acompanhe as notícias relacionadas ao que acontece no Brasil</title>
    </head>
    <body>
        <?php include_once("includes/header.php");?>
        <section id="brazil-news">
            <div class="container-fluid">
                <div id="title">
                    <h2 class="text-center">Notícias relacionadas ao Brasil</h2>
                </div>
                <div class="row">
                    <?php foreach($brazilNews as $post) {?>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-6">
                            <div class="card">
                                <img src="<?php echo($post->better_featured_image->source_url);?>" alt="<?php echo($post->better_featured_image->alt_text);?>" class="img-fluid">
                                <div class="card-body">
                                    <h5><?php echo($post->title->rendered)?></h5>
                                    <div class="related-content">
                                        <p><?php echo(substr($post->excerpt->rendered, 0, 160)."...");?></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-block">
                                        <a href="noticia-brasil/<?php echo($post->id);?>/<?php echo($post->slug);?>">Leia mais</a>
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