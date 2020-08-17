     <?php
 
      /* Busca o arquivo header.php do tema e includa na página */
      get_header();
    ?>

  <section class="img-interna" style="background-image: url(<?php bloginfo('template_url'); ?>/libs/img/categories.jpg);" > </section>

  

    
      <section class="internas ">
          <div class="container">

            <div class="row">
              <div class="col-sm-12">
                <p class="center">A Trend Eyewear apresenta opções para os mais diversos perfis de clientes, desde as últimas tendências para o público jovem, como opções clássicas para homens e mulheres mais maduros. Há ainda óculos confortáveis e divertidos para as crianças e modelos esportivos para os amantes deste lifestyle.</p>
              </div>
            </div>
              <div class="row">
                  
                
                <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

                  <div class="col-md-4 col-sm-12">
                    <div class="grid">

                      <figure class="effect-goliath">
                          <img src="<?php the_field('capa_dos_produtos'); ?>" alt="A Marca Trend Eyewear"/>
                          <figcaption>
                            <h2><?php echo strip_tags(get_the_title()); ?></h2>
                            <p>Confira nossos modelos</p>
                            <a href="<?php the_permalink(); ?>">Confira</a>
                          </figcaption>     
                        </figure>

                  
                     
                  </div>
              </div>
               <?php endwhile; endif; ?> 
                      <?php wp_reset_query(); ?>

          
          </div>


          <div class="row">
                    <div class="col s12">
                      <div class="navigation">
                          <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
                      </div>  
                    </div>
                  </div><!--.row-->

      </section>
      <section class="seja-revendedor">
      <div class="container">
        <div class="row">
            <div class="col-md-8">
              <h1>SEJA UMA REVENDEDORA AUTORIZADA
                  <span>TREND EYEWEAR</span></h1>
            </div>
            <div class="col-md-4">
                <a class="btn btn-light right">TENHO INTERESSE</a>
            </div>
            
          </div>
        </div>
      </div>
  </section>
 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>