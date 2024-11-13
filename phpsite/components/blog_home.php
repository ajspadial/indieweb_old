<div class="h-card"> 
    <!--
    <div hx-get="/components/menu.html" id="menu-head" hx-trigger="load">
    </div>
  -->
     

  <!-- Reference for representative h-card properties: https://microformats.org/wiki/h-card -->
      <header rel="author" class="blog">        
        <h1 class="p-name blog">
          Bits al serviciu de la Ciencia
        </h1>
        <p class="subtitle">un blog de Antonio J Sánchez-Padial</p>
      </header>
<!-- TODO
        -- Si tas viendo esto nun ye un descuidu, ye pa alcordame de les fasteres que quiero poner -->
        <div class="menu inner-menu">
          <a href="/">aniciu</a>
          ·
         <!-- <a href="enseñu">enseñu</a>
          · -->
          <a class ="current-menu"  target="_self">blog</a>
          <!--
          ·
          <a href="nodicies">nes nodícies</a>
          ·
          <a href=""erros">erros</a>
          -->
        </div>
    <main >
      
      <?php 
        require_once ("../../vendor/Michelf/Markdown.inc.php");
        use Michelf\Markdown;
        echo Markdown::defaultTransform(file_get_contents("../../articles/nuevu-sitiu.md"));    
      ?>

    </main>
  </div>

  <div hx-get="/components/menu.html" id="menu-head" hx-trigger="load">
  </div>