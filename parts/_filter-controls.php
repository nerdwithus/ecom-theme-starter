<?php //Filter Controls ?>


<nav class="row-wrapper">
  <div class="row">
    <div class="small-12 columns grid-filter-controls">

      <div class="row">

        <div class="small-12 medium-8 large-9 columns">
          <span class="filter-label">Filter By:</span>
          <div class="row small-up-2 medium-up-3 large-up-6">
            <?php for ($i=1; $i < 7; $i++): ?>
              <div class="column">
                <select>
                  <option value="selection">Selection - <?php echo $i ?></option>
                </select>
              </div>
            <?php endfor; ?>
          </div>
        </div>

        <div class="small-12 medium-4 large-3 columns">
          <span class="sort-label">Sort By:</span>
          <div class="row small-up-2 medium-up-2">
            <div class="column">
              <select>
                <option value="selection">Selection - 1</option>
              </select>
            </div>
          </div>
        </div>

      </div>

      <div class="row">
        <div class="small-12 columns active-filters">
          <span class="active-filter-label">
            Filtering By:
          </span>
          <a href="#" class="active-filter-control "><i class="fi-x">&nbsp;</i>Category: Men</a>
          <span class="active-sort-label">
            &nbsp;Sorting By:
          </span>
          <a href="#" class="active-filter-control "><i class="fi-x">&nbsp;</i>Price Low to High</a>
        </div>
      </div>

  </div>
</nav>
