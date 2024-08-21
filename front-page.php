<?php

get_header();
?>

<!-- <div class="slider-wrapper">
    <?php for ($i = 1; $i <= 3; $i++) : ?>
        <?php if (get_theme_mod("slider_image_$i")) : ?>
            <div class="slider-item">
                <img src="<?php echo esc_url(get_theme_mod("slider_image_$i")); ?>" alt="<?php echo esc_attr(get_theme_mod("slider_caption_$i")); ?>">
                <?php if (get_theme_mod("slider_caption_$i")) : ?>
                    <div class="caption"><?php echo esc_html(get_theme_mod("slider_caption_$i")); ?></div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    <?php endfor; ?>
</div>
<div class="slider-buttons">
    <button class="slider-prev">Prev</button>
    <button class="slider-next">Next</button>
</div> -->




<div class="container">
    <div class="box box1">
        <h1><i class="fa-solid <?php echo esc_attr(get_theme_mod('box1_icon', 'fa-graduation-cap')); ?>"></i> <?php echo esc_html(get_theme_mod('box1_heading', 'Learn Something')); ?></h1>
        <?php echo wp_kses_post(get_theme_mod('box1_text', 'Default content for box 1.')); ?>
    </div>
    <div class="box box2">
        <h1><i class="fa-solid <?php echo esc_attr(get_theme_mod('box2_icon', 'fa-building-columns')); ?>"></i> <?php echo esc_html(get_theme_mod('box2_heading', 'Learn Something')); ?></h1>
        <?php echo wp_kses_post(get_theme_mod('box2_text', 'Default content for box 2.')); ?>
    </div>
    <div class="box box3">
        <h1><i class="fa-solid <?php echo esc_attr(get_theme_mod('box3_icon', 'fa-book')); ?>"></i> <?php echo esc_html(get_theme_mod('box3_heading', 'Learn Something')); ?></h1>
        <?php echo wp_kses_post(get_theme_mod('box3_text', 'Default content for box 3.')); ?>
    </div>
</div>

<div class="container1">
    <div class="content">
        <h1><?php echo esc_html(get_theme_mod('about_us_heading', 'About Us')); ?></h1>
        <p><?php echo wp_kses_post(get_theme_mod('about_us_text', 'Default About Us content.')); ?></p>
    </div>
    <div class="image">
        <?php 
        $about_us_image = get_theme_mod('about_us_image');
        if ($about_us_image) : ?>
            <img src="<?php echo esc_url($about_us_image); ?>" alt="About Us Image">
        <?php endif; ?>
    </div>
</div>




<!-- dives part -->
  <!-- <div class="container">
 
     <div class="box box1"> -->

              <!-- <h1>  <i class="fa-solid fa-graduation-cap"></i> Learn Somethig</h1>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Debitis commodi inventore rerum, facere eligendi laborum aliquid quia accusamus quis itaque. Perspiciatis, facere autem! Deleniti veritatis sed, hic minima totam in fugiat explicabo repellat repellendus ipsum perferendis doloribus quod delectus expedita. 
        </div>
        <div class="box box2"> -->
       
         <!-- <h1>  <i class="fa-solid fa-building-columns"></i> Learn Something</h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem sequi assumenda corporis, officiis non sint eaque doloribus, vel nam quis, velit debitis quo beatae dolore magnam ad consectetur enim aperiam. Neque repudiandae adipisci quo sint minus est, exercitationem dolore ab? 
        </div>
        <div class="box box3"><h1> <i class="fa-solid fa-book"></i> Learn Something</h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta quas dignissimos amet voluptate sit corrupti quisquam ab voluptates voluptatem cum ullam, qui odit totam, architecto dolore praesentium perferendis! Vero dolorum debitis ipsam et facere architecto est quod, eveniet amet molestiae.</div>
    </div> -->



   
    <!-- <div class="container1">
        <div class="content">
       
            <h1>About Us</h1>
            <p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum pariatur fuga eveniet soluta aspernatur rem, nam voluptatibus voluptate voluptates sapiente, inventore. Voluptatem, maiores esse molestiae.

