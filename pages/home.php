<?php
    $featuredPostUrl = "https://noticiascidade.wsformasites.com.br/wp-json/wp/v2/posts?categories_exclude=9&per_page=1&order=desc";
    $curlInitForFeaturedPost = curl_init($featuredPostUrl);
    curl_setopt($curlInitForFeaturedPost, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlInitForFeaturedPost, CURLOPT_SSL_VERIFYPEER, false);
    $featuredPosts = json_decode(curl_exec($curlInitForFeaturedPost));

    $interviewsUrl = "https://noticiascidade.wsformasites.com.br/wp-json/wp/v2/posts?categories=9&per_page=1&order=desc";
    $curlInitForInterviews = curl_init($interviewsUrl);
    curl_setopt($curlInitForInterviews, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlInitForInterviews, CURLOPT_SSL_VERIFYPEER, false);
    $interviews = json_decode(curl_exec($curlInitForInterviews));

    $namesUrl = "https://noticiascidade.wsformasites.com.br/wp-json/wp/v2/posts?categories=9";
    $curlInitForNames = curl_init($namesUrl);
    curl_setopt($curlInitForNames, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlInitForNames, CURLOPT_SSL_VERIFYPEER, false);
    $names = json_decode(curl_exec($curlInitForNames));

    $currentPostsUrl = "https://noticiascidade.wsformasites.com.br/wp-json/wp/v2/posts?per_page=4&order=asc";
    $curlInitForCurrentPosts = curl_init($currentPostsUrl);
    curl_setopt($curlInitForCurrentPosts, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlInitForCurrentPosts, CURLOPT_SSL_VERIFYPEER, false);
    $currentPosts = json_decode(curl_exec($curlInitForCurrentPosts));

    $postsFromWorldUrl = "https://noticiascidade.wsformasites.com.br/wp-json/wp/v2/posts?categories=8&per_page=4&order=asc";
    $curlInitForPostsFromWorld = curl_init($postsFromWorldUrl);
    curl_setopt($curlInitForPostsFromWorld, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlInitForPostsFromWorld, CURLOPT_SSL_VERIFYPEER, false);
    $postsFromWorld = json_decode(curl_exec($curlInitForPostsFromWorld));
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bem-vindo ao Notícias Cidade - O seu portal de notícias</title>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <?php include_once("includes/header.php");?>
        <section id="last-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4 col-md-3 col-lg-2">
                        <div class="title">
                            <h2 class="text-center">Entrevistas</h2>
                        </div>
                        <div class="author-name">
                            <ul class="list-unstyled" style="background-image: url('assets/images/fundo-caixa.png');">
                                <?php foreach($names as $name) {?>
                                    <li>
                                        <a href="entrevista/<?php echo($name->id);?>/<?php echo($name->slug)?>"><?php echo(substr($name->title->rendered, 14, 160));?></a>
                                    </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4 col-lg-5">
                        <div class="title">
                            <h2 class="text-center">Últimas Entrevistas</h2>
                        </div>
                        <?php foreach($interviews as $interview) {?>
                            <div class="main-title">
                                <h3><?php echo($interview->title->rendered);?></h3>
                            </div>
                            <img src="<?php echo($interview->better_featured_image->source_url);?>" alt="<?php echo($interview->better_featured_image->alt_text);?>" id="interview-image">
                            <div class="content-interview">
                                <p><?php echo(substr($interview->content->rendered, 0, 160)."...");?></p>
                            </div>
                            <div class="read-more d-grid gap-2">
                                <button class="btn btn-block" type="button">
                                    <a href="entrevista/<?php echo($interview->id);?>/<?php echo($interview->slug)?>">Leia mais!</a>
                                </button>
                            </div>
                        <?php }?>
                    </div>
                    <div class="col-sm-4 col-md-5 col-lg-5">
                        <div class="title">
                            <h2 class="text-center">Destaque</h2>
                        </div>
                        <?php foreach($featuredPosts as $featuredPost) {?>
                            <div class="main-title">
                                <h3><?php echo($featuredPost->title->rendered);?></h3>
                            </div>
                            <img src="<?php echo($featuredPost->better_featured_image->source_url);?>" alt="<?php echo($featuredPost->better_featured_image->alt_text);?>" id="featured-image">
                            <div class="featured-content">
                                <p><?php echo(substr($featuredPost->excerpt->rendered, 0, 160)."...");?></p>
                            </div>
                            <div class="read-more d-grid gap-2">
                                <button class="btn btn-block" type="button">
                                    <a href="destaque/<?php echo($featuredPost->slug)?>">Leia mais!</a>
                                </button>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="latest-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title">
                            <h2 class="text-center">Notícias recentes</h2>
                        </div>
                        <?php foreach($currentPosts as $post) {?>
                            <div class="card" title="Leia Mais">
                                <a href="noticias-recentes/<?php echo($post->id);?>/<?php echo($post->slug);?>">
                                    <img class="img-fluid" src="<?php echo($post->better_featured_image->source_url);?>" alt="<?php echo($post->better_featured_image->alt_text);?>" title="Leia Mais">
                                    <div class="card-body">
                                        <h5><?php echo($post->title->rendered)?></h5>
                                        <div class="featured-content">
                                            <p><?php echo(substr($post->excerpt->rendered, 0, 160)."...")?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php }?>
                    </div>
                    <div class="col-md-6">
                        <div class="title">
                            <h2 class="text-center">Mundo</h2>
                        </div>
                        <?php foreach($postsFromWorld as $postFromWorld) {?>
                            <div class="card" title="Leia Mais">
                                <a href="mundo/<?php echo($postFromWorld->id);?>/<?php echo($postFromWorld->slug);?>">
                                    <img class="img-fluid" src="<?php echo($postFromWorld->better_featured_image->source_url);?>" alt="<?php echo($postFromWorld->better_featured_image->alt_text);?>" title="Leia Mais">
                                    <div class="card-body">
                                        <h5><?php echo($postFromWorld->title->rendered);?></h5>
                                        <div class="featured-content">
                                            <p><?php echo(substr($postFromWorld->excerpt->rendered, 0, 160)."...");?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </section>
        <?php include_once("includes/footer.php");?>
    </body>
</html>