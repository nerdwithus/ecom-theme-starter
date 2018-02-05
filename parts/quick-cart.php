<aside id="quick-cart" class="quick-cart">
  <div class="row">
    <div class="small-12 columns">

      <?php
      //each line item in the cart is a row
        for ($i=0; $i < 4 ; $i++):
      ?>
      <div class="row quick-cart-item-row">
        <div class="small-3 medium-4 columns">
          <img src="img/fpo-100x.jpg" alt="Product Name" />
        </div>
        <div class="small-9 medium-8 columns">
          <p><strong>Product Name</strong></p>
          <p>
            <span class="quick-cart-qty">999</span>
            &nbsp;@&nbsp;
            <span class="quick-cart-price">$999.999</span>
          </p>
          <p class="quick-cart-remove"><a href="#remove-from-cart">remove</a></p>
        </div>
      </div>
    <?php endfor;// end row item; ?>
    <div class="row quick-cart-totals">
      <div class="small-12 columns">
        <p><em>SubTotal: </em> $999.99</p>
      </div>
    </div>
    <div class="quick-cart-button-group button-group expanded">
      <a class="button secondary">Cart</a>
      <a class="button primary">Checkout</a>
    </div>


    </div>
  </div>
</aside>
