<?php
    $search = $_POST["search"];
    $resultsOfSearchUrl = "https://noticiascidade.wsformasites.com.br/wp-json/wp/v2/posts?search=$search&per_page=9";
    $curlInitForResultsOfSearch = curl_init($resultsOfSearchUrl);
    curl_setopt($curlInitForResultsOfSearch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlInitForResultsOfSearch, CURLOPT_SSL_VERIFYPEER, false);
    $resultsOfSearch = json_decode(curl_exec($curlInitForResultsOfSearch));
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notícias Cidade - Veja os resultados da sua pesquisa por <?php echo($_POST["search"]);?></title>
    </head>
    <body>
        <?php include_once("includes/header.php")?>
        <section id="search">
            <div class="container-fluid">
                <div id="title">
                    <h2 class="text-center">Sua busca retornou o(s) seguinte(s) resultado(s):</h2>
                </div>
                <div class="row">
                    <?php foreach($resultsOfSearch as $posts) {?>
                        <?php if($posts) {?>
                            <div class="col-sm-6 col-md-12 col-lg-4 col-xl-4">
                                <div class="card">
                                    <a href="resultado-da-pesquisa/<?php echo($posts->id);?>/<?php echo($posts->slug);?>">
                                        <img src="<?php echo($posts->better_featured_image->source_url);?>" alt="<?php echo($posts->better_featured_image->alt_text);?>" class="img-fluid">
                                        <div class="card-body">
                                            <h5><?php echo($posts->title->rendered);?></h5>
                                            <div class="related-content">
                                                <p><?php echo(substr($posts->excerpt->rendered, 0, 160)."...");?></p>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button class="btn btn-block">Leia Mais</button>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php } else {?>
                            <?php header("Location: http://localhost/noticiascidade/404");?>
                        <?php }?>
                    <?php }?>
                </div>
            </div>
        </section>
        <?php include_once("includes/footer.php");?>
    </body>
</html>