var fg = fg || {};

fg.app = (function() {

  'use strict';

  var path = location.href.split('#')[0];
  var $appToggle = document.getElementById('app-toggle');
  var $appMenu = document.getElementById('app-menu');
  var $appMenuLinks = $appMenu.getElementsByTagName('a');
  var activeClass = 'is-active';

  function menuToggler() {
    $appToggle.addEventListener('click', function(e) {
      e.preventDefault();
      this.classList.toggle(activeClass);
      $appMenu.classList.toggle(activeClass);
    });
  }

  function linkToggler() {
    for (var i = $appMenuLinks.length - 1; i >= 0; i--) {
      if ($appMenuLinks[i].href.split("#")[0] == path) {
        $appMenuLinks[i].className += activeClass;
      }
    }
  }

  return {
    menuToggler: menuToggler,
    linkToggler: linkToggler
  };

})();

fg.app.menuToggler();
fg.app.linkToggler();
