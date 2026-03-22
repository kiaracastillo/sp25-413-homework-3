<?php

get_header();
?>

<main class="main">

    <div class="wrap">
  <div class="page-child">

    <aside class="page-side"> <h2>Recent Stories</h2>

    <?php
 $child_posts = new WP_Query(array(
      'post_type' => 'post',
     'posts_per_page' => 3
      ));

    if ( $child_posts->have_posts() ) :
        while ( $child_posts->have_posts() ) : $child_posts->the_post();
      ?>

     <article class="mini-post">
    <h3>
     <a href="<?php the_permalink(); ?>"> <?php the_title(); ?></a>
                      
    </h3>

      <div class="mini-meta"> <?php the_time('F j, Y'); ?> </div>
              </article>

      <?php
         endwhile;
            wp_reset_postdata();
        endif;
                ?>
    </aside>

     <section class="page-main">

     <?php if ( have_posts() ) : ?>
         <?php while ( have_posts() ) : the_post(); ?>

           <article <?php post_class(); ?>>

      <header>  <h1><?php the_title(); ?></h1> </header>

        <div class="note-box">
     The Metro Report </div>

         <?php if ( has_post_thumbnail() ) : ?>
              <div class="img-single">
                  <?php the_post_thumbnail('large'); ?>
             </div>
               <?php endif; ?>

            <div class="contenido"> <?php the_content(); ?></div>

         </article>

        <?php endwhile; ?>
    <?php else : ?>
    <p>No page found.</p>
<?php endif; ?>

   </section>

  </div>



    </div>


</main>

<?php get_footer(); ?>