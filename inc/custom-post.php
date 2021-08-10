<?php
/**
 * Main post type functions
 * 
 * Create, orders, query allow three new post types (project, event & Gif)
 *
 * @package Minimal-Artistic-Portfolio
 * @version 1.0.0
 */

/**
 * Add project, event & gif custom post
 */
function map_create_post_types() {
	// phpcs:ignore
	register_post_type(
		'project',
		array(
			'labels'              => array(
				'name'               => _x( 'Projects', 'post type general name', 'Minimal-Artistic-Portfolio' ),
				'singular_name'      => _x( 'Project', 'post type singular name', 'Minimal-Artistic-Portfolio' ),
				'menu_name'          => __( 'Projects', 'Minimal-Artistic-Portfolio' ),
				'name_admin_bar'     => __( 'Project', 'Minimal-Artistic-Portfolio' ),
				'add_new'            => __( 'Add New', 'Minimal-Artistic-Portfolio' ),
				'add_new_item'       => __( 'Add New Project', 'Minimal-Artistic-Portfolio' ),
				'new_item'           => __( 'New Project', 'Minimal-Artistic-Portfolio' ),
				'edit_item'          => __( 'Edit Project', 'Minimal-Artistic-Portfolio' ),
				'view_item'          => __( 'View Project', 'Minimal-Artistic-Portfolio' ),
				'all_items'          => __( 'All Projects', 'Minimal-Artistic-Portfolio' ),
				'search_items'       => __( 'Search Projects', 'Minimal-Artistic-Portfolio' ),
				'parent_item_colon'  => __( 'Parent Projects:', 'Minimal-Artistic-Portfolio' ),
				'not_found'          => __( 'No projects found.', 'Minimal-Artistic-Portfolio' ),
				'not_found_in_trash' => __( 'No projects found in Trash.', 'Minimal-Artistic-Portfolio' ),
			),
			'can_export'          => true,
			'public'              => true,
			'exclude_from_search' => false,
			'query_var'           => true,
			'publicly_queryable'  => true,
			'_builtin'            => false,
			'capability_type'     => 'post',
			'rewrite'             => array(
				'slug'       => 'project', 
				'with_front' => false,
			),
			'has_archive'         => true,
			'hierarchical'        => false,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-lightbulb',
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_rest'        => false,
			'supports'            => array( 'title', 'editor', 'revisions', 'thumbnail' ),
			'taxonomies'          => array( 'category', 'post_tag' ),
		)
	);
	// phpcs:ignore
	register_post_type(
		'event',
		array(
			'labels'              => array(
				'name'               => _x( 'Events', 'post type general name', 'Minimal-Artistic-Portfolio' ),
				'singular_name'      => _x( 'Event', 'post type singular name', 'Minimal-Artistic-Portfolio' ),
				'menu_name'          => __( 'Events', 'Minimal-Artistic-Portfolio' ),
				'name_admin_bar'     => __( 'Event', 'Minimal-Artistic-Portfolio' ),
				'add_new'            => __( 'Add New', 'Minimal-Artistic-Portfolio' ),
				'add_new_item'       => __( 'Add New Event', 'Minimal-Artistic-Portfolio' ),
				'new_item'           => __( 'New Event', 'Minimal-Artistic-Portfolio' ),
				'edit_item'          => __( 'Edit Event', 'Minimal-Artistic-Portfolio' ),
				'view_item'          => __( 'View Event', 'Minimal-Artistic-Portfolio' ),
				'all_items'          => __( 'All Events', 'Minimal-Artistic-Portfolio' ),
				'search_items'       => __( 'Search Events', 'Minimal-Artistic-Portfolio' ),
				'parent_item_colon'  => __( 'Parent Events:', 'Minimal-Artistic-Portfolio' ),
				'not_found'          => __( 'No events found.', 'Minimal-Artistic-Portfolio' ),
				'not_found_in_trash' => __( 'No events found in Trash.', 'Minimal-Artistic-Portfolio' ),
			),
			'can_export'          => true,
			'public'              => true,
			'exclude_from_search' => false,
			'query_var'           => true,
			'publicly_queryable'  => true,
			'_builtin'            => false,
			'capability_type'     => 'post',
			'rewrite'             => array(
				'slug'       => 'event', 
				'with_front' => false,
			),
			'has_archive'         => true,
			'hierarchical'        => false,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-calendar',
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_rest'        => true,
			'supports'            => array( 'title', 'editor', 'revisions', 'thumbnail' ),
			'taxonomies'          => array( 'category', 'post_tag' ),
		)
	);
	// phpcs:ignore
	register_post_type(
		'gif',
		array(
			'labels'              => array(
				'name'               => _x( 'Gif', 'post type general name', 'Minimal-Artistic-Portfolio' ),
				'singular_name'      => _x( 'Gif', 'post type singular name', 'Minimal-Artistic-Portfolio' ),
				'menu_name'          => __( 'Gifs', 'Minimal-Artistic-Portfolio' ),
				'name_admin_bar'     => __( 'Gif', 'Minimal-Artistic-Portfolio' ),
				'add_new'            => __( 'Add New', 'Minimal-Artistic-Portfolio' ),
				'add_new_item'       => __( 'Add New Gif', 'Minimal-Artistic-Portfolio' ),
				'new_item'           => __( 'New Gif', 'Minimal-Artistic-Portfolio' ),
				'edit_item'          => __( 'Edit Gif', 'Minimal-Artistic-Portfolio' ),
				'view_item'          => __( 'View Gif', 'Minimal-Artistic-Portfolio' ),
				'all_items'          => __( 'All Gifs', 'Minimal-Artistic-Portfolio' ),
				'search_items'       => __( 'Search Gifs', 'Minimal-Artistic-Portfolio' ),
				'parent_item_colon'  => __( 'Parent Gifs:', 'Minimal-Artistic-Portfolio' ),
				'not_found'          => __( 'No gifs found.', 'Minimal-Artistic-Portfolio' ),
				'not_found_in_trash' => __( 'No gifs found in Trash.', 'Minimal-Artistic-Portfolio' ),
			),
			'can_export'          => true,
			'public'              => true,
			'exclude_from_search' => true,
			'query_var'           => false,
			'publicly_queryable'  => false,
			'_builtin'            => false,
			'capability_type'     => 'post',
			'rewrite'             => array(
				'slug'       => 'gif', 
				'with_front' => false,
			),
			'has_archive'         => false,
			'hierarchical'        => false,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-images-alt2',
			'show_in_menu'        => true,
			'show_in_nav_menus'   => true,
			'show_in_rest'        => true,
			'supports'            => array( 'title', 'thumbnail' ),
			'taxonomies'          => array(),
		)
	);
	// phpcs:ignore
	register_taxonomy(
		__( 'category', 'Minimal-Artistic-Portfolio' ),
		array( 'post', 'page', 'project', 'event' ),
		array(
			'hierarchical' => true,
			'label'        => 'Category',
			'query_var'    => true,
			'rewrite'      => true,
		) 
	);
	// phpcs:ignore
	register_taxonomy( 'post_tag', array( 'post', 'page', 'project', 'event' ) );
}
add_action( 'init', 'map_create_post_types' );

