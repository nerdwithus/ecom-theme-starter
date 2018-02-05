<?php include('header.php'); ?>

      <?php // this section is the main wrapper of the content that gets dynamically loaded in between ?>
      <div class="row">
        <div class="small-12 columns" style="background: #fff;">
        	<img src="img/fpo-hero.jpg" alt="hero image" style="margin-top: 11px; margin-bottom: 11px;"/>


			<main class="row-wrapper product-grid-container">
			  <div class="row small-up-2 medium-up-3 large-up-4">

			    <?php // Standard Item; ?>
			    <div class="column grid-item">
			      <a href="http://client.nerdwith.us/project/shopify-theme-template/page-config-product-detail.php">
			        <figure>
			          <img src="img/fpo-product-thumb.png" alt="product-name" />
			        </figure>
			        <div class="desc">
			          <p class="item-title">Standard Item</p>
			          <p class="item-price">
			            <span class="original-price">$99.99</span>
			          </p>
			        </div>
			      </a>
			    </div>

			    <?php // Item with special price / sale; ?>
			    <div class="column grid-item">
			      <a href="http://client.nerdwith.us/project/shopify-theme-template/page-config-product-detail.php">
			        <figure>
			          <img src="img/fpo-product-thumb.png" alt="product-name" />
			        </figure>
			        <div class="desc">
			          <p class="item-title">Standard Item that has a catalog price rule</p>
			          <p class="item-price">
			            <span class="sale-price">$33.33</span>
			            <span class="original-price"><i>$99.99</i></span>
			          </p>
			        </div>
			      </a>
			    </div>

			    <?php // Item out of stock ?>
			    <div class="column grid-item item-status out-of-stock">
			      <a href="http://client.nerdwith.us/project/shopify-theme-template/page-config-product-detail.php">
			        <figure>
			          <span class="item-notice">
			            Out of Stock
			          </span>
			          <img src="img/fpo-product-thumb.png" alt="product-name" />
			        </figure>
			        <div class="desc">
			          <p class="item-title">Standard Item that has a catalog price rule</p>
			          <p class="item-price">
			            <span class="original-price">$99.99</span>
			          </p>
			        </div>
			      </a>
			    </div>

			    <?php // Item is a presale, deport or coming soon. ?>
			    <div class="column grid-item item-status presale">
			      <a href="http://client.nerdwith.us/project/shopify-theme-template/page-config-product-detail.php">
			        <figure>
			          <span class="item-notice">
			            Presale
			          </span>
			          <img src="img/fpo-product-thumb.png" alt="product-name" />
			        </figure>
			        <div class="desc">
			          <p class="item-title">Standard Item that has a catalog price rule</p>
			          <p class="item-price">
			            <span class="original-price">$99.99</span>
			          </p>
			        </div>
			      </a>
			    </div>

			    <?php
			      // two statuses sale taking precidence. the only time an item should
			      // have 2 notices is if the item is on sale + pre-order,deposit or coming soon
			      ?>
			    <div class="column grid-item presale on-sale">
			      <a href="http://client.nerdwith.us/project/shopify-theme-template/page-config-product-detail.php">
			        <figure>
			          <span class="item-notice-sale">SALE!</span>
			          <span class="item-notice">Pre Order</span>
			          <img src="img/fpo-product-thumb.png" alt="product-name" />
			        </figure>
			        <div class="desc">
			          <p class="item-title">Standard Item that has a catalog price rule</p>
			          <p class="item-price">
			            <span class="original-price">$99.99</span>
			          </p>
			        </div>
			      </a>
			    </div>

			  </div>
			</main>

        </div>
      </div>
      <?php // end comment area of dynamic area ?>


<?php include('footer.php'); ?>
