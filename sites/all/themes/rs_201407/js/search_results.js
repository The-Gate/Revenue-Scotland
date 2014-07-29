(function($) {
  Drupal.behaviors.search_results = {
    attach: function(context) {
       $('.region-preface-second h1#page-title').replaceWith($('.view-header h2'));
       $('.block-block-15 h1').after($('.result-count'));
       $('.pager').before('<span class="pager-title">Result Page:</span>');
    }
  }
}(jQuery));