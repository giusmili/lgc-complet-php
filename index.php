<!-- head -->
    <?php
        include_once __DIR__ ."/controller/config.php";
        include_once __DIR__ ."/model/data.php";
        include_once __DIR__ ."/partial/head.inc.php";
        

  
    # main
        include_once __DIR__ ."/partial/main.inc.php";
    
    # footer
        include_once __DIR__ ."/partial/footer.inc.php";

    ?>


    <script type="application/ld+json">
        {
          "@context": "https://schema.org/",
          "@type": "Article",
          "headline": "Mon article",
          "image": "https://www.example.com/asset/Caricature.png",
          "author": {
            "@type": "Person",
            "name": "William"
          },
          "publisher": {
            "@type": "Organization",
            "name": "Nom du site",
            "logo": {
              "@type": "ImageObject",
              "url": "https://www.example.com/favicon/apple-touch-icon.png"
            }
          },
          "datePublished": "2025-01-01",
          "dateModified": "2025-01-01",
          "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.example.com/article-url"
          }
        }</script>
</body>
</html>