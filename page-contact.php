<?php
// Template Name: Contact Page
?>

<?php get_header(); ?>

<!-- start page-title-wrapper -->
<div class="page-title">
  <div class="container">
    <h1>Contact</h1>
  </div>
</div>
<!-- end page-title-wrapper -->


<!-- start of contact-section -->
<section class="contact-section">
  <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3293.9510920260714!2d62.19256867934569!3d34.3517228!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3f3ce6e861a32511%3A0x139ebc13b4c35db!2s952W%2BJ4R%2C%20Martyr%20Mirvais%20Sadeq%20Rd%2C%20Herat%203003%2C%20Afghanistan!5e0!3m2!1sen!2s!4v1721039737304!5m2!1sen!2s" style="border:0; height: 100%; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="container">
    <div class="row">
      <div class="col col-md-5 col-md-offset-7 col-sm-6 col-sm-offset-6">
        <div class="contact-form">
          <h3>Contact Form</h3>
          <ul>
            <li><i class="fa fa-home"></i><?= the_field('address') ?></li>
            <li><i class="fa fa-phone"></i><?= the_field('phone_number') ?></li>
          </ul>
          <h4>Send Email</h4>
          <form class="form contact-validation-active" id="contact-form">
            <div>
              <input type="text" name="name" class="form-control" placeholder="Full Name">
            </div>
            <div>
              <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
            <div>
              <textarea name="note" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="submit">
              <button type="submit">Send</button>
              <span id="loader"><img src="<?= get_bloginfo('template_directory'); ?>/assets/images/contact-ajax-loader.gif" alt="Loader"></span>
            </div>
            <div class="error-handling-messages">
              <div id="success">Thank you</div>
              <div id="error"> Error occurred while sending email. Please try again later. </div>
            </div>
          </form>
        </div>
      </div>
    </div> <!-- end row -->
  </div> <!-- end container -->
</section>
<!-- end of contact-section -->

<?php get_footer(); ?>