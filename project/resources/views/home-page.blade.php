
 @if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
  <button type="button" class="close" data-dismiss="alert">×</button> 
        <strong>{{ $message }}</strong>
</div>
@endif

<!DOCTYPE html>
<html>


<head>
  <title>BlindChat</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="{{asset('assets/alstar/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
  <link href="{{asset('assets/alstar/css/style.css')}}" rel="stylesheet" media="screen">
  <link href="{{asset('assets/alstar/color/default.css')}}" rel="stylesheet" media="screen">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/css/sweetalert.css') }}">



</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
        <a class="navbar-brand" href="index.html">BlindChat</a>

      </div>
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="#intro">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Service</a></li>
          <li><a href="#portfolio">Works</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- intro area -->
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="item active">
            <div class="carousel-background"><img src="{{asset('assets/alstar/img/intro/1.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Webcoir IT Solutions Pvt Ltd</h2>
                <p class="animated fadeInUp">Webcoir IT Solutions pvt. ltd. founded in 2013. It is a Web based Development firm for the New World Economy. We offer highly accountable, competitively priced services. We do not outsource or subcontract your important work. Rather, Webcoir IT Solutions is a true, multi-national internet design and development company.</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Read More</a>
              </div>
            </div>
          </div>
          
          <!-- Slide 2 -->
          <div class="item">
            <div class="carousel-background"><img src="{{asset('assets/alstar/img/intro/2.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown">Web Development</span></h2>
                <p class="animated fadeInUp">Webcoir IT Solutions pvt. ltd. founded in 2013. It is a Web based Development firm for the New World Economy. We offer highly accountable, competitively priced services. We do not outsource or subcontract your important work. Rather, Webcoir IT Solutions is a true, multi-national internet design and development company.</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="item">
            <div class="carousel-background"><img src="{{asset('assets/alstar/img/intro/3.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown"> Mobile Development</span></h2>
                <p class="animated fadeInUp">Webcoir IT Solutions pvt. ltd. founded in 2013. It is a Web based Development firm for the New World Economy. We offer highly accountable, competitively priced services. We do not outsource or subcontract your important work. Rather, Webcoir IT Solutions is a true, multi-national internet design and development company.</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Read More</a>
              </div>
            </div>
          </div>
            <!-- Slide  -->
          <div class="item">
            <div class="carousel-background"><img src="{{asset('assets/alstar/img/intro/3.jpg')}}" alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animated fadeInDown"> SEO </span></h2>
                <p class="animated fadeInUp">Webcoir IT Solutions pvt. ltd. founded in 2013. It is a Web based Development firm for the New World Economy. We offer highly accountable, competitively priced services. We do not outsource or subcontract your important work. Rather, Webcoir IT Solutions is a true, multi-national internet design and development company..</p>
                <a href="#about" class="btn-get-started animated fadeInUp">Read More</a>
              </div>
            </div>
          </div>


        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon fa fa-angle-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon fa fa-angle-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->

  <!-- About -->
  <section id="about" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>About us</h2>
            <div class="heading-line"></div>
            <p>We’ve been building unique digital products, platforms, and experiences for the past 6 years.</p>
          </div>
        </div>
      </div>
      <div class="row wow fadeInUp">
        <div class="col-md-6 about-img">
          <img src="{{asset('assets/alstar/img/about-img.jpg')}}" alt="">
        </div>

        <div class="col-md-6 content">
          <h2>Webcoir IT Solutions pvt. ltd. founded in 2013. It is a Web based Development firm for the New World Economy. We offer highly accountable, competitively priced services. We do not outsource or subcontract your important work. Rather, Webcoir IT Solutions is a true, multi-national internet design and development company.</h3>
          <p>
            The website is still in development, but WebCoir delivers satisfaction. Testers said they want more functionalities so it’s certain they will be developed. WebCoir earned Visteco’s trust over the course of 10 years of work and are always able to produce what is asked of them at affordable prices..
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Parallax 1 -->
  <section id="parallax1" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="color-light">
            <h2 class="wow bounceInDown" data-wow-delay="0.5s">Details are the key for perfection</h2>
            <p class="lead wow bounceInUp" data-wow-delay="1s">We mix all detailed things together</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section id="services" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Services</h2>
            <div class="heading-line"></div>
            <p>We’ve been building unique digital products, platforms, and experiences for the past 6 years.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div id="carousel-service" class="service carousel slide">

            <!-- slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Website Design</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="{{asset('assets/alstar/img/screenshots/1.png')}}" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Brand Identity</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="{{asset('assets/alstar/img/screenshots/2.png')}}" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="row">
                  <div class="col-sm-12 col-md-offset-1 col-md-6">
                    <div class="wow bounceInLeft">
                      <h4>Web & Mobile Apps</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna.</p>
                    </div>
                  </div>
                  <div class="col-sm-12 col-md-5">
                    <div class="screenshot wow bounceInRight">
                      <img src="{{asset('assets/alstar/img/screenshots/3.png')}}" class="img-responsive" alt="" />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-service" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-service" data-slide-to="1"></li>
              <li data-target="#carousel-service" data-slide-to="2"></li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Works -->
  <section id="portfolio" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Works</h2>
            <div class="heading-line"></div>
            <p>We’ve been building unique digital products, platforms, and experiences for the past 6 years.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">

          <ul id="og-grid" class="og-grid">
            <li>
              <a href="https://bootstrapmade.com" data-largesrc="{{asset('assets/alstar/img/works/1.jpg')}}" data-title="Portfolio title" data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei. Pri consul detracto eu, solet nusquam accusam ex vim, an movet interesset necessitatibus mea.">
                <img src="{{asset('assets/alstar/img/works/thumbs/1.jpg')}}" alt="" />
              </a>
            </li>
            <li>
              <a href="https://bootstrapmade.com" data-largesrc="{{asset('assets/img/works/2.jpg')}}" data-title="Portfolio title" data-description="Mea an eros periculis dignissim, quo mollis nostrum elaboraret et. Id quem perfecto mel, no etiam perfecto qui. No nisl legere recusabo nam, ius an tale pericula evertitur, dicat phaedrum qui in. Usu numquam legendos in, voluptaria sadipscing ut vel. Eu eum mandamus volutpat gubergren, eos ad detracto nominati, ne eum idque elitr aliquam.">
                <img src="{{asset('assets/alstar/img/works/thumbs/2.jpg')}}" alt="" />
              </a>
            </li>
            <li>
              <a href="https://bootstrapmade.com" data-largesrc="{{asset('assets/img/works/3.jpg')}}" data-title="Portfolio title" data-description="Vim ad persecuti appellantur. Eam ignota deterruisset eu, in omnis fierent convenire sed. Ne nulla veritus vel, liber euripidis in eos. Postea comprehensam vis in, detracto deseruisse mei ea. Ex sadipscing deterruisset concludaturque quo.">
                <img src="{{asset('assets/alstar/img/works/thumbs/3.jpg')}}" alt="img01" />
              </a>
            </li>
            <li>
              <a href="https://bootstrapmade.com" data-largesrc="{{asset('assets/alstar/img/works/4.jpg')}}" data-title="Portfolio title" data-description="In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea. Sed oratio repudiare ei, cum an magna labitur, eu atqui augue mei. Pri consul detracto eu, solet nusquam accusam ex vim, an movet interesset necessitatibus mea.">
                <img src="{{asset('assets/alstar/img/works/thumbs/4.jpg')}}" alt="img01" />
              </a>
            </li>
            <li>
              <a href="https://bootstrapmade.com" data-largesrc="{{asset('assets/alstar/img/works/5.jpg')}}" data-title="Portfolio title" data-description="Duo te dico volutpat, unum elit oblique per id. Ne duo mollis sapientem intellegebat. Per at augue vidisse percipit, pri vocibus assueverit interesset ut, no dolore luptatum incorrupte nec. In mentitum forensibus nec, nibh eripuit ut pri, tale illud voluptatum ut sea">
                <img src="{{asset('assets/alstar/img/works/thumbs/5.jpg')}}" alt="img01" />
              </a>
            </li>
            <li>
              <a href="https://bootstrapmade.com" data-largesrc="{{asset('assets/alstar/img/works/6.jpg')}}" data-title="Portfolio title" data-description="Id elit saepe pro. In atomorum constituam definitionem quo, at torquatos sadipscing eum, ut eum wisi meis mentitum. Probo feugiat ea duo. An usu platonem instructior, qui dolores inciderint ad. Te elit essent mea, vim ne atqui legimus invenire, ad dolor vitae sea.">
                <img src="{{asset('assets/alstar/img/works/thumbs/6.jpg')}}" alt="img01" />
              </a>
            </li>
             <li>
              <a href="https://bootstrapmade.com" data-largesrc="{{asset('assets/alstar/img/works/6.jpg')}}" data-title="Portfolio title" data-description="Id elit saepe pro. In atomorum constituam definitionem quo, at torquatos sadipscing eum, ut eum wisi meis mentitum. Probo feugiat ea duo. An usu platonem instructior, qui dolores inciderint ad. Te elit essent mea, vim ne atqui legimus invenire, ad dolor vitae sea.">
                <img src="{{asset('assets/alstar/img/works/thumbs/6.jpg')}}" alt="img01" />
              </a>
            </li>
             <li>
              <a href="https://bootstrapmade.com" data-largesrc="{{asset('assets/alstar/img/works/6.jpg')}}" data-title="Portfolio title" data-description="Id elit saepe pro. In atomorum constituam definitionem quo, at torquatos sadipscing eum, ut eum wisi meis mentitum. Probo feugiat ea duo. An usu platonem instructior, qui dolores inciderint ad. Te elit essent mea, vim ne atqui legimus invenire, ad dolor vitae sea.">
                <img src="{{asset('assets/alstar/img/works/thumbs/6.jpg')}}" alt="img01" />
              </a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </section>

  <!-- Parallax 2 -->
  <section id="parallax2" class="home-section parallax" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="clients">
            <li class="wow fadeInDown" data-wow-delay="0.3s"><a href="#"><img src="img/clients/1.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.6s"><a href="#"><img src="img/clients/2.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="0.9s"><a href="#"><img src="img/clients/3.png" alt="" /></a></li>
            <li class="wow fadeInDown" data-wow-delay="1.1s"><a href="#"><img src="img/clients/4.png" alt="" /></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section id="team" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Our Team</h2>
            <div class="heading-line"></div>
            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
              laborum</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
          <div class="box-team wow bounceInUp" data-wow-delay="0.1s">
            <img src="{{asset('assets/alstar/img/team/1.jpg')}}" alt="" class="img-circle img-responsive" />
            <h4>Dominique Vroslav</h4>
            <p>Art Director</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.3s">
          <div class="box-team wow bounceInUp">
            <img src="{{asset('assets/alstar/img/team/2.jpg')}}" alt="" class="img-circle img-responsive" />
            <h4>Thomas Jeffersonn</h4>
            <p>Web Designer</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.5s">
          <div class="box-team wow bounceInUp">
            <img src="{{asset('assets/alstar/img/team/3.jpg')}}" alt="" class="img-circle img-responsive" />
            <h4>Nola Maurin</h4>
            <p>Illustrator</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3" data-wow-delay="0.7s">
          <div class="box-team wow bounceInUp">
            <img src="{{asset('assets/alstar/img/team/4.jpg')}}" alt="" class="img-circle img-responsive" />
            <h4>Mira Ladovic</h4>
            <p>Typographer</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Contact us</h2>
            <div class="heading-line"></div>
            <p>If you have any question or just want to say 'hello' to Alstar web studio please fill out form below and
              we will be get in touch with you within 24 hours. </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <form action="{{url('constant-post')}}" method="post" class="form-horizontal contactForm" role="form">
              @csrf

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4"
                  data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email"
                  data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>

           <!--  <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4"
                  data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
            </div> -->

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us"
                  placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-theme btn-lg btn-block">Send message</button>
              </div>
            </div>

          </form>

        </div>
      </div>

    </div>
  </section>

  <!-- Bottom widget -->
  <section id="bottom-widget" class="home-section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="contact-widget wow bounceInLeft">
            <i class="fa fa-map-marker fa-4x"></i>
            <h5>Main Office</h5>
            <p>
              B31 Ground Floor, Sector 6  <br />Noida, Uttar Pradesh 201301
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInUp">
            <i class="fa fa-phone fa-4x"></i>
            <h5>Call</h5>
            <p>
              0120 412 9730<br>

            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-widget wow bounceInRight">
            <i class="fa fa-envelope fa-4x"></i>
            <h5>Email us</h5>
            <p>
              hr@webcoir.com<br />info@webcoir.com
            </p>
          </div>
        </div>
      </div>
      <div class="row mar-top30">
        <div class="col-md-12">
          <h5>We're on social networks</h5>
          <ul class="social-network">
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
            <li><a href="#">
                <span class="fa-stack fa-2x">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
                </span></a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; Alstar. All rights reserved.</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Alstar
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- js -->
  <script src="{{asset('assets/alstar/js/jquery.js')}}"></script>
  <script src="{{asset('assets/alstar/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('assets/alstar/js/wow.min.js')}}"></script>
  <script src="{{asset('assets/alstar/js/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('assets/alstar/js/jquery.nav.js')}}"></script>
  <script src="{{asset('assets/alstar/js/modernizr.custom.js')}}"></script>
  <script src="{{asset('assets/alstar/js/grid.js')}}"></script>
  <script src="{{asset('assets/alstar/js/stellar.js')}}"></script>
  <!-- Contact Form JavaScript File -->
  <!-- <script src="{{asset('assets/contactform/contactform.js')}}"></script> -->

    @if(session()->has('message'))
    <script>
        swal({
            title: "{!! session()->get('title')  !!}",
            text: "{!! session()->get('message')  !!}",
            type: "{!! session()->get('type')  !!}",
            confirmButtonText: "OK"
        });
  </script>
        @php session()->forget('message') @endphp
    @endif

<!--</script>-->


@if(session('success'))
    <script type="text/javascript">
        $(document).ready(function(){
            swal("Success!", "{{ session('success') }}", "success");
        });
    </script>
@endif

@if(session('alert'))
    <script type="text/javascript">
        $(document).ready(function(){
            swal("Sorry!", "{!! session('alert') !!}", "error");
        });
    </script>
@endif

<script src="{{ asset('assets/admin/js/bootstrap-toggle.min.js') }}"></script>




</body>

</html>