/**
 * List custom post types name
 * 
 * @return array the list of every public post type name
 */
function map_list_content_type_name() {
	$post_type = get_post_types( array( 'public' => true ) );
	return $post_type;
}

/**
 * Add custom post to main & tax query
 *
 * @param object $query global WP_Query.
 */
function map_add_post_types_to_queries( $query ) {
	$post_types = map_list_content_type_name();

	if ( ( is_home() && $query->is_main_query() ) || is_feed() ) {
		$query->set( 'post_type', $post_types );
		return $query;
	}
	if ( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
		$query->set( 'post_type', $post_types );
		return $query;
	}
	return $query;
}
add_filter( 'pre_get_posts', 'map_add_post_types_to_queries' );

/**
 * Query post type loop
 * 
 * @param string $type the custom post type name to query.
 * @param int    $limit how many post we want per pages.
 */
function map_list_custom_posts( $type, $limit ) {    
	$project_query_args = array(
		'post_type'      => $type,
		'post_status'    => 'publish',
	);

	if ( -1 !== $limit ) {
		if ( get_query_var( 'paged' ) ) {
			$paged = get_query_var( 'paged' );
		} elseif ( get_query_var( 'page' ) ) {
			$paged = get_query_var( 'page' );
		} else {
			$paged = 1;
		}
		$project_query_args['paged']          = $paged;
		$project_query_args['posts_per_page'] = $limit;
	}
	$project_query = new WP_Query( $project_query_args );

	if ( $project_query->have_posts() ) {
		while ( $project_query->have_posts() ) {

			global $post;
			$project_query->the_post();

			get_template_part( 'template-parts/content', 'project' );
		}
		if ( $project_query->max_num_pages > 1 && -1 !== $limit ) {
			$current_page = max( 1, get_query_var( 'paged' ) );
	
			echo wp_kses_post(
				paginate_links(
					array(
						'prev_next' => false,
						'current'   => $paged,
						'total'     => $project_query->max_num_pages,
					)
				)
			);
		}
	}
}
/**
 * List every events related to a project
 *
 * @param int $post_id the ID of the project.
 * @return string|boolean HTML list of events links or false if no event found.
 */
