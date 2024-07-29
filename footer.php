 <!-- start footer-->
 <footer class="site-footer" style="margin-bottom: 40px;">
   <div class="container">
     <div class="row">
       <div class="col col-lg-4 col-md-4 col-xs-6">
         <div class="widget about-widget">
           <?php
            $custom_logo_image = get_theme_mod('custom_logo_image');
            if ($custom_logo_image) :
            ?>
             <h3>
               <a href="javascript:void(0)">
                 <img src="<?= esc_url($custom_logo_image); ?>" alt="<?php bloginfo('name'); ?>">
               </a>
             </h3>
           <?php endif; ?>

           <p><?php echo wp_kses_post(get_theme_mod('website_description')); ?></p>
         </div>
       </div>

       <div class="col col-lg-4 col-md-4 col-xs-6">
         <div class="widget site-map-widget">
           <h3>Navigation</h3>
           <?php
            $defaults = array(
              'container' => 'ul',
              'theme_location' => "footer-menu-right"
            );
            wp_nav_menu($defaults);
            ?>
         </div>
       </div>

       <div class="col col-lg-4 col-md-4 col-xs-6">
         <div class="widget newsletter-widget">
           <h3>Subscription</h3>
           <p>Enter your email address to subscribe our weekly newsletter</p>
           <form class="form">
             <div>
               <input type="text" class="form-control" placeholder="email address">
               <button class="btn" type="submit"><i class="fa fa-send"></i></button>
             </div>

           </form>
         </div>

         <div class="widget social-media-widget">
           <?php $social_medias = array('telegram', 'facebook', 'whatsapp', 'instagram'); ?>

           <div class="social-links-holder">
             <ul class="social-links">
               <?php foreach ($social_medias as $social_media) :
                  $url = get_theme_mod($social_media . '_url');
                  if ($url) :
                    $icon = '';
                    if ($social_media == 'telegram') {
                      $icon = 'paper-plane';
                    } elseif ($social_media == 'facebook') {
                      $icon = 'facebook';
                    } elseif ($social_media == 'whatsapp') {
                      $icon = 'whatsapp';
                    } elseif ($social_media == 'instagram') {
                      $icon = 'instagram';
                    }
                ?>
                   <li><a href="<?= esc_url($url) ?>" target="_blank"><i class="fa fa-<?= $icon ?>"></i></a></li>
               <?php endif;
                endforeach; ?>
             </ul>
           </div>
         </div>
       </div> <!-- end row -->
     </div> <!-- end container -->
 </footer>
 <!-- end footer-->

 <div class="stick_bottom text-center">
   <p>Copyright © 2024 <?= (date('Y') != '2024') ? ' - ' . date('Y') : ''  ?>. <a href="https://cyborgtech.co/" target="_blank">Cyborg Tech Creative Agency</a>, All Rights Reserved. </p>
 </div>


 <div class="client-login-area">
   <div class="client-login-form">
     <h3>Client Login area</h3>
     <form class="form">
       <div>
         <label for="username">Username</label>
         <input type="text" id="username" class="form-control">
       </div>
       <div>
         <label for="password">Password</label>
         <input type="password" id="password" class="form-control">
       </div>
       <div>
         <button type="submit">Login</button>
       </div>
     </form>
   </div>
 </div>
 </div>
 <!-- end of page-wrapper -->

 <?php wp_footer() ?>
 </body>

 </html>