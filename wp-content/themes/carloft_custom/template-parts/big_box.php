<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="" id="big_box_row">


       <!--

       <div id="nav_clip" class="clearfix">
              <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
                     <?php
                            $walker = new Menu_With_Description; 
                            wp_nav_menu( array(
                                   'theme_location' => 'main pages menu',
                                   'menu'           => 'secondary',
                                   'menu_class'     => 'main-pages-menu',
                                   'walker'         => $walker
                            ) );
                     ?>
              </nav>
       </div>
       -->
       
       <div class="flex">
              <div class="col-xs-4 fixed_height big_box prinzip" id="prinzip"><div class="cont"><a data_cat_id="3" href="<?php echo get_page_link(5); ?>" ><?php echo get_field("kompletter_titel" ,5);?></a></div></div>
              <div class="col-xs-4 fixed_height big_box entwickler" id="entwickler"><div class="cont"><a data_cat_id="4" href="<?php echo get_page_link(7); ?>" ><?php echo get_field("kompletter_titel" ,7);?></a></div></div>
              <div class="col-xs-4 fixed_height big_box realisierung" id="realisierung"><div class="cont"><a data_cat_id="5" href="<?php echo get_page_link(9); ?>" ><?php echo get_field("kompletter_titel" ,9);?></a></div></div>
       </div>
       <div class="" id="big_box_sub_row">
              <?php get_category_post_links("prinzip",3); ?>
              <?php get_category_post_links("entwickler",4); ?>
              <?php get_category_post_links("realisierung",5); ?>
       </div>
</div>