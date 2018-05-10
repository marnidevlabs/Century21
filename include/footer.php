  <footer>
    <div class="footer-flex">
      <div class="footer-flex-content">
        <div class="footer-message">
          <h3>Let's Talk</h3>
          <p>Lorem ipsum dolor sit amet, vim wisi laoreet at, euismod detrax</p>
          <form>
            <div class="form-flex">
              <div class="form-flex-inner">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Phone">
                </div>
              </div>
              <div class="form-flex-inner">
                <div class="form-group">
                  <textarea class="form-control" rows="6" placeholder="Message"></textarea>
                </div>
              </div>
            </div>
            <div class="form-flex">
              <div class="form-group">
                <input type="submit" class="btn btn-default" name="submit" value="Submit">
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="footer-flex-content">
        <div class="footer-contact">
          <div class="text-center">
            <img src="assets/img/century 21 platinum logo 2.png" width="100%">
          </div>
          <div class="contact-flex">
            <div class="contact-flex-inner">
              <h5 class="head">ADDRESS:</h5>
              <p>Address: 8724-91 Street,</p>
              <p>NW, Edmonton, Alberta,</p>
              <p>T6C 4L2</p>
            </div>
            <div class="contact-flex-inner">
              <h5 class="head">CONTACT:</h5>
              <p>Telephone:</p>
              <p class="indent">780-988-1100</p>
              <p>Mobile:</p>
              <p class="indent">780-716-3053</p>
              <p>Fax:</p>
              <p class="indent">780-485-1313</p>
            </div>
          </div>
          <div class="text-center">
            <span class="fa fa-vimeo"></span>
            <span class="fa fa-pinterest-p"></span>
            <span class="fa fa-instagram"></span>
            <span class="fa fa-facebook"></span>
            <span class="fa fa-twitter"></span>
            <span class="fa fa-linkedin"></span>
            <span class="fa fa-google-plus"></span>
            <span class="fa fa-skype"></span>
          </div>
        </div>
      </div>
      <div class="footer-flex-content">
        <div id="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2372.5295146974654!2d-113.49941548467102!3d53.51259946994703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53a0220614ab5a6b%3A0x1702b1689399ed93!2sCentury+21+Platinum+Realty!5e0!3m2!1sen!2sph!4v1525405873948" width="100%" height="280vh" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </footer>

  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <script src="assets/plugins/js/bootstrap.min.js"></script>
  <script src="assets/plugins/slick/slick/slick.min.js"></script>
  <script src="assets/plugins/slick/slick/slick.js"></script>
  <script src="assets/plugins/jquery/script.js"></script>

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
  <script type="text/javascript">
  var $slickEl = $('.flex-parent');
  $slickEl.slick({
    centerMode: true,
    centerPadding: '0',
    slidesToShow: 3,
    focusOnSelect: true,
    autoplay: true,
    autoplaySpeed: 2000,    
      dots: false,
    infinite: true,
    responsive: [
        {
          breakpoint: 768,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
          }
        }
    ]
  });
  </script>
  <script type="text/javascript">
  $('.sub-parent').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  }); 
  </script>

</body>
</html>