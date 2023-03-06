<?php
    $id = $url["1"];
    $slug = $url["2"];
    $postFromHealthUrl = "https://noticiascidade.wsformasites.com.br/wp-json/wp/v2/posts/$id?categories=6";
    $curlInitForPostFromHealthUrl = curl_init($postFromHealthUrl);
    curl_setopt($curlInitForPostFromHealthUrl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlInitForPostFromHealthUrl, CURLOPT_SSL_VERIFYPEER, false);
    $post = json_decode(curl_exec($curlInitForPostFromHealthUrl));

    $postsFromHealthUrl = "https://noticiascidade.wsformasites.com.br/wp-json/wp/v2/posts?categories=6&per_page=6&exclude=$id&order=desc";
    $curlInitForPostsFromHealthUrl = curl_init($postsFromHealthUrl);
    curl_setopt($curlInitForPostsFromHealthUrl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlInitForPostsFromHealthUrl, CURLOPT_SSL_VERIFYPEER, false);
    $postsFromHealth = json_decode(curl_exec($curlInitForPostsFromHealthUrl));
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo($post->title->rendered);?> - Notícias Cidade - O seu portal de notícias</title>
    </head>
    <body>
        <?php include_once("includes/header.php");?>
        <section id="post">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="card" id="related-news">
                            <img src="<?php echo($post->better_featured_image->source_url);?>" alt="<?php echo($post->better_featured->alt_text);?>">
                            <div class="card-body">
                                <h5 class="text-center" id="news-title"><?php echo($post->title->rendered);?></h5>
                                <div class="related-content">
                                    <p><?php echo($post->content->rendered);?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="related-posts">
                            <h2 class="text-center">Posts Relacionados</h2>
                            <?php foreach($postsFromHealth as $posts) {?>
                                <div class="card" id="related-news">
                                    <a href="noticia-saude/<?php echo($posts->id)?>/<?php echo($posts->slug);?>">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <img class="img-fluid" src="<?php echo($posts->better_featured_image->source_url);?>" alt="<?php echo($posts->better_featured_image->alt_text);?>">
                                            </div>
                                            <div class="col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                                <div class="text-from-related-posts">
                                                    <p><?php echo(substr($posts->excerpt->rendered, 0, 160)."...");?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div id="comments">
                    <h3 class="text-center">Deixe o seu comentário</h3>
                    <div id="disqus_thread"></div>
                    <script>
                        /**
                        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
                        /*
                        var disqus_config = function () {
                        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                        };
                        */
                        (function() { // DON'T EDIT BELOW THIS LINE
                        var d = document, s = d.createElement('script');
                        s.src = 'https://https-www-noticias-cidade-wsformasites-com-br.disqus.com/embed.js';
                        s.setAttribute('data-timestamp', +new Date());
                        (d.head || d.body).appendChild(s);
                        })();
                    </script>
                    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                </div>
            </div>
        </section>
        <?php include_once("includes/footer.php");?>
    </body>
</html>