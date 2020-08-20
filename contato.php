     <?php
     /* Template name: CONTATO*/
      /* Busca o arquivo header.php do tema e includa na página */
      get_header();
    ?>

   <section class="img-interna" style="background-image: url(<?php bloginfo('template_url'); ?>/libs/img/contato.jpg);" > </section>
<section class="mapa-site">
      <div class="container">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php bloginfo('url'); ?>/">HOME</a></li>
                <li class="breadcrumb-item active" aria-current="page">Entre em contato</li>
              </ol>
            </nav>
          </div>
      </div>
</section>
  

    
      <section class="internas a-marca-texto">
          <div class="container">
              <div class="row">
                  

              <div class="col-md-6 col-sm-12">
                    <h3>Trend Eyewear - Matriz</h3>
                    <ul>
                      <li>Av. Engenheiro Roberto Freire, 2632 - Loja B06 </li>
                      <li>Capim Macio, Natal - RN, 59082-400</li>
                      <li>contato@trendeyewear.com.br</li>
                      <li>+55 84 9 9909-3962</li>
                    </ul>


                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.944209770244!2d-35.191457385232596!3d-5.863468395751748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b2ff3ecf6ca6a1%3A0x409a01a0fef40c06!2sTrend%20Eyewear!5e0!3m2!1spt-BR!2sbr!4v1597785776507!5m2!1spt-BR!2sbr" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>




              <div class="col-md-6 col-sm-12">
                   
             <div class="campo-formulario">
                        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
                           
                              <?php the_content(); ?> 

                            <?php endwhile; endif; ?> 
                          <?php wp_reset_query(); ?> 
              </div>

                  </div>
          </div>
        </div>
      </section>
     
 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>