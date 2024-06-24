<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html>
<!--<![endif]-->

<head>

    <!-- Basic -->
    <meta charset="utf-8">
    <title>POSX ระบบบริหารร้านอาหาร</title>
    <meta name="author" content="Crivos.com">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/fonts/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/vendor/owl-carousel/owl.carousel.css" media="screen">
    <link rel="stylesheet" href="/vendor/owl-carousel/owl.theme.css" media="screen">
    <link rel="stylesheet" href="/vendor/magnific-popup/magnific-popup.css" media="screen">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="/css/theme.css">
    <link rel="stylesheet" href="/css/theme-elements.css">
    <link rel="stylesheet" href="/css/theme-animate.css">

    <!-- Current Page Styles -->
    <link rel="stylesheet" href="/vendor/rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" href="/vendor/circle-flip-slideshow/css/component.css" media="screen">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="/css/skins/purple.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/custom.css">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="/css/theme-responsive.css" />

    <!-- Head Libs -->
    <script src="/vendor/modernizr.js"></script>

    <!--[if IE]>
        <link rel="stylesheet" href="css/ie.css">
    <![endif]-->

    <!--[if lte IE 8]>
        <script src="vendor/respond.js"></script>
    <![endif]-->
    <link rel="icon" href="img/logos/icon.png" type="image/png" />
    <!-- <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="icon" href="/Favicon/icon36.png" sizes="36x36" type="image/png">
    <link rel="icon" href="/Favicon/icon48.png" sizes="48x48" type="image/png">
    <link rel="icon" href="/Favicon/icon72.png" sizes="72x72" type="image/png">
    <link rel="icon" href="/Favicon/icon96.png" sizes="96x96" type="image/png"> -->


    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '1106151966102615');
        fbq('track', "PageView");
    </script>
    <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1106151966102615&ev=PageView&noscript=1" /></noscript>
    <!-- End Facebook Pixel Code -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.21/lodash.min.js" integrity="sha512-WFN04846sdKMIP5LKNphMaWzU7YpMyCU245etK3g/2ARYbPK9Ub18eG+ljU96qKRCWh+quCY7yefSmlkQw1ANQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="body">
        <header>
            <div class="container">
                <h1 class="logo">
                    <a href="/">
                        <img alt="POSX" style="" src="/img/logos/LOGO_POSX.png">
                    </a>
                </h1>
            </div>
            <div class="navbar-collapse nav-main-collapse collapse">
                <div class="container">
                    <nav class="nav-main mega-menu">
                        <ul class="nav nav-pills nav-main" id="mainMenu">
                            <li>
                                <a href="/">Home</a>
                            </li>
                            <li>
                                <a href="/Features">ความสามารถ</a>
                            </li>
                            <li>
                                <a href="/Price">ราคา</a>
                            </li>
                            <li>
                                <a href="/Manual">คู่มือการใช้งาน</a>
                            </li>
                            <li>
                                <a href="/Contact">ติดต่อเรา</a>
                            </li>
                            <li>
                                <a href="#">สมัครใช้งาน</a>
                            </li>
                            <li>
                                <a href="https://app.posx.co/index.php/">เข้าสู้ระบบ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        <div role="main" class="main">
            <div id="content" class="content full">
                <script src="https://www.google.com/recaptcha/api.js"></script>
                <!-- Google Maps -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="alert alert-success hidden" id="contactSuccess">
                                <strong>Success!</strong> Your message has been sent to us.
                            </div>
                            <div class="alert alert-error hidden" id="contactError">
                                <strong>Error!</strong> There was an error sending your message.
                            </div>
                            <h2 class="short">ติดต่อเรา </h2>
                            <form action="/Home/Contact" id="contactForm" method="POST">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>ชื่อ*</label>
                                            <input id="name" type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name">
                                        </div>
                                        <div class="col-md-6">
                                            <label>อีเมล์*</label>
                                            <input id="email" type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>เบอร์ติดต่อกลับ*</label>
                                            <input id="phone" type="text" value="" data-msg-required="Please enter your contact number." maxlength="100" class="form-control" name="phone" id="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>หัวข้อ*</label>
                                            <input id="subject" type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" id="subject">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>ข้อความ*</label>
                                            <textarea id="message" maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <input id="first" type="hidden" value="" data-msg-required="Please enter the answer." maxlength="100" class="form-control" name="first">
                                            <input id="second" type="hidden" value="" data-msg-required="Please enter the answer." maxlength="100" class="form-control" name="second">
                                            <label id="question">bot? กรุณาตอบคำถามให้ถูกต้อง</label>
                                            <input id="ans" type="text" value="" data-msg-required="Please enter the answer." maxlength="100" class="form-control" name="ans">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <!-- data-sitekey="6LdnlFEdAAAAAAnn6hdsZvnGB2x7lMS77d2x0QZ1" -->
                                        <input id="button-submit" type="submit" value="Submit" class="g-recaptcha btn btn-primary btn-lg"  data-callback='onSubmit'></input>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">

                            <br />
                            <br />
                            <br />
                            <h4>บริษัท อัพ ดิจิตอล จำกัด</h4>
                            <ul class="list-unstyled">
                                <li>
                                    <i class="icon icon-map-marker"></i>
                                    <strong>ที่อยุ่ :</strong> 19/4 หมู่ที่ 5 ตำบลบึง อำเภอศรีราชา จ.ชลบุรี 20230
                                </li>
                                <br />
                                <li>
                                    <i class="icon icon-map-marker"></i>
                                    <strong>Google map :</strong> <a href="https://maps.app.goo.gl/EfVnSvZJucQuSNhv8" target="_blank">เปิดลิ้งค์</a>
                                </li>
                                <br />
                                <li><i class="icon icon-map-marker"></i> <strong>เลขที่บริษัท/เลขผู้เสียภาษี :</strong> 0205564021728</li>
                                <br />
                                <li><i class="icon icon-envelope"></i> <strong>Email :</strong> <a href="mailto:info@posx.com">info@posx.com</a></li>
                                <br />
                            </ul>
                            <table class="table" style="width: 75%; color :black">
                                <thead>
                                    <tr>
                                        <th>ติดต่อสอบถามข้อมูลได้ที่ <span style="font-size: 20px; color: blue; font-weight: bold">099-335-0709</span></th>
                                    </tr>
                                </thead>
                            </table>
                            <hr />
                            <h4>เวลาทำการ</h4>
                            <ul class="list-unstyled">
                                <li><i class="icon icon-time"></i> จันทร์ - ศุกร์ : 9.00 ถึง 18.00 น.</li>
                                <li><i class="icon icon-time"></i> เสาร์ - อาทิตย์ : ปิด</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer id="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h4>บริษัท อัพ ดิจิตอล จำกัด</h4>
                        <p>19/4 หมู่ที่ 5 ตำบลบึง อำเภอศรีราชา จ.ชลบุรี 20230</p>
                        <p>เลขที่บริษัท/เลขผู้เสียภาษี : 0205564021728</p>
                        <hr class="light">
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3 ">
                        <h4 class="short">Call Us</h4>
                        <span class="phone"><i class="icon icon-phone"></i> 099-335-0709</span>
                        <ul class="list icons list-unstyled">
                            <li><i class="icon icon-envelope"></i> <a href="mailto:info@posx.com">info@posx.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- Libs -->
    <script src="/vendor/jquery.js"></script>
    <script src="/js/plugins.js"></script>
    <script src="/vendor/jquery.easing.js"></script>
    <script src="/vendor/jquery.appear.js"></script>
    <script src="/vendor/jquery.cookie.js"></script>
    <script src="/vendor/bootstrap.js"></script>
    <script src="/vendor/twitterjs/twitter.js"></script>
    <script src="/vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script src="/vendor/rs-plugin/js/jquery.themepunch.revolution.js"></script>
    <script src="/vendor/owl-carousel/owl.carousel.js"></script>
    <script src="/vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
    <script src="/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="/vendor/jquery.validate.js"></script>

    <!-- Current Page Scripts -->


    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
        $(document).ready(function() {
            //set active tab
            var activeTab = 4;
            $('#mainMenu li:eq(' + activeTab + ')').addClass('active');

            //13.951061,100.509764  RES factory
            //var initLatitude = 13.951061;
            //var initLongitude = 100.509764;


            var initLatitude = 13.7904324;
            var initLongitude = 100.5885087;

            function initialize() {
                var myLatlng = new google.maps.LatLng(initLatitude, initLongitude);
                var mapOptions = {
                    zoom: 10,
                    center: new google.maps.LatLng(13.096833, 100.972172),
                    scrollwheel: false,
                };
                var map = new google.maps.Map(document.getElementById('googlemaps'), mapOptions);

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Hello World!',
                    address: "asdf",
                    html: "<strong>New York Office</strong><br>New York, NY 10017"
                });
            }


            google.maps.event.addDomListener(window, 'load', initialize);

        });
    </script>


    <script>
        let first = _.sample([1, 2, 3, 4, 5])
        let second = _.sample([1, 2, 3, 4, 5])

        let answer = first + second
        $('#first').val(first)
        $('#second').val(second)
        $('#question').text("bot? กรุณาตอบคำถามให้ถูกต้อง. " + first + "  +  " + second + " มีค่าเท่ากับเท่าไร?")


        function onSubmit(token) {

            document.getElementById('contactForm').submit();
            $('#button-submit').prop("disabled", true);
            $('#button-submit').text("Sending...")
        }

        function onType() {

            let n = $('#name').val()
            let m = $('#message').val()
            let e = $('#email').val()
            let p = $('#phone').val()
            let s = $('#subject').val()
            let ans = $('#ans').val()
            let correctAns = answer == parseInt(ans)
            if (n && m && e && p && s && correctAns) {
                $('#button-submit').prop("disabled", false);
            } else {
                $('#button-submit').prop("disabled", true);
            }
        }

        $(document).ready(function() {
            setTimeout(() => {
                $('#button-submit').prop("disabled", true);

            }, 0)


            $('#button-submit').on('click', (function() {

                document.getElementById('contactForm').submit();
                $('#button-submit').prop("disabled", true);
                $('#button-submit').text("Sending...")
            }))
            $(".form-control").on("input", onType);
        });
    </script>

    <!-- Theme Initializer -->
    <script src="/js/theme.js"></script>

    <!-- Custom JS -->
    <script src="/js/custom.js"></script>

    <script src="/js/app/myCustomAnalytic.js"></script>


    <!--Start of Zopim Live Chat Script-->
    <!--End of Zopim Live Chat Script-->


    <style>
        /*body {
     
        -webkit-filter: grayscale(40%);
       
    }*/
    </style>
</body>

</html>