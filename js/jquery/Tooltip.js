
// Convert all text elements.
$(function() {
    if (typeof Tooltip != 'undefined') {
      $.frontendAssets.init();
    }
});

// Register tooltip.
$.frontendAssets.register('tooltip', function(event) {
  var element = $(event.currentTarget);

  if (typeof element.data('data-text') == 'undefined') {
    element.data('data-text', element.attr('title'));
    element.attr('title', '');
  }

  var options = {
    'title' => element.data('data-text')
  };

  $.each(['placement', 'trigger', 'delay', 'html', 'closeOnClickOutside', 'boundariesElement', 'boundariesElement'], function(index, key) {
    if (typeof element.data('data-' + key) != 'undefined') {
        optioins[key] = element.data('data-' + key);
    }
  });

  new Tooltip(element, options);

  element.trigger('extension::tooltip::applied');
});
