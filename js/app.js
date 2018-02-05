$(function() {

  /*
   * Mobile menu controls
  */

  // data-tg is the namespace for custom javascript ui controls
  // that use DOM attributes for state management

  // data-tg-open attribute to listen for the click
  var $shade = $('#slideout-shade');
  $('[data-tg-open]').on('click', function(e){
    // takes tg-open value and files the
    var target = $(this).data('tg-open'),
        hasShade = $(this).data('tg-shade'),
        // the ID of the targeted container to change state on.
        $item = $('#' + target);
    // state change is managed by JS, state storage managed on dom using attributes and classes
    if($item.hasClass('open')) {
      $item.removeClass('open');
      if(hasShade) {
        $shade.removeClass('open');
      }
    } else {
      //$mobileNavItems.removeClass('open');
      $item.addClass('open');
      if(hasShade) {
        $shade.addClass('open');
      }
    }
    console.log('click');
    e.preventDefault();
  });

  // var $gridFilterContainer = $('#grid-filter-container'),
  //     $toggleGridFilterContainer = $('[data-show-filter]');
  //
  // $toggleGridFilterContainer.on('click',function(e){
  //   if($gridFilterContainer.hasClass('open')) {
  //     $gridFilterContainer.removeClass('open');
  //   } else {
  //     $gridFilterContainer.addClass('open');
  //   }
  //   e.preventDefault();
  // });


});
