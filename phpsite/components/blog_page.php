<div class="h-card"> 
    <!--
    <div hx-get="/components/menu.html" id="menu-head" hx-trigger="load">
    </div>
  -->
     

  <!-- Reference for representative h-card properties: https://microformats.org/wiki/h-card -->
      <header rel="author" class="blog">        
        <a href="/blog">&lt; Tornar al blog</a>
      </header>

    <main>
      <?php 
        require_once ("../../vendor/Michelf/Markdown.inc.php");
        use Michelf\Markdown;

        $uri = $_SERVER["REQUEST_URI"];
        $article = substr($uri, strlen("/blog/"));
        if (file_exists("../../articles/$article.md")) {
            $content = file_get_contents("../../articles/$article.md");            
            echo Markdown::defaultTransform($content);  
        }
        else {
            ?>
             <p>Error 404 falso</p>
             Te mando un error 404 con un código HTTP 200. No mola, ¿verdad?
            <?php
        }
       ?>
  

    </main>
  </div>

  <div hx-get="/components/menu.html" id="menu-head" hx-trigger="load">
  </div>