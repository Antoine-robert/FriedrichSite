<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link href="/css/Template.css" type ="text/css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Prata" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="icon" type="image/jpg" href="{{asset('/img/Flogo.jpg')}}">
    @yield('custom_css')
</head>
<body>
@yield('header')

@yield('content')

@yield('scripts')
</body>
<footer>
    <div class="container" style="margin-top: 50px">
        <div class="row">
            <div class="col-md-4 col-sm-6 footerleft " style="padding-right: 0px">
                <h6 class="heading7">A propos</h6>
                <p> Friedrich Surgelé est une entreprise familliale qui fabrique des tartes flambées surgelées depuis plus de 25 ans dans le plus grand respect des traditions alsasciennes </p>
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
            <p>© Friedrich Surgelés  - 2018</p>
        </div>
    </div>
</div>