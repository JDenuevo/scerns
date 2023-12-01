$(function () {
  "use strict";
  var url = window.location + "";
  var path = url.replace(
    window.location.protocol + "//" + window.location.host + "/",
    ""
  );
  var element = $("ul#sidebarnav a").filter(function () {
    return this.href === url || this.href === path;
  });

  // Function to handle off-canvas click
  function handleOffCanvasClick() {
    $("ul#sidebarnav a").removeClass("active");
    $("ul#sidebarnav ul").removeClass("in");
  }

  element.parentsUntil(".sidebar-nav").each(function (index) {
    if ($(this).is("li") && $(this).children("a").length !== 0) {
      $(this).children("a").addClass("active");
      $(this).parent("ul#sidebarnav").length === 0
        ? $(this).addClass("active")
        : $(this).addClass("selected");
    } else if (!$(this).is("ul") && $(this).children("a").length === 0) {
      $(this).addClass("selected");
    } else if ($(this).is("ul")) {
      $(this).addClass("in");
    }
  });

  element.addClass("active");

  // Click event for sidebar navigation
  $("#sidebarnav a").on("click", function (e) {
    if (!$(this).hasClass("active")) {
      // hide any open menus and remove all other classes
      handleOffCanvasClick();

      // open our new menu and add the open class
      $(this).next("ul").addClass("in");
      $(this).addClass("active");
    } else if ($(this).hasClass("active")) {
      $(this).removeClass("active");
      $(this).parents("ul:first").removeClass("active");
      $(this).next("ul").removeClass("in");
    }
  });

  // Click event for off-canvas
  $("#off-nav1").on("click", function (e) {
    handleOffCanvasClick();
  });

  // Additional Click event for modal
  var modalLink = $(".nav-link[data-bs-target='#notif-modal']");
  var modal = new bootstrap.Modal(document.getElementById('notif-modal'));

  modalLink.on("click", function (e) {
    // hide any open menus and remove all other classes
    handleOffCanvasClick();
  });

  $("#sidebarnav >li >a.has-arrow").on("click", function (e) {
    e.preventDefault();
  });
});
