<?php
get_header();
?>
<!-- <div class="uon">Our Mission</div>
 <div class="containerd">
       
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
    </div>   -->
    <div class="uon">Our Mission</div>
<div class="containerd">
    <?php for ($i = 1; $i <= 8; $i++): ?>
        <div class="dive">
            <img src="<?php echo esc_url(get_theme_mod("image_{$i}")); ?>" alt="<?php echo esc_attr("Dive {$i}"); ?>">
            <div class="dive-content">
                <p><?php echo esc_html(get_theme_mod("text_{$i}")); ?></p>
            </div>
        </div>
    <?php endfor; ?>
</div>





<?php 
get_footer();
?>