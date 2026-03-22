<?php

get_header();
?>

<main class="main">
    <div class="wrap">

 <?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>

         <article <?php post_class('post-single'); ?>>



         <header>
         <h1 class="titulo-alt"><?php the_title(); ?></h1>

      <div class="meta-alt">  By <?php the_author(); ?> | <?php the_time('F j, Y'); ?>  </div>
                    </header>

        <?php if ( has_post_thumbnail() ) : ?>
              <div class="img-single">
              <?php the_post_thumbnail('large'); ?>
               </div>
        
       <?php endif; ?>

           <div class="contenido-alt">
                        <?php the_content(); ?>
          </div>

                </article>

            <?php endwhile; ?>
        <?php else : ?>

            <p>No post found.</p>

        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>