function map_get_event( $post_id ) {
	global $wp_query;
	$events              = get_post_meta( $post_id, 'event' );
	$event_module        = '';
	$event_module_result = '';

	if ( ! empty( $events[0] ) ) {
		$event_module .= '<p class="event-of-this-project">' . __( 'Events', 'Minimal-Artistic-Portfolio' ) . ': </p>';
		$event_module .= '<ul class="related-events">';

		foreach ( (array) $events[0] as $event ) {
			$title = get_the_title( $event );
			$url   = get_permalink( $event );

			$event_module_result .= '<li><a href="' . $url . '">' . $title . '</a></li>';
		}
		$event_module = $event_module . $event_module_result . '</ul>';
	}
	if ( empty( $events[0] ) ) {
		return false;
	} elseif ( ! empty( $event_module_result ) ) {
		return $event_module;
	}
}

/**
 * Query all project related to an event
 * 
 * @param int $post_id the ID of the event.
 * @return string|boolean HTML list of projects links or false if no event found.
 */
function map_get_project( $post_id ) {
	$projects       = '';
	$project_module = '';
	$project_query  = new WP_Query(
		array(
			'post_type'      => 'project',
			'post_status'    => 'publish',
			'posts_per_page' => -1, //phpcs:ignore WPThemeReview.CoreFunctionality.PostsPerPage.posts_per_page_posts_per_page
			'meta_query'     => array( //phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_query
				array(
					'key'     => 'event',
					'value'   => $post_id,
					'compare' => 'LIKE',
				),
			),
		)
	);

	if ( ! empty( $project_query->posts ) ) {
		$project_module .= '<p class="list-title">' . __( 'Projects', 'Minimal-Artistic-Portfolio' ) . ':</p>';
		$project_module .= '<ul class="related-projects">';

		foreach ( (array) $project_query->posts as $project ) {
			$url       = get_permalink( $project->ID );
			$projects .= '<li><a href="' . $url . '">' . $project->post_title . '</a></li>';
		}
	}
	if ( ! empty( $projects ) ) {
		$project_module = $project_module . $projects . '<ul>';
		return $project_module;
	} else {
		return false;
	}
}

/**
 * List posts by date/year (from newer to older)
 * 
 * @param string $type post type name.
 * @param int    $limit how many post query.
 * @return string|boolean HTML list of events links or false if no event found.
 */