<li>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
<li>Saepe a minima quod iste libero rerum dicta!</li>
<li>Voluptas obcaecati, iste porro fugit soluta consequuntur. Veritatis?</li>
<li>Ipsam deserunt numquam ad error rem unde, omnis.</li>
<li>Repellat assumenda adipisci pariatur ipsam eos similique, explicabo.</li>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quaerat harum facilis excepturi et? Mollitia!</p>
        </div>
        <div class="image">
            <img src="<?php echo get_theme_file_uri('images/66.png'); ?>" alt="Description of Image">
        </div>
    </div> -->


   

    
     <!-- <div class="containerd">
       
        <div class="dive">
            <img src="<?php echo get_theme_file_uri("images/tchrz.png");?>" alt="Dive 1">
            <div class="dive-content">
               
                <p>Qualified Teachers</p>
            </div>
        </div>
       
        <div class="dive">
            <img src="<?php echo get_theme_file_uri("images/plg.png");?>" alt="Dive 2">
            <div class="dive-content">
               
                <p>Big Playground.</p>
            </div>
        </div>
  
        <div class="dive">
            <img src="<?php echo get_theme_file_uri("images/cafe.png");?>" alt="Dive 3">
            <div class="dive-content">
               
                <p>Beautiful Cafe.</p>
            </div>
        </div>
        
        <div class="dive">
            <img src="<?php echo get_theme_file_uri("images/sports.png");?>" alt="Dive 4">
            <div class="dive-content">
                
                <p>Annual Sports Gala</p>
            </div>
        </div>
        
        <div class="dive">
            <img src="<?php echo get_theme_file_uri("images/hbld.png");?>" alt="Dive 5">
            <div class="dive-content">
                
                <p>Beautiful Hostel Building.</p>
            </div>
        </div>
       
        <div class="dive">
            <img src="<?php echo get_theme_file_uri("images/str.png");?>" alt="Dive 6">
            <div class="dive-content">
                
                <p>Big Study Room</p>
            </div>
        </div>
       
        <div class="dive">
            <img src="<?php echo get_theme_file_uri("images/convocation.png");?>" alt="Dive 7">
            <div class="dive-content">
              
                <p>Annual Convocation</p>
            </div>
        </div>
        
        <div class="dive">
            <img src="<?php echo get_theme_file_uri("images/hostel.png");?>" alt="Dive 8">
            <div class="dive-content">
               
                <p>Beautiful Hostel.</p>
            </div>
        </div>
    </div>  -->
    <div class="containerd">
    <?php for ($i = 1; $i <= 8; $i++): ?>
        <div class="dive">
            <img src="<?php echo esc_url(get_theme_mod("dive_image_$i")); ?>" alt="Dive <?php echo $i; ?>">
            <div class="dive-content">
                <p><?php echo esc_html(get_theme_mod("dive_content_$i")); ?></p>
            </div>
        </div>
    <?php endfor; ?>
</div>




   



    <div class="homepage">
    <h1>Welcome to Our Hostel</h1>
    <div class="hostel-room-grid">
        <?php
        // Custom query to fetch hostel rooms
        $args = array(
            'post_type' => 'hostel_room',
            'posts_per_page' => 6 // Adjust the number of rooms to display
        );
        $hostel_rooms = new WP_Query($args);
        
        if ($hostel_rooms->have_posts()) :
            while ($hostel_rooms->have_posts()) : $hostel_rooms->the_post(); ?>
                <div class="hostel-room-card">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="hostel-room-image">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php endif; ?>
                        <div class="hostel-room-info">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </a>
                </div>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo '<p>No hostel rooms found.</p>';
        endif;
        ?>
    </div>

<br><br>
<h1>Cafe Menu</h1>

<?php
// Fetch products in category ID 15
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => -1, // Adjust the number to control how many products to show
    'tax_query'      => array(
        array(
            'taxonomy' => 'product_cat',
            'field'    => 'term_id',
            'terms'    => 15, // Only include products in category with ID 15
            'operator' => 'IN',
        ),
    ),
);

$categorized_products = new WP_Query( $args );

if ( $categorized_products->have_posts() ) : ?>
    <div class="categorized-products-grid">
        <?php while ( $categorized_products->have_posts() ) : $categorized_products->the_post(); 
            $product = wc_get_product(get_the_ID()); // Get the WC_Product object
        ?>
            <div class="product-item">
                <a href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'woocommerce_thumbnail' ); ?>
                    <?php endif; ?>
                    <h2><?php the_title(); ?></h2>
                    <span class="price"><?php echo $product->get_price_html(); ?></span>
                </a>
                <?php 
                // Display the "Add to Cart" button
                echo '<a href="' . esc_url( $product->add_to_cart_url() ) . '" class="button add_to_cart_button">' . esc_html( $product->add_to_cart_text() ) . '</a>';
                ?>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
<?php endif; ?>


</div>


<?php
get_footer();
?>