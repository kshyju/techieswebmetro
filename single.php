<?php get_header(); ?>

<div class="container">

  <div id="contentwrapper">
    <div id="content">



      <div class="adsense_top">
        <?php include (TEMPLATEPATH . '/adsense_top.php'); ?>
      </div>



      <?php if (have_posts()) : ?>



      <?php while (have_posts()) : the_post(); ?>



      <div class="post">



        <h2 class="postTitle">
          <a href=""
            <?php the_permalink() ?>"><?php the_title(); ?>
          </a>
        </h2>

        <div class="postMeta">

          <span class="date">
            <?php the_time('M.d, Y') ?>
          </span> in

          <span class="filed">
            <?php the_category(', '); ?>
          </span>

        </div>

        <div class="postContent">
          <?php the_content('(Read the rest of this entry...)'); ?>
        </div>

        <br/>

        <div class="postMeta">
          <span class="tags">
            <?php the_tags('Tags: ', ', ', ''); ?>
          </span>
        </div>

      </div>
      <!-- Closes Post -->



      <div class="comment">

        <?php comments_template(); ?>

      </div>
      <!-- Closes Comments -->



      <?php endwhile; ?>



      <?php else : ?>



      <div class="post">

        <h2 class="center">Not Found</h2>

        <p class="center">Sorry, but you are looking for something that isn't here.</p>

      </div>
      <!-- Closes Post -->



      <?php endif; ?>







    </div>
  </div>
  <!-- Closes Content -->



  <?php get_sidebar(); ?>



  <div class="cleared"></div>

</div>

</div> <!-- Closes Main -->

<div class="bottomcurvewhite"></div>







<?php get_footer(); ?>