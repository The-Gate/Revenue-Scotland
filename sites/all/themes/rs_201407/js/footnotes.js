(function($) {
  Drupal.behaviors.footnotes = {
    attach: function(context) {
      if ($('.footnotes').length > 0) {
        $('.footnotes .footnote').each(function() {
          $(this).find('.footnote-label').clone().text('Back to the top').appendTo($(this)).removeClass('footnote-label').addClass('footnote-return').wrap('<div class="footnote-return-wrapper"></div>');
        });
      }
    }
  }
}(jQuery));