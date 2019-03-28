$(document).ready(function() {
  let heightOfHeader = $(".header").outerHeight();
  $("body").css("paddingTop", heightOfHeader);

  $(window).on("resize", function() {
    let heightOfHeader = $(".header").outerHeight();
    $("body").css("paddingTop", heightOfHeader);
  });

  let inputs = [
    $(".name-input"),
    $(".email-input"),
    $(".satauri-input"),
    $(".textarea-input")
  ];
  let errors = [
    "ჩაწერეთ სახელი",
    "ჩაწერეთ მეილი",
    "ჩაწერეთ სათაური",
    "ჩაწერეთ ტექსტი"
  ];

  $(".submit-btn").on("click", function(e) {
    for (i = 0; i < inputs.length; i++) {
      if (inputs[i].val() == "") {
        inputs[i].attr("placeholder", errors[i]);
        inputs[i].css("border-color", "red");
        e.preventDefault();
      } else {
        inputs[i].css("border-color", "black");
      }
    }
  });
  // Select all links with hashes
  $('a[href*="#"]')
    // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, "") ==
          this.pathname.replace(/^\//, "") &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        var target = $(this.hash);
        target = target.length
          ? target
          : $("[name=" + this.hash.slice(1) + "]");
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();
          $("html, body").animate(
            {
              scrollTop: target.offset().top
            },
            1000,
            function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) {
                // Checking if the target was focused
                return false;
              } else {
                $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              }
            }
          );
        }
      }
    });

  if (window.matchMedia("(max-width: 575.98px)").matches) {
    $(".about-us-header-div").prependTo(".about-us-section");
    $(".about-us-decoration").appendTo(".about-us-text-div");
  } else {
    $(".about-us-header-div").prependTo(".about-us-row");
    $(".about-us-decoration").appendTo(".about-us-row");
  }

  $(window).resize(function() {
    var $theWindowSize = $(this).width();
    if ($theWindowSize < 575.98) {
      $(".about-us-header-div").prependTo(".about-us-section");
      $(".about-us-decoration").appendTo(".about-us-text-div");
    } else {
      $(".about-us-header-div").prependTo(".about-us-row");
      $(".about-us-decoration").appendTo(".about-us-row");
    }
  });

  $(".burger-logo").on("click", function() {
    $(".responsive-nav").show(300);
  });
  $(".nav-close-svg , .responsive-nav-li-a").on("click", function() {
    $(".responsive-nav").hide(300);
  });

  $(document).click(function(event) {
    if ($("#imagemodal").css("display") == "block") {
      if (
        !$(event.target).closest(".modal-dialog , .pop").length &&
        !$(event.target).is(".modal-dialog")
      ) {
        $("#imagemodal").slideUp(500);
      }
    }
  });

  $(".pop").on("click", function(e) {
    e.preventDefault();
    $(".carpet-size").text(
      "Size: " +
        $(this)
          .siblings(".inner-carpets-size")
          .text()
    );
    $(".carpet-description").text(
      "Description: " +
        $(this)
          .siblings(".inner-carpets-description")
          .text()
    );
    $(".pop-price").text(
      "Price: " +
        $(this)
          .siblings(".inner-img-tag-price")
          .text()
    );
    $(".modal").slideDown(500);
    $(".imagepreview").attr(
      "src",
      $(this)
        .find("img")
        .attr("src")
    );
    $("#imagemodal").slideDown();
  });

  $(".modal-close").on("click", function() {
    $("#imagemodal").hide(500);
  });
  $(".carousel-item:first-of-type").addClass("active");
});
