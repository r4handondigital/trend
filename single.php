     <?php
  
      /* Busca o arquivo header.php do tema e includa na página */
      get_header();
    ?>

  <section class="img-interna" style="background-image: url(<?php bloginfo('template_url'); ?>/libs/img/categories.jpg);" > </section>

  

    
      <section class="internas ">
          <div class="container">
              <div class="row">
                  

                  <div class="col-sm-12">
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