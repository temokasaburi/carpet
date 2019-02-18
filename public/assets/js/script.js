$(function() {
  let heightOfHeader = $(".header").outerHeight();
  $("body").css("marginTop", heightOfHeader);

  $(window).on("resize", function() {
    let heightOfHeader = $(".header").outerHeight();
    $("body").css("marginTop", heightOfHeader);
  });

  let inputs= [$('.name-input'), $('.email-input'), $('.satauri-input'), $('.textarea-input')];
  let errors= ['ჩაწერეთ სახელი', 'ჩაწერეთ მეილი', 'ჩაწერეთ სათაური', 'ჩაწერეთ ტექსტი'];

  $('.submit-btn').on('click',function(e){
  for (i=0;i<inputs.length;i++){
    if (inputs[i].val()==""){
      inputs[i].attr('placeholder',errors[i]);
      inputs[i].css('border-color','red');
      e.preventDefault();
    }
    else{
      inputs[i].css('border-color','black');
    }
  }});
  // Select all links with hashes
$('a[href*="#"]')
// Remove links that don't actually link to anything
.not('[href="#"]')
.not('[href="#0"]')
.click(function(event) {
  // On-page links
  if (
    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
    && 
    location.hostname == this.hostname
  ) {
    // Figure out element to scroll to
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    // Does a scroll target exist?
    if (target.length) {
      // Only prevent default if animation is actually gonna happen
      event.preventDefault();
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000, function() {
        // Callback after animation
        // Must change focus!
        var $target = $(target);
        $target.focus();
        if ($target.is(":focus")) { // Checking if the target was focused
          return false;
        } else {
          $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
          $target.focus(); // Set focus again
        };
      });
    }
  }
});
});
