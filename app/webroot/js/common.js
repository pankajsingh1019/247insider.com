function submitFilterForm() {
  $('#priceForm input[name][value=""]').removeAttr("name");
  $("#priceForm").submit();
}

$(document).ready(function () {
  $("img").unveil();

  $(".slider-nav").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    // asNavFor: '.slider-for',
    // dots: true,
    // focusOnSelect: true,
    infinite: false,
  });

  // Serp-pg slider

  $(".relatedProdInnerwrap").slick({
    dots: false,
    arrows: true,
    appendArrows: $(".relatedProdwrap"),
    infinite: true,
    speed: 300,
    autoplay: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: "unslick",
      },
    ],
  });

  $(".category-below-boxes").slick({
    dots: false,
    arrows: true,
    infinite: false,
    speed: 300,
    autoplay: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    rows: 2,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });

  $(".related-products-boxes").slick({
    dots: false,
    arrows: true,
    infinite: false,
    speed: 300,
    autoplay: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    rows: 2,
    responsive: [
      {
        breakpoint: 767,
        settings: "unslick",
      },
    ],
  });

  // Header categories
  $(".categories-drop-dwn .title").click(function () {
    $(".categories-drop-dwn ul").toggleClass("active");
    $(".header .search-bar").removeClass("active");
    $(".header .categories-drop-dwn .search-btn-cat").removeClass("active");
    $(".input-field").removeClass("active");
    $(".input-field input").removeClass("active");
  });

  // header-mobile
  $(".categories-drop-dwn .search-btn-cat").click(function () {
    $(".header .search-bar").toggleClass("active");
    $(".header .categories-drop-dwn .search-btn-cat").toggleClass("active");
    $(".categories-drop-dwn ul").removeClass("active");
  });

  // serp-pg search icon
  $(".search-icon").click(function () {
    $(".input-field").toggleClass("active");
    $(".input-field input").focus();
    $(".input-field input").toggleClass("active");
    $(".categories-drop-dwn ul").removeClass("active");
  });

  // seaarch-pg mobile search
  $(".serp-search-icon").click(function () {
    $(".serp-pg-search").toggleClass("active");
    $(".serp-pg-search form").toggleClass("active");
    $(".serp-pg-search .serp-search-input").toggleClass("active");
  });

  // category-pg filter icon
  $(".filter-btn").click(function () {
    $(".price-class").toggleClass("active");
  });

  $(".brand-arrow").click(function () {
    $(".brand-wrap-list").toggleClass("active");
    $(this).toggleClass("active");
    $(".filter-form .brand-wrap").toggleClass("active");
  });

  $(".price-arrow").click(function () {
    $(".price-inn-wp").toggleClass("active");
    $(this).toggleClass("active");
    $(".filter-form .price-wrap").toggleClass("active");
  });

  //  Faq page QA listings
  $(".listings-cards .btn").click(function () {
    $(this).parent().toggleClass("active");
    $(this).toggleClass("active");
    $(this).parent().siblings().slideToggle();
  });

  $("#refineSearch").submit(function (e) {
    var keyword = $("#refineinput").val();
    if (keyword.trim() == "") {
      return false;
    }
    var action = $(this).attr("action");
    $(this).attr("action", action + "/" + encodeURIComponent(keyword) + "?");
    return true;
  });

  $("#refineSearchSerp").submit(function (e) {
    var keyword = $("#refineinputSerp").val();
    if (keyword.trim() == "") {
      return false;
    }
    var action = $(this).attr("action");
    $(this).attr("action", action + "/" + encodeURIComponent(keyword) + "?");
    return true;
  });
});
