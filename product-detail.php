<?php include('header.php');?>

<main role="main" class="row-wrapper">

  <div class="row">
    <div class="small-12 columns">
      <div class="row product-detail-container">
        <aside class="small-12 medium-6 large-6 columns product-detail-image">
          <h2 class="show-for-small-only">Product Title</h2>
          <figure>
            <img src="img/fpo-800x.jpg" alt="Product Title" />
          </figure>
          <div class="row small-up-4 medium-up-5 product-detail-thumbs">
            <a href="#" class="column "><img src="img/fpo-100x.jpg" alt="Product Title" /></a>
            <a href="#" class="column "><img src="img/fpo-100x.jpg" alt="Product Title" /></a>
            <a href="#" class="column "><img src="img/fpo-100x.jpg" alt="Product Title" /></a>
            <a href="#" class="column "><img src="img/fpo-100x.jpg" alt="Product Title" /></a>
            <a href="#" class="column "><img src="img/fpo-100x.jpg" alt="Product Title" /></a>
            <a href="#" class="column "><img src="img/fpo-100x.jpg" alt="Product Title" /></a>
            <a href="#" class="column "><img src="img/fpo-100x.jpg" alt="Product Title" /></a>
          </div>
        </aside>
        <div class="small-12 medium-6 large-6 columns">

          <div class="row product-desc">
            <div class="small-12 columns">
              <h1>Product Title</h1>
              <?php // WYSIWYG output goes here. ?>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
              </p>
              <p>ea <b>commodo consequat. Duis aute irure</b> dolor in reprehenderit in voluptate velit esse cillum dolore eu
                fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                 mollit <a href="#link">anim id est laborum.</a>
               </p>
               <ol>
                  <li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</li>
                  <li>Aliquam tincidunt mauris eu risus.</li>
                  <li>Vestibulum auctor dapibus neque.</li>
               </ol>
             </div>
          </div>

          <?php // Price Box  ?>
          <div class="row product-info-container">
            <div class="small-12 columns">

              <p class="label-price"><em>Price:</em></p>
              <p class="item-price">
                <span class="sale-price">$33.33</span>
                <span class="original-price"><i>$99.99</i></span>
              </p>

              <div class="swatch-attribute" attribute-code="size" attribute-id="142" option-selected="169">
                <p class="label-variant"><em>Size:</em></p>
                <div class="swatch-attribute-options">
                  <div class="swatch-option text" option-type="0" option-id="" option-label="XS" option-tooltip-thumb="" option-tooltip-value="XS">XS</div>
                  <div class="swatch-option text" option-type="0" option-id="" option-label="S" option-tooltip-thumb="" option-tooltip-value="S">S</div>
                  <div class="swatch-option text selected" option-type="0" option-id="" option-label="M" option-tooltip-thumb="" option-tooltip-value="M">M</div>
                  <div class="swatch-option text" option-type="0" option-id="" option-label="L" option-tooltip-thumb="" option-tooltip-value="L">L</div>
                  <div class="swatch-option text" option-type="0" option-id="" option-label="XL" option-tooltip-thumb="" option-tooltip-value="XL">XL</div>
                </div>
              </div>

              <p class="label-quantity"><em>Quantity:</em></p>
              <input type="number" name="quantity" class="input-number-quantity" />

              <div class="button-group">
                <a href="#add-to-card" class="button">Add To Card</a>
              </div>

              <p class="other-actions">
                <a href="#add-to-wishlist">add to wishlist</a>
              </p>

            </div>
          </div>


          <?php // all of our size charts are just static blocks.  title + table output ?>
          <div class="row size-chart-container">
            <div class="small-12 columns">
              <p><em>Size Chart: </em>Name of Garment Blank</p>
              <table><thead><tr><td class="first">&nbsp;</td><td>S</td><td>M</td><td>L</td><td>XL</td><td>XXL</td></tr></thead><tbody><tr><td class="first">Length:</td><td>28"</td><td>29"</td><td>30"</td><td>31.5"</td><td>33"</td></tr><tr><td class="first">Chest:</td><td>21"</td><td>22"</td><td>23"</td><td>24.5"</td><td>26"</td></tr></tbody></table>
            </div>
          </div>






        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="small-12 column">
      <h2>Related Products</h2>
      <?php // Grid of products ?>
    </div>
  </div>

</main>



<?php include('footer.php'); ?>
