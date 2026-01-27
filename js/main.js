!(function (e) {
  e(
    ".main-navigation > div > ul > li.menu-item-has-children,.uk-offcanvas-bar > div > ul > li.menu-item-has-children "
  ).append('<span uk-icon="chevron-down"></span>'),
    jQuery(document).on(
      "click",
      " .uk-offcanvas-bar > div > ul > li > span",
      function (e) {
        jQuery(this).toggleClass("rotate-180"),
          jQuery(this).parent("li").children("ul").slideToggle();
      }
    );
})(jQuery);
