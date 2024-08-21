<?php
get_header();

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <div class="hostel-room">
            <h1><?php the_title(); ?></h1>
            
            <?php if (has_post_thumbnail()) : ?>
                <div class="hostel-room-image">
                    <?php the_post_thumbnail('large'); // Adjust size as needed ?>
                </div>
            <?php endif; ?>
            
            <div class="hostel-room-content">
                <?php the_content(); ?>
            </div>
            <div class="hostel-room-meta">
                <p><strong>Room Number:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'room_number', true)); ?></p>
                <p><strong>Capacity:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'capacity', true)); ?></p>
                <p><strong>Amenities:</strong> <?php echo esc_html(get_post_meta(get_the_ID(), 'amenities', true)); ?></p>
                <p><strong>Availability:</strong> 
                    <?php
                    $terms = get_the_terms(get_the_ID(), 'room_availability');
                    if ($terms && !is_wp_error($terms)) {
                        echo esc_html($terms[0]->name);
                    } else {
                        echo 'Not Available';
                    }
                    ?>
                </p>
            </div>
        </div>

    <?php endwhile;
else :
    echo '<p>No hostel room details found.</p>';
endif;

get_footer();
