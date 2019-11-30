<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Kapcsolat</title>
  <link rel="stylesheet" type="text/css" href="style/style.css">


</head>

<body>

  <!-- First section -->
  <header>
  <h1 class="animated bounceInDown">Animate.css</h1>
  <h2 class="animated bounceInDown">Level Up Your Websites with Animate.css</h2>
  <span class="animated bounce"></span>
</header>

<!-- Scroll animations section -->
<h2 class="new-section">Scroll Animations</h2>
<div class="scroll-animations">
  <div class="animated">
    <span>&#9742;</span>
    <h3>Number One</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis lacinia est. Nulla malesuada massa orci, vitae placerat lorem pharetra a.</p>
  </div>
  <div class="animated">
    <span>&#9835;</span>
    <h3>Number Two</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis lacinia est. Nulla malesuada massa orci, vitae placerat lorem pharetra a.</p>
  </div>
  <div class="animated">
    <span>&#9730;</span>
    <h3>Number Three</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis lacinia est. Nulla malesuada massa orci, vitae placerat lorem pharetra a.</p>
  </div>
</div>

<!-- Click animations section -->
<div class="click-animations">
  <h2 class="new-section">Click Animations</h2>
  <form>
    <input type="text" placeholder="Name" id="name" />
    <input type="text" placeholder="Email" id="email" />
    <textarea rows="7" placeholder="Message" id="message"></textarea>
  </form>
  <button>Send</button>
</div>

  <script>
      / Scroll function courtesy of Scott Dowding; http://stackoverflow.com/questions/487073/check-if-element-is-visible-after-scrolling

$(document).ready(function() {
  // Check if element is scrolled into view
  function isScrolledIntoView(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();

    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    return elemBottom <= docViewBottom && elemTop >= docViewTop;
  }
  // If element is scrolled into view, fade it in
  $(window).scroll(function() {
    $(".scroll-animations .animated").each(function() {
      if (isScrolledIntoView(this) === true) {
        $(this).addClass("fadeInLeft");
      }
    });
  });

  // Click Animations
  $("button").on("click", function() {
    /*
    If any input is empty make it's border red and shake it. After the animation is complete, remove the shake and animated classes so that the animation can repeat.
    */

    // Check name input
    if ($("#name").val() === "") {
      $("#name")
        .addClass("form-error animated shake")
        .one(
          "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
          function() {
            $(this).removeClass("animated shake");
          }
        );
    } else {
      $("#name").removeClass("form-error");
    }

    // Check email input
    if ($("#email").val() === "") {
      $("#email")
        .addClass("form-error animated shake")
        .one(
          "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
          function() {
            $(this).removeClass("animated shake");
          }
        );
    } else {
      $("#email").removeClass("form-error");
    }

    // Check message textarea
    if ($("#message").val() === "") {
      $("#message")
        .addClass("form-error animated shake")
        .one(
          "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend",
          function() {
            $(this).removeClass("animated shake");
          }
        );
    } else {
      $("#message").removeClass("form-error");
    }
  });
});
    </script>

</body>

</html>