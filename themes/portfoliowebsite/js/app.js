$(document).foundation()
new Vivus(
    "my-svg-m",
    {
        duration: 300,
        file: "_resources/themes/portfoliowebsite/images/template/logo-m.svg",
    },
    null
);
new Vivus(
    "my-svg",
    {
        duration: 300,
        file: "_resources/themes/portfoliowebsite/images/template/logo.svg",
    },
    null
);
$(".title-bar-title").click(function() {
    $(".fi-list").toggleClass( "color" );
  });