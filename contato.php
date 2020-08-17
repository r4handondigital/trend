     <?php
     /* Template name: CONTATO*/
      /* Busca o arquivo header.php do tema e includa na página */
      get_header();
    ?>

   <section class="img-interna" style="background-image: url(<?php bloginfo('template_url'); ?>/libs/img/contato.jpg);" > </section>

  

    
      <section class="internas a-marca-texto">
          <div class="container">
              <div class="row">
                  

              <div class="col-md-6 col-sm-12">
                    <h3>Trend Eyewear - Matriz</h3>
                    <ul>
                      <li>Av. Engenheiro Roberto Freire, 2632 Loja B06 (Dunnas Shopping)</li>
                      <li>Capim Macio, Natal - RN, 59082-400</li>
                      <li>contato@trendeyewear.com.br</li>
                      <li>+55 84 9 9909-3962</li>
                    </ul>
              </div>




              <div class="col-md-6 col-sm-12">
                   
             
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                           
                              <?php the_content(); ?> 

                            <?php endwhile; endif; ?> 
                          <?php wp_reset_query(); ?> 
                                         


                  </div>
          </div>
        </div>
      </section>
     
 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>