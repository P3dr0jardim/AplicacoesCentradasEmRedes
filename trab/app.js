document.addEventListener('init', function (event) {
  if (event.target.id === 'item') {
    var cardTitle = event.target.data && event.target.data.cardTitle ? event.target.data.cardTitle : 'Custom Card';
    event.target.querySelector('ons-card div.title').textContent = cardTitle;
  }
});

document.addEventListener('swiperight', function (event) {
  if (event.target.matches('#detect-area')) {
    myNavigator.popPage();
  }
});

var customPush2 = function (event) {
  myNavigator.pushPage('item.html', { data: { cardTitle: event.target.textContent } })
};
ons.ready(function() {
  var pullHook = document.getElementById('pull-hook');

  pullHook.addEventListener('changestate', function(event) {
    var message = '';

    switch (event.state) {
      case 'initial':
        message = 'Pull to refresh';
        break;
      case 'preaction':
        message = 'Release';
        break;
      case 'action':
        message = 'Loading...';
        break;
    }

    pullHook.innerHTML = message;
  });

  pullHook.onAction = function(done) {
    setTimeout(done, 1000);
  };
});
var app = {};

ons.ready(function () {
  ons.createElement('action-sheet.html', { append: true })
    .then(function (sheet) {
      app.showFromTemplate = sheet.show.bind(sheet);
      app.hideFromTemplate = sheet.hide.bind(sheet);
    });
});

app.showFromObject = function () {
  ons.openActionSheet({
    title: 'From object',
    cancelable: true,
    buttons: [
      'Label 0',
      'Label 1',
      {
        label: 'Label 2',
        modifier: 'destructive'
      },
      {
        label: 'Cancel',
        icon: 'md-close'
      }
    ]
  }).then(function (index) { console.log('index: ', index) });
};
