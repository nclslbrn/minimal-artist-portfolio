<?php /* template for displaying all events on events.php page template */ ?>

<!-- <div class="entry-content"> -->
  <div id="change-event-display-mode" class="event-menu">

    <button data-toggle="map" class="button">
      <svg class="icon icon-location">
        <use xlink:href="#icon-location"></use>
      </svg>
      <?php _e( 'Map', 'Minimal-Artistic-Portfolio'); ?>
    </button>
    <button data-toggle="events-list" class="button active">
      <svg class="icon icon-calendar">
        <use xlink:href="#icon-calendar"></use>
      </svg>
      <?php _e( 'List', 'Minimal-Artistic-Portfolio'); ?>
    </button>
  </div>

  <div class="clearfix"></div>

  <div id="events-list">
    <?php map_list_post_by_year( "event", -1 );?>

    <section class="ac-container">
      <div class="event-year-section">
        <?php get_metabox(get_the_ID(), 'school', true);?>
        <?php get_metabox(get_the_ID(), 'experience', true);?>
      </div>
    </section>
  </div>

  <!-- <div class="map-overlay" style="height: 0; overflow: hidden;"> -->
    <div id="map" class="map multiple-marker"></div>
  <!-- </div> .map-overlay -->

<!-- </div> .entry-content -->
