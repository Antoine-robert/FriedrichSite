<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"/>

        <title>Friedrich Surgelés</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="icon" type="image/jpg" href="{{asset('/img/Flogo.jpg')}}">

        <!-- Styles -->
        <style>
            html, body {
                background: url("http://127.0.0.1:8000/img/Bois3.jpg")no-repeat center fixed;
                margin:0;
                padding:0;
                -webkit-background-size: cover;
                background-size: cover;
                color: #7f0000;
                font-family: 'Prata', serif;
                font-weight: 100;
                height: 100vh;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 20px;
                top: 36px;
                text-shadow: white 1px 0 10px;
            }
            .top-left {
                position: absolute;
                left: 23%;
                top: 10px;
            }

            .content {
                text-align: center;
                height: 50%;
                width: 100%;
                background:rgba(0, 0, 0, 0.5);
            }
            .content:hover {
                           }

            .title {
                color: #ffffff;
                margin-top:8%;
                font-size: 84px;
                text-shadow: white 1px 0 10px;
            }

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a:hover {
                padding: 0 25px;
                font-size: 24px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            footer {
                background:black;
                background-size: cover;
                background-repeat: no-repeat;
                min-height: 350px;
                font-family: 'Open Sans', sans-serif;
                padding-top: 30px
            }

            .footerleft {
                margin-top: 20px;
                padding: 0 36px;
            }

            .logofooter {
                margin-bottom: 10px;
                font-size: 25px;
                color: white;
                font-weight: 700;
            }

            .footerleft p {

                color: white;
                font-size: 12px !important;
                font-family: 'Open Sans', sans-serif;
                margin-bottom: 15px;
            }

            .footerleft p i {
                width: 20px;
                color: #fff;
            }

            .paddingtop-bottom {
                margin-top: 20px;
            }

            .footer-ul {
                list-style-type: none;
                padding-left: 0px;
                margin-left: 2px;
            }

            .footer-ul li {
                line-height: 29px;
                font-size: 12px;
                margin-top: 5px;
            }

            .footer-ul li a {
                font-size: 17px;
                text-decoration: none;
                font-weight: 200;
                color: #fff;
                transition: color 0.2s linear 0s, background 0.2s linear 0s;
                display: block;
                padding-bottom: 5px;
                border-bottom: 1px dotted #fff;
            }

            .footer-ul i {
                margin-right: 10px;
            }

            .footer-ul li a:hover {
                transition: color 0.2s linear 0s, background 0.2s linear 0s;
                color: #73b0f4;
            }

            .social:hover {
                -webkit-transform: scale(1.1);
                -moz-transform: scale(1.1);
                -o-transform: scale(1.1);
            }

            .icon-ul {
                list-style-type: none !important;
                margin: 0px;
                padding: 0px;
            }

            .icon-ul li {
                line-height: 75px;
                width: 100%;
                float: left;
            }

            .icon {
                float: left;
                margin-right: 5px;
            }

            .copyright {
                min-height: 40px;
                background-color: #141d29;
            }

            .copyright p {
                text-align: center;
                color: white;
                padding: 10px 0;
                margin-bottom: 0px;
            }.heading7 {
                 position: relative;
                 margin: 0 0 25px;
                 color: #fff;
                 padding-bottom: 5px;
                 font-weight: 900;
                 font-size: 24px;
                 line-height: 28px;
             }

            .heading7:before {
                content: " ";
                position: absolute;
                left: 0;
                bottom: 0;
                width: 60px;
                height: 1px;
                background-color: #fff;
            }

            .post p a {
                font-size: 12px;
                color: white !important;
                line-height: 20px;
            }

            .post p a span {
                display: block;
                color: #8f8f8f !important;
            }

            .bottom_ul {
                list-style-type: none;
                float: right;
                margin-bottom: 0px;
            }

            .bottom_ul li {
                float: left;
                line-height: 40px;
            }

            .bottom_ul li:after {
                content: "/";
                color: white;
                margin-right: 8px;
                margin-left: 8px;
            }

            .bottom_ul li a {
                color: white;
                font-size: 12px;
            }

            .post a:hover {

                text-decoration: none;
            }
        </style>
    </head>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-left links">
                <img src="img/Flogo.jpg" style="height: 300px;width: 1000px">
            </div>

            <div class="content">

                <div class="title m-b-md">
                    Tarte Flambée Friedrich
                </div>

                <div class="links">
                    <a href="/produits">Nos Produits</a>
                    <a href="/contact">Nous contacter</a>
                    <a href="/entreprise">Notre entreprise</a>
                </div>
                <img src="img/savourezlalsace.gif" style="background:white;border-bottom-left-radius: 10%;border-bottom-right-radius : 10%;margin-top: 140px;margin-left: 80%">
            </div>
        </div>
        <div class="flex-center position-ref full-height" style ="background: url('img/bois.jpg'); border :5px solid #000000">
        <iframe id="player" type="text/html" width="1200" height="600" style="box-shadow:8px 8px 12px black"
                           src="http://www.youtube.com/embed/M7lc1UVf-VE?enablejsapi=1&origin=http://example.com"
                           frameborder="0"></iframe></div>
    </body>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 footerleft ">
                    <h6 class="heading7">A propos</h6>
                    <p> Description de l'entreprise rapide </p>
                    <p> Nom de rue,Ville, Région Pays Code Postale </p>
                    <p><i class="fa fa-phone"></i> Téléphone :
                        <span itemprop="telephone"> +33 636982500</span></p>
                    <p><i class="fa fa-envelope"></i> E-mail :
                        <span itemprop="email">email.ifr</span></p>
                    <p> Jours d'ouverture</p>
                </div>
                <div class="col-md-2 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">Plan du site</h6>
                    <ul class="footer-ul">
                        <li><a href="/entreprise" title="Friedrich Entreprise"> Notre entreprise</a>
                        </li>
                        <li><a href="/produits" title="Tous nos Produits"> Nos produits</a></li>
                        <li><a href="/contact" title="Formulaire de contact rapide"> Nous contacter</a></li>
                        <li><a href="/" title="Page d'accueil"> Accueil</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-2 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7">Facebook</h6>
                    <a href="https://www.facebook.com/friedrichsurgeles/" style="display: inline; font-size: 20px;"><img src="https://www.facebook.com/images/fb_icon_325x325.png" class="img-responsive" style = "display: inline";></a>
                </div>
                <div class="col-md-3 col-sm-6 paddingtop-bottom">
                    <h6 class="heading7" >Nous trouver</h6>

                    <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBLA3h_qdoCqjNspv-AREIpSAfwIuGqeKQ&q=Friedrich+Surgelé,Geudertheim+France" sytle="" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </footer>

    <div class="copyright">
        <div class="container">
            <div class="col-md-12 col-sm-12">
                <p>©Friedrich Surgelés  - 2018</p>
            </div>
        </div>
    </div>
</html>