function map_list_posts_by_years( $type, $limit ) {
	$post_year       = '';
	$current_post_id = get_the_ID();
	$post_year       = date_i18n( 'Y', strtotime( get_post_meta( $current_post_id, 'BEGINDATE', true ) ) );

	wp_reset_postdata();

	$args  = array(
		'post_type'      => $type,
		'posts_per_page' => $limit,
		'meta_key'       => 'BEGINDATE', //phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_key
		'orderby'        => 'meta_value',
		'order'          => 'DESC',
		'meta_query'     => array( //phpcs:ignore WordPress.DB.SlowDBQuery.slow_db_query_meta_query
			array(
				'key'     => 'BEGINDATE',
				'compare' => 'LIKE',
			),
		),
	);
	$posts = new WP_Query( $args );

	if ( $posts->have_posts() ) {
		$post_by_year = array();
		$map_data     = array();
		while ( $posts->have_posts() ) :

			global $post;
			$posts->the_post();
			$year = date_i18n( 'Y', strtotime( get_post_meta( $post->ID, 'BEGINDATE', true ) ) );

			$post_by_year[ $year ][ $post->ID ] = array(
				'id'        => $post->ID,
				'title'     => get_the_title( $post->ID ),
				'link'      => get_permalink( $post->ID ),
				'place'     => get_post_meta( $post->ID, 'PLACE', true ),
				'content'   => get_the_content(),
				'beginDate' => date_i18n( 'j F  Y', strtotime( get_post_meta( $post->ID, 'BEGINDATE', 'true' ) ) ),
				'endDate'   => date_i18n( 'j F Y', strtotime( get_post_meta( $post->ID, 'ENDDATE', 'true' ) ) ),
				'thumbnail' => get_the_post_thumbnail( $post->ID, 'carton' ),
				'post_type' => $post->post_type,
			);


			$map_data[] = array(
				'link'     => get_permalink( $post->ID ),
				'title'    => get_the_title( $post->ID ),
				'latt'     => get_post_meta( $post->ID, 'LATT', true ),
				'long'     => get_post_meta( $post->ID, 'LONG', true ),
			);
		endwhile;
		wp_reset_postdata();

		if ( ! empty( $post_by_year ) ) {
			if ( empty( $post_year ) ) {
				$array_key = array_keys( $post_by_year );
				$last_year = array_shift( $array_key );
			} elseif ( ! empty( $post_year ) ) {
				$last_year = $post_year;
			}

			krsort( $post_by_year ); 
			// TODO move markup in a template parts.
			?>
		<section class="ac-container">

			<?php foreach ( $post_by_year as $year => $posts ) : ?>	
				<div class="<?php echo esc_attr( $type ); ?>-year-section">

					<h3 class="year"><?php echo esc_attr( $year ); ?></h3>

					<div class="yearEventsList">
						<?php 
						foreach ( $posts as $post_by_year ) {
							$args = $post_by_year;
							get_template_part( 'template-parts/events', 'byyear', $args );
						} 
						?>
					</div><!-- .year(Posts/Events)List-->				
			<?php endforeach; ?>

			</div><!-- .<?php echo esc_attr( $type ); ?>-year-section -->
		</section><!-- .ac-container -->
		<script>
			window.eventsMapData = <?php echo json_encode( $map_data ); //phpcs:ignore WordPress.WP.AlternativeFunctions.json_encode_json_encode ?>;
		</script>
			<?php
		}
	} else {
		return false;
	}
}

/**
 * Add single image or gallery related to a post
 * 
 * @param int $post_id the post which we will query attachement.
 * @return int the attachement count.
 */
function map_get_media( $post_id ) {
	$attachments = get_posts(
		array(
			'order_by'       => 'menu_order',
			'order'          => 'ASC',
			'post_type'      => 'attachment',
			'posts_per_page' => -1, // phpcs:ignore WPThemeReview.CoreFunctionality.PostsPerPage.posts_per_page_posts_per_page,
			'post_parent'    => $post_id,
		)
	);

	if ( $attachments ) {
		$count = count( $attachments );

		if ( 1 === $count ) {
			$class    = 'post-attachment mime-' . sanitize_title( $attachments[0]->post_mime_type );
			$thumbimg = wp_get_attachment_image( $attachments[0]->ID, 'thumbnail-size' );
			echo '<div class="' . esc_attr( $class ) . 'single-image">' . wp_kses_post( $thumbimg ) . '</div>';
			return $count;
		}
		if ( $count > 1 ) {
			echo '<div class="gallery">';
			foreach ( $attachments as $attachment ) {
				$class    = 'post-attachment mime-' . sanitize_title( $attachment->post_mime_type );
				$thumbimg = wp_get_attachment_image( $attachment->ID, 'full' );
				echo wp_kses_post( $thumbimg );
			}
			echo '</div><!-- .aap-gallery -->';
			return $count;
		}
	}
}
/**
 * Remove gallery and html tag from content
 *
 * @param string $content the post_content to clean.
 * @return string $content the post_content cleaned.
 */
function map_strip_shortcode_gallery( $content ) {
	preg_match_all( '/' . get_shortcode_regex() . '/s', $content, $matches, PREG_SET_ORDER );
	if ( ! empty( $matches ) ) {
		foreach ( $matches as $shortcode ) {
			if ( 'gallery' === $shortcode[2] ) {
				$pos = strpos( $content, $shortcode[0] );
				if ( false !== $pos ) {
					return substr_replace( $content, '', $pos, strlen( $shortcode[0] ) );
				}
			}
		}
	}
	return $content;
}

/**
 * Add future or actual event on home
 */
