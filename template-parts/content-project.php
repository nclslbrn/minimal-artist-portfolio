<?php if( !is_single() ) { ?>

  <div id="project-<?php echo get_the_ID(); ?>" class="project-summary clearfix row">

    <div class="col-6 column">
      <a href="<?php echo get_permalink(); ?>" class="project-cover">
        <?php echo get_the_post_thumbnail( get_the_ID(), 'cover'); ?>
      </a>
    </div>
    <div class="col-6 column cartel">
      <div class="wrapper">

        <h4 class="project-title">
          <?php echo get_the_title(); ?>
        </h4>

        <p class="description">
          <?php echo get_post_meta( get_the_ID(), 'CARTEL', true); ?>
          <span class="date">
            <?php echo mysql2date("Y", $post->post_date_gmt); ?>
          </span>
        </p>

        <a href="<?php echo get_permalink(); ?>" class="button">
          <?php _e('Read more', 'Minimal-Artistic-Portfolio'); ?>
        </a>

      </div>

    </div>

  </div>

<?php } if( is_single() ) { ?>
  <header class="entry-header">
    <h1 class="project-title"><?php echo get_the_title(); ?></h1>
  </header>
  <div class="entry-content">
    <?php echo get_the_post_thumbnail( get_the_ID(), 'full'); ?>
    <div class="row">
      <div class="col-3 column">
        <p class="cartel">
          <?php echo get_post_meta( get_the_ID(), 'CARTEL', true); ?>
          <span class="date"><?php echo mysql2date("Y", $post->post_date_gmt); ?></span>.
        </p>
        <?php echo get_event("exposition/exhibition:"); ?>
      </div>
      <div class="col-9 column">
        <?php the_content(); ?>
      </div>
    </div>
  </div>
<?php } ?>
