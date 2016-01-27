<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../public/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:500&subset=latin,vietnamese' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Noto+Sans&subset=latin,vietnamese' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:700&subset=latin,vietnamese' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Kanit:400italic&subset=latin,vietnamese' rel='stylesheet'
          type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>


    <title>Email Sig</title>

    <!-- Bootstrap core CSS -->

    {{--<link href="css/main.css" rel="stylesheet">--}}
    {!! HTML::style('css/main.css') !!}
    {!! HTML::style('css/about.css') !!}
    {!! HTML::style('css/result.css') !!}



            <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

    {{--<link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">--}}

    <!-- Custom styles for this template -->
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    {{--<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->--}}
    {{--<script src="../../assets/js/ie-emulation-modes-warning.js"></script>--}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

<nav class="navbar navbar-custom navbar-fixed-top">
    <div class="container">

        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            {!! HTML::image('img/logo.png', '', array('class'=>'img-top-fix navbar-left')) !!}
            {{--<img src="img/udacity-logo.jpg" class="img-top-fix navbar-left">--}}
            <a class="navbar-brand" href="index.html">EmailSig</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll"> <!--scroll to certain session-->
                    <a href="price.html">Pricing</a>
                </li>
                <li class="page-scroll"> <!--scroll to certain session-->
                    <a href="about.html">About Us</a>
                </li>
                <li class="page-scroll"> <!--scroll to certain session-->
                    <a href="#signup.html">Sign Up</a>
                </li>
                <li class="page-scroll"> <!--scroll to certain session-->
                    <a href="login.html">Login</a>
                </li>


                <li>
                    <a href="../lang/en "> {!! HTML::image('img/En.png', '',array('class'=>'img-language')) !!} </a>

                </li>
                <li>
                    <a href="../lang/vi "> {!! HTML::image('img/vn.png', '',array('class'=>'img-language')) !!} </a>


                </li>
            </ul>
            </ul>
        </div>
        <!--/.nav-collapse -->
    </div>
</nav>
@yield('intro')
{{--<section class="intro">--}}
{{--<div class="bg"></div>--}}
{{--<div class="jumbotron">--}}
{{--<div class="container">--}}
{{--<h1 class="page-heading text-center">--}}
{{--<span class="em-text">emailsig</span>.com--}}
{{--</h1>--}}

{{--<p class="text-center">Email Signature for Vietnamese</p>--}}

{{--<div class="btn-custom page-scroll">--}}
{{--<a class="btn btn-lg btn-warning raised page-scroll" href="#create" role="button">Create Free Signature--}}
{{--Now</a>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}
@yield('content')

@yield('why')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-8 footer-menu">
                <a href="" class="footer-link">FAQ</a>
                <a href="" class="footer-link">Help</a>
                <a href="" class="footer-link">Contact Us</a>
                <a href="" class="footer-link">Jobs</a>
                <a href="" class="footer-link">Pricing</a>
            </div>
            <div class="col-md-4">
                <div class="col-md-12 col-md-offset-2 social-group">
                    <p id="follow">Follow us on</p>

                    {{--<a href=""><img class="social-hover" alt="" src="img/facebook.png"></a>--}}
                    <a href="">{!! HTML::image('img/facebook.png', '', array('class'=>'social-hover')) !!}
                    </a>

                    <a href="">{!! HTML::image('img/twitter.png', '', array('class'=>'social-hover')) !!}</a>
                    <a href="">{!! HTML::image('img/linkedin.png', '', array('class'=>'social-hover')) !!}</a>
                    <a href="">{!! HTML::image('img/google-plus.png', '', array('class'=>'social-hover')) !!}</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p id="copyright">EmailSig &copy; 2016, All right reserved</p>
            </div>
        </div>
    </div>
    <!-- <p class="text-center">EmailSig &copy; 2016, All right reserved</p> -->
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
{{--<script src="js/bootstrap.js"></script>--}}
{!! HTML::script('js/bootstrap.js')  !!}


<script>


    //company
    $('#company').keyup(function () {
        $('#company-stack-area').text($(this).val());
        $('#company-area').text($(this).val());
        $('#company-area2').text($(this).val());

    });

    //officephone
    $('#officephone').keyup(function () {
        $('#officephone-stack-area').text($(this).val());
        $('#officephone-area').text($(this).val());
        $('#officephone-area2').text($(this).val());
    });

    //fax
    $('#fax').keyup(function () {
        $('#fax-stack-area').text($(this).val());
        $('#fax-area').text($(this).val());
        $('#fax-area2').text($(this).val());
    });

    //address
    $('#address').keyup(function () {
        $('#address-stack-area').text($(this).val());
        $('#address-area').text($(this).val());
        $('#address-area2').text($(this).val());
    });

    // address2
    $('#address2').keyup(function () {
        $('#address2-stack-area').text($(this).val());
        $('#address2-area').text($(this).val());
        $('#address2-area2').text($(this).val());
    });


    //drop down
    $("#middle-layout").click(function () {
        $("#action-area").text("Middle");
        $("#preview-middle-area").show();
        $('#preview-test-area').hide();
        $('#preview-stack-area').hide();
    });
    $("#test-layout").click(function () {
        $("#action-area").text("Middle");
        $("#preview-test-area").show();
        $('#preview-middle-area').hide();
        $('#preview-stack-area').hide();
    });
    $(function () {
        $('#stack-layout').on("click", function () {
            $("#action-area").text("Stack");
            $('#preview-test-area').hide();
            $('#preview-middle-area').hide();
            $("#preview-stack-area").show();
        });
    });

    //avatar
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#avatar-stack-area').attr('src', e.target.result);
                $('#avatar-middle-area').attr('src', e.target.result);
                $('#avatar-middle2-area').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    //name
    $('#desc').keyup(function () {
        $('#live-stack-preview').text($(this).val());
        $('#live-preview').text($(this).val());
        $('#namepreview').text($(this).val());

    });

    //job tilte
    $('#jobtitle').keyup(function () {
        $('#job-stack-area').text($(this).val());
        $('#job-area').text($(this).val());
        $('#job-area2').text($(this).val());

    });

    //email

    $('#email').keyup(function () {
        $('#email-stack-area').text($(this).val());
        $('#email-stack-area').attr("href", function (i, e) {
            return "mailto:" + $('#email-stack-area').text();
        });

        $('#email-area').text($(this).val());
        $('#email-area').attr("href", function (i, e) {
            return "mailto:" + $('#email-area').text();
        });

        $('#email-area2').text($(this).val());
        $('#email-area2').attr("href", function (i, e) {
            return "mailto:" + $('#email-area2').text();
        });
    });

    //phone
    $('#phone').keyup(function () {
        $('#phone-stack-area').text($(this).val());
        $('#phone-area').text($(this).val());
        $('#phone-area2').text($(this).val());
    });

    //Website
    $('#website').keyup(function () {
        $('#website-stack-area').text($(this).val());
        $('#website-stack-area').attr("href", function (i, e) {
            return $('#website').val();
        });

        $('#website-area').text($(this).val());
        $('#website-area').attr("href", function (i, e) {
            return $('#website').val();
        });

        $('#website-area2').text($(this).val());
        $('#website-area2').attr("href", function (i, e) {
            return $('#website').val();
        });
    });

    //Twitter
    $('#twitter').keyup(function () {
        $('#twitter-stack-area').show();
        $('#twitter-stack-link').attr("href", function (i, e) {
            return $('#twitter').val();
        });

        $('#twitter-area').show();
        $('#twitter-link').attr("href", function (i, e) {
            return $('#twitter').val();
        });


        $('#twitter-area2').show();
        $('#twitter-link2').attr("href", function (i, e) {
            return $('#twitter').val();
        });
    });
    $(function () {
        $("#twitter").on("focus, keyup", function () {
            $("#twitter-stack-area").toggle(this.value != "");
        });

        $("#twitter").on("focus, keyup", function () {
            $("#twitter-area").toggle(this.value != "");
        });


        $("#twitter").on("focus, keyup", function () {
            $("#twitter-area2").toggle(this.value != "");
        });
    });

    //Facebook
    $('#facebook').keyup(function () {
        $('#facebook-stack-area').show();
        $('#facebook-stack-link').attr("href", function (i, e) {
            return $('#facebook').val();
        });

        $('#facebook-area').show();
        $('#facebook-link').attr("href", function (i, e) {
            return $('#facebook').val();
        });


        $('#facebook-area2').show();
        $('#facebook-link2').attr("href", function (i, e) {
            return $('#facebook').val();
        });
    });

    $(function () {
        $("#facebook").on("focus, keyup", function () {
            $("#facebook-stack-area").toggle(this.value != "");
            $("#facebook-area").toggle(this.value != "");
            $("#facebook-area2").toggle(this.value != "");
        });
    });

    //skype
    $('#skype').keyup(function () {
        $('#skype-stack-area').show();
        $('#skype-stack-link').attr("href", function (i, e) {
            return $('#skype').val();
        });

        $('#skype-area').show();
        $('#skype-link').attr("href", function (i, e) {
            return $('#skype').val();
        });

        $('#skype-area2').show();
        $('#skype-link2').attr("href", function (i, e) {
            return $('#skype').val();
        });
    });
    $(function () {
        $("#skype").on("focus, keyup", function () {
            $("#skype-stack-area").toggle(this.value != "");
            $("#skype-area").toggle(this.value != "");
            $("#skype-area2").toggle(this.value != "");
        });
    });

    //Youtube
    $('#youtube').keyup(function () {
        $('#youtube-stack-area').show();
        $('#youtube-stack-link').attr("href", function (i, e) {
            return $('#youtube').val();
        });

        $('#youtube-area').show();
        $('#youtube-link').attr("href", function (i, e) {
            return $('#youtube').val();
        });

        $('#youtube-area2').show();
        $('#youtube-link2').attr("href", function (i, e) {
            return $('#youtube').val();
        });
    });
    $(function () {
        $("#youtube").on("focus, keyup", function () {
            $("#youtube-stack-area").toggle(this.value != "");
            $("#youtube-area").toggle(this.value != "");
            $("#youtube-area2").toggle(this.value != "");
        });
    });


    //G+
    $('#googleplus').keyup(function () {
        $('#googleplus-stack-area').show();
        $('#googleplus-stack-link').attr("href", function (i, e) {
            return $('#googleplus').val();
        });

        $('#googleplus-area').show();
        $('#googleplus-link').attr("href", function (i, e) {
            return $('#googleplus').val();
        });

        $('#googleplus-area2').show();
        $('#googleplus-link2').attr("href", function (i, e) {
            return $('#googleplus').val();
        });
    });

    $(function () {
        $("#googleplus").on("focus, keyup", function () {
            $("#googleplus-stack-area").toggle(this.value != "");
            $("#googleplus-area").toggle(this.value != "");
            $("#googleplus-area2").toggle(this.value != "");
        });
    });


    //Github
    $('#github').keyup(function () {
        $('#github-stack-area').show();
        $('#github-stack-link').attr("href", function (i, e) {
            return $('#github').val();
        });

        $('#github-area').show();
        $('#github-link').attr("href", function (i, e) {
            return $('#github').val();
        });

        $('#github-area2').show();
        $('#github-link2').attr("href", function (i, e) {
            return $('#github').val();
        });
    });


    $(function () {
        $("#github").on("focus, keyup", function () {
            $("#github-stack-area").toggle(this.value != "");
            $("#github-area").toggle(this.value != "");
            $("#github-area2").toggle(this.value != "");

        });
    });


    //Instagram
    $('#instagram').keyup(function () {
        $('#instagram-stack-area').show();
        $('#instagram-stack-link').attr("href", function (i, e) {
            return $('#instagram').val();
        });

        $('#instagram-area').show();
        $('#instagram-link').attr("href", function (i, e) {
            return $('#instagram').val();
        });


        $('#instagram-area2').show();
        $('#instagram-link2').attr("href", function (i, e) {
            return $('#instagram').val();
        });
    });

    $(function () {
        $("#instagram").on("focus, keyup", function () {
            $("#instagram-stack-area").toggle(this.value != "");
            $("#instagram-area").toggle(this.value != "");
            $("#instagram-area2").toggle(this.value != "");
        });
    });


    $('#linkedin').keyup(function () {
        $('#linkedin-stack-area').show();
        $('#linkedin-stack-link').attr("href", function (i, e) {
            return $('#linkedin').val();
        });

        $('#linkedin-area').show();
        $('#linkedin-link').attr("href", function (i, e) {
            return $('#linkedin').val();
        });


        $('#linkedin-area2').show();
        $('#linkedin-link2').attr("href", function (i, e) {
            return $('#linkedin').val();
        });
    });

    $(function () {
        $("#linkedin").on("focus, keyup", function () {
            $("#linkedin-stack-area").toggle(this.value != "");
            $("#linkedin-area").toggle(this.value != "");
            $("#linkedin-area2").toggle(this.value != "");
        });
    });

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
{{--<script src="js/main.js"></script>--}}
{!! HTML::script('js/main.js')  !!}

</body>
</html>