function map_contextully_load_last_event() {
	$today = date( 'Y-m-d' );

	$all_events    = new WP_Query(
		array(
			'post_type'      => 'event',
			'post_status'    => 'publish',
			'posts_per_page' => -1, // phpcs:ignore WPThemeReview.CoreFunctionality.PostsPerPage.posts_per_page_posts_per_page,
		) 
	);
	$actual_events = array();
	$count         = 0;
	if ( $all_events->have_posts() ) {
		while ( $all_events->have_posts() ) :

			global $post;
			$all_events->the_post();

			$end_date = get_post_meta( $post->ID, 'ENDDATE', 'true' );


			if ( $end_date > $today ) :

				$actual_events[ $post->ID ]['eventId']  = $post->ID;
				$actual_events[ $post->ID ]['place']    = get_post_meta( $post->ID, 'PLACE', 'true' );
				$actual_events[ $post->ID ]['map_latt'] = get_post_meta( $post->ID, 'LATT', true );
				$actual_events[ $post->ID ]['map_long'] = get_post_meta( $post->ID, 'LONG', true ); 
				
				
				// TODO move markup in a template parts.
				?>
				<?php if ( 0 === $count ) : ?>

					<header class="entry-header actual-event">
						<h2 class="entry-title"><?php echo esc_html( __( 'Coming soon / Now', 'Minimal-Artistic-Portfolio' ) ); ?></h2>
					</header>

				<?php endif; ?>
				<?php
					$GLOBALS['map_latt'] = $actual_events[ $post->ID ]['map_latt'];
					$GLOBALS['map_long'] = $actual_events[ $post->ID ]['map_long']; 
				?>

		<div id="event-<?php echo esc_attr( $post->ID ); ?>" class="event-on-home">
			<div class="event-featured-image">
					<?php the_post_thumbnail( 'full' ); ?>
			</div>
			<div class="event-info">
				<h3><?php echo esc_html( get_the_title( $post->ID ) ); ?></h3>
				<p>
				<svg class="icon icon-location">
					<use xlink:href="#icon-location"></use>
				</svg>
					<?php echo esc_html( $actual_events[ $post->ID ]['place'] ); ?>
				</p>
				<p class="date">
				<svg class="icon icon-calendar">
					<use xlink:href="#icon-calendar"></use>
				</svg>
					<?php echo esc_html( __( 'From', 'Minimal-Artistic-Portfolio' ) ); ?>
					<?php echo esc_html( ' ' . date_i18n( 'j F Y', strtotime( get_post_meta( get_the_ID(), 'BEGINDATE', 'true' ) ) ) ); ?>
					<?php echo esc_html( __( 'to', 'Minimal-Artistic-Portfolio' ) ); ?>
					<?php echo esc_html( ' ' . date_i18n( 'j F Y', strtotime( $end_date ) ) ); ?>
				</p>
				<a class="button" href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>">
					<?php echo esc_html( __( 'Read more', 'Minimal-Artistic-Portfolio' ) ); ?>
				</a>
			</div><!-- event-info -->
		</div><!-- .evennt-on-home -->

				<?php 
				$count++;
		endif;
		endwhile;
	}
	wp_reset_postdata();
}
/**
 * Show custom post in the at a glance admin widget
 */
function map_at_glance_content_table_end() {
	$args     = array(
		'public'   => true,
		'_builtin' => false,
	);
	$output   = 'object';
	$operator = 'and';

	$post_types = get_post_types( $args, $output, $operator );
	foreach ( $post_types as $post_type ) {
		$num_posts = wp_count_posts( $post_type->name );
		$num       = number_format_i18n( $num_posts->publish );
		// phpcs:ignore
		$text = _n( $post_type->labels->singular_name, $post_type->labels->name, intval( $num_posts->publish ) );
		if ( current_user_can( 'edit_posts' ) ) {
			$output  = '<a href="edit.php?post_type=' . esc_attr( $post_type->name ) . '">';
			$output .= esc_html( $num . ' ' . $text );
			$output .= '</a>';

			echo '<li class="post-count ' . esc_attr( $post_type->name ) . '-count">' . wp_kses_post( $output ) . '</li>';
		}
	}
}
add_action( 'dashboard_glance_items', 'map_at_glance_content_table_end' );



/**
 * Unregister the default activity widget
 */
function map_remove_dashboard_widgets() {
	global $wp_meta_boxes;
	unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_activity'] );
}
add_action( 'wp_dashboard_setup', 'map_remove_dashboard_widgets' );

/**
 * Register your custom activity widget
 */
