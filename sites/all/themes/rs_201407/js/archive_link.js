(function($) {
  Drupal.behaviors.archive_link = {
    attach: function(context) {
      $('.archive-link').click(function(e) {
        e.preventDefault();
        $('.views-field-nothing').empty();        
        $('.revision-close').remove();
        $('.views-field-nothing').removeClass('el-loading');
        $(this).parent().parent().siblings('.views-field-nothing').ajaxStart(function() {
          $(this).addClass("loading");
        }).ajaxStop(function() {
          $(this).removeClass("loading");
          $('.el-loading .region-content').removeClass('grid-12');
        });
        $(this).parent().parent().siblings('.views-field-nothing').addClass('el-loading').load($(this).attr('href') + ' #region-content').after('<div class="revision-close"><a href="#">Close</a></div>');
        //$('#revision-display').load($(this).attr('href') + ' #region-content');
      });
      $(".revision-close a").live("click", function(e) {
        e.preventDefault();
        $('.views-field-nothing').empty();
        $('.revision-close').remove();
      });
    }
  }
}(jQuery));