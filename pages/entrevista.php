<?php
    $id = $url["1"];
    $slug = $url["2"];
    $url = "https://noticiascidade.wsformasites.com.br/wp-json/wp/v2/posts?slug=$slug&categories=9";
    $curlInit = curl_init($url);
    curl_setopt($curlInit, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curlInit, CURLOPT_SSL_VERIFYPEER, false);
    $currentInterview = json_decode(curl_exec($curlInit));

    $latestInterviewsUrl = "https://noticiascidade.wsformasites.com.br/wp-json/wp/v2/posts?categories=9&per_page=6&exclude=$id&order=desc";
    $latestInterviewsCurlInit = curl_init($latestInterviewsUrl);
    curl_setopt($latestInterviewsCurlInit, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($latestInterviewsCurlInit, CURLOPT_SSL_VERIFYPEER, false);
    $latestInterviews = json_decode(curl_exec($latestInterviewsCurlInit));
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php foreach($currentInterview as $title) {?>
            <title><?php echo($title->title->rendered);?> - Notícias Cidade - O seu portal de notícias</title>
        <?php }?>
    </head>
    <body>
        <?php include_once("includes/header.php");?>
        <section id="interview">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <?php foreach($currentInterview as $interview) {?>
                            <div class="card">
                                <img src="<?php echo($interview->better_featured_image->source_url);?>" alt="<?php echo($interview->better_featured_image->alt_text);?>" class="img-fluid">
                                <div class="card-body">
                                    <h5 class="text-center" id="interview-title"><?php echo($interview->title->rendered);?></h5>
                                    <div class="related-content">
                                        <p><?php echo($interview->content->rendered);?></p>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                        <div class="related-interviews text-justify">
                            <h2 class="text-center">Outras entrevistas</h2>
                            <?php foreach($latestInterviews as $latestInterview) {?>
                                <div class="card" id="card-from-other-interviews">
                                    <a href="entrevista/<?php echo($latestInterview->id);?>/<?php echo($latestInterview->slug);?>">
                                        <div class="row">
                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                                <img src="<?php echo($latestInterview->better_featured_image->source_url);?>" alt="<?php echo($latestInterview->better_featured_image->alt_text);?>" class="img-fluid">
                                            </div>
                                            <div class="col-sm-6 col-md-8 col-lg-8 col-xl-8 col-xxl-8">
                                                <div class="text-from-other-interviews">
                                                    <p><?php echo(substr($latestInterview->excerpt->rendered, 0, 160)."...");?></p>
                                                </div>
                                            </div>
                                        </div>
                                    <a>
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