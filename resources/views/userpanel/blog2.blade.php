<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mini log</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700,700italic|Playfair+Display:400,700,400italic,700italic" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
    .navbar-default {
        background-color: black;
        border-color: black;
    }

    .navbar-default .navbar-nav>li>a {
        color: white;
        font-weight: bold;
    }

    .title {
        text-align: center;
        position: absolute;
        margin-top: -23%;

        margin-left: 12%;
        font-family: "Playfair Display";
        font-weight: bold;
    }

    ul.nav.navbar-nav {
        float: right;
        font-size: 119%;
    }

    lop a {
        color: #D6403A;
        font-size: 15px;
        padding: 9px 12px;
    }

    .standard_header .standard_social_links {
        margin-left: 1rem;
    }

    /*
  =========================================================================================
                                    footer
  =========================================================================================
  */

    .footer-wrap {
        padding-top: 43px;
        background-size: cover;
    }

    .footer-wrap h3 {
        color: #fff;
        font-size: 17px;
        text-transform: uppercase;
        margin-bottom: 25px;
    }

    .footer-wrap p {
        font-size: 13px;
        line-height: 24px;
        color: #b3b3b3;
        margin-top: 15px;
    }

    .footer-wrap p a {
        color: #fff;
        text-decoration: underline;
        font-style: italic;
    }

    .footer-wrap p a:hover {
        text-decoration: none;
        color: #ff7800;
    }

    .footer-links li a {
        font-size: 13px;
        line-height: 30px;
        color: #ccc;
        text-decoration: none;
    }


    .footer-links li:before {
        content: "\f105";
        font-family: 'FontAwesome';
        padding-right: 10px;
        color: #ccc;
    }

    .footer-category li a {
        font-size: 13px;
        line-height: 30px;
        color: #ccc;
        text-decoration: none;
    }

    .footer-category li:before {
        content: "\f105";
        font-family: 'FontAwesome';
        padding-right: 10px;
        color: #b3b3b3;
    }

    .address {

        color: #b3b3b3;
        font-size: 14px;
        position: relative;
        padding-left: 30px;
        line-height: 30px;
    }

    .address:before {
        content: "\f277";
        font-family: 'FontAwesome';
        position: absolute;
        top: 0;
        left: 0;
    }

    .info a {

        color: #b3b3b3;
        font-size: 14px;
        line-height: 30px;
        font-weight: normal;
    }

    .fa-phone:before {
        content: "\f095";
    }

    .info a {

        color: #b3b3b3;
        font-size: 14px;
        line-height: 30px;
        font-weight: normal;
    }

    .fa-fax:before {
        content: "\f1ac";
    }

    .copyright {
        border-top: 1px solid #111;
        font-size: 14px;
        color: #ccc;
        padding-top: 15px;
        text-align: center;
        padding-bottom: 15px;
        background: #222;
    }

    footer .second_class {
        border-bottom: 1px solid #444;
        padding-bottom: 25px;
    }

    footer .first_class {
        padding-bottom: 21px;
        border-bottom: 1px solid #444;
    }

    footer .first_class p,
    footer .first_class h3 {
        margin: 0 0;

    }

    footer {
        background: #333;
    }

    footer .newsletter input[type="text"] {
        width: 100%;
        background: #fff;
        color: #333;
        border: 1px solid #222;
        padding: 14px 20px;
        border-radius: 50px;
        margin-top: 12px;
    }

    .newsletter .newsletter_submit_btn {
        background: #fff;
        position: absolute;
        right: 30px;
        border: 0;
        top: 26px;
        font-size: 17px;
        color: #333;
    }


    footer .second_class_bdr {
        padding-top: 25px;
        border-top: 1px solid #222;
    }

    footer .btn-facebook a {
        padding: 6px 14px !important;
    }

    footer .btn-envelop a {
        color: #D6403A;
        font-size: 15px;
        padding: 12px 12px;
    }

    footer .round-btn a {
        padding: 6px 12px;
    }

    footer .round-btn {
        box-shadow: 2px 2px 5px 0px #222 !important;
    }

    footer .round-btn {
        margin: 15px 4px;
    }

    footer dl,
    ol,
    ul {
        padding-left: 5px;
    }

    footer li {
        list-style: none;
    }

    @media(max-width:768px) {
        .footer-wrap h3 {
            margin-top: 27px;
        }

        footer .round-btn {
            margin: 15px 4px;
        }
    }

    @media(max-width:320px) {
        .copyright {
            font-size: 13px;
        }
    }



    .fab {
        padding: 15px;
        font-size: 30px;
        width: 55px;
        text-align: center;
        text-decoration: none;
        margin: 5px 2px;
        border-radius: 34%;
    }

    .fab:hover {
        opacity: 0.7;
    }



    .container.second_class_bdr {
        text-align: justify;
        color: #fff;
    }

    .row {
        margin-right: -150px;
        margin-left: -151px;
    }

    .col-md-4.col-sm-6 {
        text-align: justify;
        color: #fff;
    }


    .vertical {
        display: table-cell;
        vertical-align: middle;

    }

    .main-header .inner {
        width: 80%;
        margin-top: -64px;
    }

    .inner {
        position: relative;
        width: 80%;
        max-width: 710px;
        margin: 0 auto;
    }

    .main-header-content.inner h1,
    .main-header-content.inner .post-meta,
    .main-header-content.inner .post-meta a {
        color: black;
    }

    .page-title {
        margin: 10px 0 0px 0;
        font-size: 6.5rem;
        letter-spacing: -1px;
        font-weight: 700;
        font-family: "Playfair Display";
        color: #fff;
        font-style: italic;
    }

    .entry-title-divider {
        position: relative;
        display: inline-block;
        vertical-align: top;
        margin: 0 auto;
        margin-top: 15px;
        margin-bottom: 7px;
        height: 5px;
    }

    .entry-title-divider span {
        display: inline-block;
        vertical-align: top;
        width: 5px;
        height: 5px;
        margin: 0 3px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .entry-title-divider:before {
        left: -48px;
    }

    .entry-title-divider:before,
    .entry-title-divider:after {
        content: '';
        position: absolute;
        top: 2px;
        width: 40px;
        height: 1px;
        background-color: black;
    }

    .entry-title-divider span {
        background-color: black;
    }

    .entry-title-divider span {
        display: inline-block;
        vertical-align: top;
        width: 5px;
        height: 5px;
        margin: 0 3px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .entry-title-divider span {
        background-color: black;
    }

    .entry-title-divider span {
        display: inline-block;
        vertical-align: top;
        width: 5px;
        height: 5px;
        margin: 0 3px;
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .entry-title-divider:after {
        right: -48px;
    }

    .entry-title-divider:before,
    .entry-title-divider:after {
        content: '';
        position: absolute;
        top: 2px;
        width: 40px;
        height: 1px;
        background-color: black;
    }

    h1.page-title {
        margin-left: -18px;
    }

    h2.page-description {
        text: center;
        margin-left: -15%;
    }

    .cate ul li a {
        color: #fff;
        padding: 6px 20px;
        display: block;
        text-decoration: none;

        margin-top: 6px;
    }

    .cate {
        position: absolute;
        top: 120%;
        left: 299px;
        overflow: hidden;
        background-color: red;
        float: left;
    }
    h2.page-description {
    margin-left: 21%;
    font-family: sans-serif;
    text-align: justify;
    width: 1105px;
    font-size: xxx-large;
    color: black;
    font-weight: 700;
}
h4.text {
    width: 879px;
    text-align: justify;
    line-height: inherit;
    color: var(--grey-color, #5E6D77);
    font-size: 18px;
}
</style>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="{{url('/')}}"> <img src="..\images\logo\final_logo_3.png" alt="Logo" class="images" width="130"></a>
            </div>

            <ul class="nav navbar-nav">
                <li><a href="/">HOME</a></li>
                <li><a href="{{url('aboutus')}}">ABOUT US</a></li>
                <li><a href="{{url('faq')}}">FAQ</a></li>
                <li><a href="{{url('blog')}}">BLOG</a></li>
                <li><a href="{{url('flights')}}">FLIGHTS</a></li>
                <li><a href="{{url('contactus')}}">Contact Us</a></li>

            </ul>
        </div>
        <img src="..\images/blogpage.jpg" width="100%" height="850">
    </nav>
    <div class="title">


        <div class="vertical">
            <div class="main-header-content inner">
                
                <div class="entry-title-divider">
                    <span></span><span></span><span></span>
                </div>
                <h2 class="page-description">{{$Info->blogtitle}}</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <img width="870" height="500" src="{{ asset('upload/images/' . $Info->blogimage) }}" class="attachment-870x500 size-870x500 wp-post-image" alt="" loading="lazy"> </a>
        <div class="cate">
            <ul>
                <li><a href="" width="100px">{{$Info->buttonlink}}</a></li>
            </ul>
        </div>
        <h1>{{$Info->blogtitle}}</h1>
        <h4 class="text">{{$Info->blogtext}}</h4>
    </div>

<br><br>
    <footer class="site-footer clearfix">
        <a href="#top" id="back-to-top" class="back-top"></a>
        <div class="text-center">
            <div class="footer-wrap">
                <div class="container first_class">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <h3>BE THE FIRST TO KNOW</h3>
                            <p>Get all the latest information on Triedge Services, Events, Jobs
                                and Fairs. Sign up for our newsletter today.
                            </p>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <form class="newsletter">
                                <input type="text" placeholder="Email Address">
                                <button class="newsletter_submit_btn" type="submit"><i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="col-md-12"></div>
                            <div class="clearfix"></div>
                            <div class="col-md-12">
                                <h3 style="text-align: right;"></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second_class">
                <div class="container second_class_bdr">
                    <div class="row">
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-logo">
                                <img src="..\images\logo\final_logo_3.png" alt="logo" padding="100" width="100">
                            </div>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Labore similique suscipit voluptas
                                eligendi, quis odio. Ex quae tempora vitae molestias illo perspiciatis? Id cum recusandae
                                nulla non facilis est harum.
                            </p>
                        </div>
                        <div class="col-md-2 col-sm-6">
                            <h3>Quick LInks</h3>
                            <ul class="footer-links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h3>FIND US</h3>
                            <ul class="footer-category">
                                <li><a href="#">What We Do</a></li>
                                <li><a href="#">Address</a></li>
                                <li><a href="#">Phone</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <h3>Tranding Blogs</h3>
                            <ul class="footer-links">
                                <li><a href="#">What We Love Tech</a></li>
                                <li><a href="#">What We Love Design</a></li>
                                <li><a href="#">Why To Use Laravel</a></li>
                                <li><a href="#">Why PHP Is The Best</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Font Awesome 5 links-->
    <script src="https://kit.fontawesome.com/fddf5c0916.js" crossorigin="anonymous"></script>
    </div>
</body>

</html>