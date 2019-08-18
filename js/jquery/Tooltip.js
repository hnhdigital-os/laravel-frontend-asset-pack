
// Convert all text elements.
$(function() {
  if (typeof Tooltip != 'undefined') {
    $('[title]:not(.init-tooltip):not(.no-tooltip)').addClass('init-tooltip');
    $.frontendAssets.init();
  }
});

// Register tooltip.
$.frontendAssets.register('tooltip', function(event) {
  var element = $(event.currentTarget);

  if (typeof element.data('tooltip') != 'undefined') {
    return;
  }

  if (typeof element.data('tooltip-title') == 'undefined') {
    element.data('tooltip-title', element.attr('title'));
    element.attr('title', '');
  }

  if (element.data('tooltip-title') == '') {
    return;
  }

  if (typeof element.data('tooltip-placement') == 'undefined') {
    element.data('tooltip-placement', 'right');
  }

  var options = {
    'title': element.data('tooltip-title')
  };

  $.each(['placement', 'trigger', 'delay', 'html', 'closeOnClickOutside', 'boundariesElement', 'boundariesElement'], function(index, key) {
    if (typeof element.data('tooltip-' + key) != 'undefined') {
      options[key] = element.data('tooltip-' + key);
    }
  });

  element.data('tooltip', new Tooltip(element, options))

  element.trigger('extension::tooltip::applied');
});
