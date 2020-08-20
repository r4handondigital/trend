     <?php
     /* Template name: A MARCA*/
      /* Busca o arquivo header.php do tema e includa na página */
      get_header();
    ?>

  <section class="img-interna" style="background-image: url(<?php the_field('imagem_de_topo'); ?>);" > </section>

  
<section class="mapa-site">
      <div class="container">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
                <li class="breadcrumb-item active" aria-current="page">A MARCA</li>
              </ol>
            </nav>
          </div>
      </div>
</section>
    
      <section class="internas a-marca-texto">
          <div class="container">
              <div class="row">
                  

                  <div class="col-md-4 col-sm-12">
                    <div class="grid">
                      <figure class="effect-julia">
                          <img src="<?php the_field('foto-lateral'); ?>" alt="A Marca Trend Eyewear"/>
                          <figcaption>
                            <h2><?php echo strip_tags(get_the_title()); ?></h2>
                           
                            
                          </figcaption>     
                        </figure>

                     
                  </div>
              </div>


              <div class="col-md-8 col-sm-12">


                     <div class="conteudo">
             
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                           
                              <?php the_content(); ?> 

                            <?php endwhile; endif; ?> 
                          <?php wp_reset_query(); ?> 
                      
                    </div>


                  </div>
          </div>
      </section>
      <section class="seja-revendedor">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
              <h1>SEJA UMA REVENDEDORA AUTORIZADA
                  <span>TREND EYEWEAR</span></h1>
            </div>
            <div class="col-md-4">
                <a class="btn btn-light right" href="<?php bloginfo('url'); ?>/entre-em-contato">TENHO INTERESSE</a>
            </div>
            
          </div>
        </div>
      </div>
  </section>
 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>