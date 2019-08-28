/**
 * Dropzone.
 */
$.frontendAssets.register('dropzone', function(event) {
  var element = $(event.currentTarget);

  if (element.hasClass('dropzone-inited')) {
    return;
  }

  var options = element.data('dropzone-options');

  if (options === '') {
    options = {};
  }

  options['init'] = function() {
    if (typeof element.data('dropzone-init') == 'function') {
      element.data('dropzone-init')(this);
    }
  };

  element.dropzone(options)
    .addClass('dropzone-inited');

  element.trigger('extension::dropzone::applied');
});
