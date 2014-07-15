(function($) {
  Drupal.behaviors.category_overview = {
    attach: function(context) {
      if ($('.region-postscript-first .block-body .field-name-body .field-item').is(':empty')) {
        $(".region-postscript-first").remove();
      }
    }
  }
}(jQuery));