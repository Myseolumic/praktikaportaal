<!DOCTYPE html>
<?php
$t_pieces = t(array("fp-contact_title", "fp-contact1"),$dbhost,$dbname,$dbuser,$dbpassword);
?>

<section class="page-section" id="contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2 class="mt-0"><?php echo $t_pieces["fp-contact_title"];?></h2>
          <hr class="divider my-4">
          <p class="text-muted mb-5"><?php echo $t_pieces["fp-contact1"];?></p>
        </div>
      </div>
      <div class="row">
        <!--<div class="col-lg-4 ml-auto text-center">
          <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
          <div>+372 555-1234</div>
        </div>-->
        <div class="col-lg-12 mr-auto text-center" data-toggle="modal" data-target="#exampleModalCenter">
          <i class="fas fa-envelope fa-3x mb-3 text-muted"></i>
          <!-- Make sure to change the email address in anchor text AND the link below! -->
          <a class="d-block" href="#">praktika@ut.ee</a>
        </div>
      </div>
    </div>
  </section>