<?php
    $slug = $url["1"];
    $url = "https://noticiascidade.wsformasites.com.br/wp-json/wp/v2/posts?slug=$slug";
    $curlInit = curl_init($url);
    curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlInit, CURLOPT_SSL_VERIFYPEER, false);
    $post = json_decode(curl_exec($curlInit));
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php foreach($post as $currentTitle) {?>
            <title><?php echo($currentTitle->title->rendered)?> - Notícias Cidade - O seu canal de notícias</title>
        <?php }?>
    </head>
    <body>
        <?php include_once("includes/header.php");?>
        <section id="featured">
            <div class="container-fluid">
                <?php foreach($post as $featuredPost) {?>
                    <div class="card">
                        <img src="<?php echo($featuredPost->better_featured_image->source_url);?>" class="card-img-top" alt="<?php echo($featuredPost->better_featured_image->alt_text);?>">
                        <div class="card-body">
                            <h2 class="text-center"><?php echo($featuredPost->title->rendered);?></h2>
                            <div class="featured-content text-justify">
                                <p><?php echo($featuredPost->content->rendered);?></p>
                            </div>
                        </div>
                    </div>
                <?php }?>
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