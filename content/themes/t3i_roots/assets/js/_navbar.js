function mobile_nav_btn() {
  var mobile_open_BTN = $('#mobile_open_BTN');
  var mobile_close_BTN = $('#mobile_close_BTN');
  var mBtn_TL = new TimelineLite();

  mobile_open_BTN.sidr({
    name: 'sidr-main',
    source: '#nav-main',
    side: 'right',
    onOpen: function () {
      function close_btn() {
        mBtn_TL.to(mobile_close_BTN, 0.5, {autoAlpha: 1});
      }
      mBtn_TL.to(mobile_open_BTN, 0.5, {autoAlpha: 0, onComplete:close_btn});
    },
    onClose: function () {
      function open_btn() {
        mBtn_TL.to(mobile_open_BTN, 0.5, {autoAlpha: 1});
      }
      mBtn_TL.to(mobile_close_BTN, 0.5, {autoAlpha: 0, onComplete:open_btn});
    }
  });

  mobile_close_BTN.click(function () {
    $.sidr('close', 'sidr-main');
  });

  $(window).swipe({
    swipeLeft: function (event, distance, duration, fingerCount, fingerData) {
      $.sidr('open', 'sidr-main');
    },
    swipeRight: function (event, distance, duration, fingerCount, fingerData) {
      $.sidr('close', 'sidr-main');
    },
    threshold: 65,
    fingers: 'all'
  });
}