function map_add_custom_dashboard_activity() {
	wp_add_dashboard_widget( 'custom_dashboard_activity', 'Activities', 'map_dashboard_site_activity' );
}
add_action( 'wp_dashboard_setup', 'map_add_custom_dashboard_activity' );

/** 
 * The new function based on wp_dashboard_recent_posts 
 * (in wp-admin/includes/dashboard.php)
 * 
 * @param array $args query post arguments.
 */
function map_dashboard_recent_post_types( $args ) {

	/* Chenged from here */

	if ( ! $args['post_type'] ) {
		$args['post_type'] = 'any';
	}

	$query_args = array(
		'post_type'       => $args['post_type'],
		'post_status'     => $args['status'],
		'orderby'         => 'date',
		'order'           => $args['order'],
		'posts_per_page'  => intval( $args['max'] ),
		'no_found_rows'   => true,
		'cache_results'   => false,
	);
	$posts      = new WP_Query( $query_args );

	if ( $posts->have_posts() ) {
		echo '<div id="' . esc_attr( $args['id'] ) . '" class="activity-block">';

		echo '<h4>' . esc_html( $args['title'] ) . '</h4>';

		echo '<ul>';

		$i = 0;
		//phpcs:ignore
		$today    = date( 'Y-m-d', current_time( 'timestamp' ) );
		//phpcs:ignore
		$tomorrow = date( 'Y-m-d', strtotime( '+1 day', current_time( 'timestamp' ) ) );

		while ( $posts->have_posts() ) {
			$posts->the_post();

			$time = get_the_time( 'U' );
			if ( date( 'Y-m-d', $time ) === $today ) {
				$relative = __( 'Today', 'Minimal-Artistic-Portfolio' );
			} elseif ( date( 'Y-m-d', $time ) === $tomorrow ) {
				$relative = __( 'Tomorrow', 'Minimal-Artistic-Portfolio' );
			} else {
				/* translators: date and time format for recent posts on the dashboard, see http://php.net/date */
				$relative = date_i18n( 'j F Y', $time );
			}

			$text = sprintf(
				/* translators: 1: relative date, 2: time, 4: post title */
				__( '<span>%1$s, %2$s</span> <a href="%3$s">%4$s</a>', 'Minimal-Artistic-Portfolio' ),
				$relative,
				get_the_time(),
				get_edit_post_link(),
				_draft_or_post_title()
			);

			$hidden = $i >= $args['display'] ? ' class="hidden"' : '';
			echo wp_kses_post( "<li{$hidden}>$text</li>" );
			$i++;
		}

		echo '</ul>';
		echo '</div>';
	} else {
		return false;
	}

	wp_reset_postdata();

	return true;
}

/**
 * The replacement widget
 */
function map_dashboard_site_activity() {
	echo '<div id="activity-widget">';

	$future_posts = map_dashboard_recent_post_types(
		array(
			'post_type' => 'any',
			'display'   => 3,
			'max'       => 7,
			'status'    => 'future',
			'order'     => 'ASC',
			'title'     => __( 'Publishing Soon', 'Minimal-Artistic-Portfolio' ),
			'id'        => 'future-posts',
		)
	);

	$recent_posts = map_dashboard_recent_post_types(
		array(
			'post_type' => 'any',
			'display'   => 3,
			'max'       => 7,
			'status'    => 'publish',
			'order'     => 'DESC',
			'title'     => __( 'Recently Published', 'Minimal-Artistic-Portfolio' ),
			'id'        => 'published-posts',
		)
	);

	$recent_comments = wp_dashboard_recent_comments( 10 );

	if ( ! $future_posts && ! $recent_posts && ! $recent_comments ) {
		echo '<div class="no-activity">';
		echo '<p class="smiley"></p>';
		echo '<p>' . esc_html( __( 'No activity yet!', 'Minimal-Artistic-Portfolio' ) ) . '</p>';
		echo '</div>';
	}

	echo '</div>';
}

/**
 * Show post thumbnails in feed
 *
 * @param string $content the post excerpt or post_content.
 * @return string $content with the featured image.
 */
function map_post_thumbnail_feeds( $content ) {
	global $post;
	if ( has_post_thumbnail( $post->ID ) ) {
		$content = '<div>' . get_the_post_thumbnail( $post->ID ) . '</div>' . $content;
	}
	return $content;
}
add_filter( 'the_excerpt_rss', 'map_post_thumbnail_feeds' );
add_filter( 'the_content_feed', 'map_post_thumbnail_feeds' );


?>
