<?php include('header.php');?>

<main role="main" class="row-wrapper product-detail-page-container">
  <div class="row product-detail-primary-row">

    <div class="small-12 medium-7 medium-push-5 large-6 large-push-6 columns right-column">
      <?php include('parts-product/_product-desc.php'); ?>
      <?php include('parts-product/_product-price.php') ?>
      <?php include('parts-product/_product-user-actions.php'); ?>
    </div>

    <div class="small-12 medium-5 medium-pull-7 large-6 large-pull-6 columns left-column">
      <?php include('parts-product/_product-image.php'); ?>
      <?php include('parts/_social-row.php'); ?>
    </div>


  </div>

  <div class="row product-detail-secondary-row">

    <div class="small-12 medium-5 large-6 columns left-column">
      <?php //this space to be used for a future feature ?>
    </div>

    <div class="small-12 medium-7 large-6 columns right-column">
      <?php include('parts-product/_product-sizechart.php'); ?>
      <?php include('parts-product/_product-desc-ext.php'); ?>
    </div>
  </div>
  <?php include('parts-product/_product-related-products.php') ?>

</main>



<?php include('footer.php'); ?>
