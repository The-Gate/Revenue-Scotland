(function($) {
  Drupal.behaviors.helpful_form = {
    attach: function(context) {
      // move the messages to below the form
      if ($('#messages').length > 0) {
        $('#messages').removeClass('grid-12').addClass('helpful_frm').appendTo($('.block-client-block-26').parent());
        $('html, body').animate({
          scrollTop: $(".block-client-block-26").offset().top
        }, 300);
      } else {
        // no messages, close the form;
        $('.form-radios,.webform-component-textarea,.form-actions,#recaptcha_widget_div').toggleClass('hide');
      }
      // open & close the form block
      $('.block-webform-client-block-26 .webform-component-radios > label').click(function() {
        $('.form-radios,.webform-component-textarea,.form-actions,#recaptcha_widget_div').toggleClass('hide');
        $(this).toggleClass('open');
      });
    }
  }
}(jQuery));