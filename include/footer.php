  <script src="asset/plugins/jquery/jquery.min.js"></script>
  <script src="asset/plugins/js/bootstrap.min.js"></script>
  <script src="asset/plugins/slick/slick/slick.min.js"></script>
  <script src="asset/plugins/slick/slick/slick.js"></script>

  <script type="text/javascript">
  $('.one-time').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows:false,
  });
  </script>
  
  <script type="text/javascript">
  $('#about .overlay .container .row .fa-chevron-right').click(function(){
    $('#about .overlay .container .row .col-md-6 .one-time').slick('slickNext');
  });
  $('#about .overlay .container .row .fa-chevron-left').click(function(){
    $('#about .overlay .container .row .col-md-6 .one-time').slick('slickPrev');
  });
  </script>



</body>
</html>