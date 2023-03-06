<?php
    $postsFromEconomyUrl = "https://noticiascidade.wsformasites.com.br/wp-json/wp/v2/posts?categories=5&per_page=6&order=desc";
    $curlInitForPostsFromEconomyUrl = curl_init($postsFromEconomyUrl);
    curl_setopt($curlInitForPostsFromEconomyUrl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlInitForPostsFromEconomyUrl, CURLOPT_SSL_VERIFYPEER, false);
    $postsFromEconomy = json_decode(curl_exec($curlInitForPostsFromEconomyUrl));
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notícias Cidade - Acompanhe as notícias relacionadas ao que acontece na Economia Brasileira e Internacional</title>
    </head>
    <body>
        <?php include_once("includes/header.php");?>
        <section id="economy-news">
            <div class="container-fluid">
                <div id="title">
                    <h2 class="text-center">Notícias relacionadas a Economia</h2>
                </div>
                <div class="row">
                    <?php foreach($postsFromEconomy as $posts) {?>
                        <div class="col-sm-6 col-md-6 col-lg-6 col-xl-4 col-xxl-6">
                            <div class="card">
                                <img src="<?php echo($posts->better_featured_image->source_url);?>" alt="<?php echo($posts->better_featured_image->alt_text);?>" title="Imagem relacionada a notícia da seção Economia">
                                <div class="card-body">
                                    <h5><?php echo($posts->title->rendered);?></h5>
                                    <div class="related-content">
                                        <p><?php echo(substr($posts->excerpt->rendered, 0, 160)."...");?></p>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-block">
                                        <a href="noticia-economia/<?php echo($posts->id);?>/<?php echo($posts->slug);?>">Leia mais</a>
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