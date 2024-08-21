<?php
get_header();
?>




<!-- <div class="container1">
        <div class="content">
       
            <h1>More About US</h1>
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
            <img src="<?php echo get_theme_file_uri('images/tchr2.png'); ?>" alt="Description of Image">
        </div>
    </div>  -->

    <!-- <div class="container1">
    <div class="content">
        <h1>More About Us</h1>
        <p>
            <?php echo wp_kses_post(get_theme_mod('about_us_content1')); ?>
        </p>
    </div>
    <div class="image">
        <img src="<?php echo esc_url(get_theme_mod('about_us_image')); ?>" alt="Description of Image">
    </div>
</div> -->
<div class="container1">
    <div class="content">
        <h1>More About Us</h1>
        <p>
            <?php echo wp_kses_post(get_theme_mod('more_about_us_content', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum pariatur fuga eveniet soluta aspernatur rem, nam voluptatibus voluptate voluptates sapiente, inventore. Voluptatem, maiores esse molestiae.')); ?>
        </p>
    </div>
    <div class="image">
        <img src="<?php echo esc_url(get_theme_mod('more_about_us_image', get_template_directory_uri() . '/images/tchr2.png')); ?>" alt="Description of Image">
    </div>
</div>




    



  
<?php 
get_footer();
?>