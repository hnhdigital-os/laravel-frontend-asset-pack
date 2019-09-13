/**
 * Redactor.
 */
$.frontendAssets.register('redactor', function(event) {
  var element = $(event.currentTarget);

  if (!element.hasClass('redactor-applied')) {
    var options = {};

    if (element.data('toolbar-buttons')) {
      options['buttons'] = element.data('toolbar-buttons');
    }

    if (element.data('toolbar-plugins')) {
      options['plugins'] = element.data('toolbar-plugins');
    }

    options['callbacks'] = {
      focus: function() {
        element.trigger('focus');
        element.data('redactor-content', element.val());
      },
      blur: function() {
        element.trigger('blur');
        if (element.data('redactor-content') != element.val()) {
          element.trigger('change');
        }
      },
      click: function() { element.trigger('click'); },
      syncBefore: function(html) { return element.triggerHandler('sync:start', [html]); },
      syncing: function(html) { return element.triggerHandler('sync:running', [html]); },
      synced: function(html) { return element.triggerHandler('sync:done', [html]); },
      changed: function(html) { return element.triggerHandler('sync:changed', [html]); },
      keydown: function() { element.trigger('keydown'); },
      keyup: function() { element.trigger('keyup'); },
      enter: function() { element.trigger('enter'); },
      tab: function() { element.trigger('tab'); },
    };

    element.redactor(options);
    element.addClass('redactor-applied');
    element.trigger('extension::redactor::applied');
  }
});
