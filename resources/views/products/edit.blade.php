<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">


    <title>Tartes Flambée Friedrich</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple|Lobster|Caveat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="icon" type="image/jpg" href="{{asset('/img/Flogo.jpg')}}">

    <!-- Styles -->
    <style>
        .glyphicon { margin-right:5px; }
        * {box-sizing:border-box}

        .button {
            font-family: 'Prata', serif;
            display: inline-block;
            border-radius: 4px;
            background-color: #7f0000;
            border: none;
            color: #ffffff;
            text-align: center;
            font-size: 28px;
            width: 180px;
            height: 50px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }
        .button:hover{
            box-shadow: black 1px 0 10px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }
        span > a:hover {
            color: white;
        }

        .button:hover span {
            padding-right: 25px;

        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
        .thumbnail
        {
            margin-bottom: 20px;
            padding: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            border-radius: 0px;
        }

        .item.list-group-item
        {
            float: none;
            width: 100%;
            background-color: #fff;
            margin-bottom: 10px;
        }
        .item.list-group-item:nth-of-type(odd):hover,.item.list-group-item:hover
        {
            background: #428bca;
        }

        .item.list-group-item .list-group-image
        {
            margin-right: 10px;
        }
        .item.list-group-item .thumbnail
        {
            margin-bottom: 0px;
        }
        .item.list-group-item .caption
        {
            padding: 9px 9px 0px 9px;
        }
        .item.list-group-item:nth-of-type(odd)
        {
            background: #eeeeee;
        }

        .item.list-group-item:before, .item.list-group-item:after
        {
            display: table;
            content: " ";
        }

        .item.list-group-item img
        {
            float: left;
        }
        .item.list-group-item:after
        {
            clear: both;
        }
        .list-group-item-text
        {
            margin: 0 0 11px;
        }

        html, body {
            background: url('http://127.0.0.1:8000/img/bois.jpg');
            background-size: cover;
            color: #7f0000;
            font-family: 'Prata', serif;
            font-weight: 100;
            height: 100%;
            margin: 0;
            overflow-x:hidden ;
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

        .content {
            text-align: center;
            height: 100%;
            margin-top: 36px;
        }
        .content:hover {

        }
        .row {
            margin: 10px 0 10px 0;}

        .title {
            font-size: 84px;
            text-shadow: white 1px 0 10px;
        }

        .links > a {
            color: #ffffff;
            padding: 0 25px;
            font-family: 'Prata', serif;
            font-size: 15px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .links > a:hover {
            color: white;
            font-size: 20px;
            text-decoration: none;

        }
        .m-b-md {
            margin-bottom: 30px;
        }
        table {
            width:100%;
        }
        td{
            color: white;
        }
        a{
            color :white;
        }
        div >a {
            color: white;
        }
        div >a:hover{
            color: white;
        }

        header .navbar-brand, header .navbar-brand img {
            margin-top: 0px;
            margin-bottom: 0px;
            padding-top: 0px;
            padding-left: 0px;
            height: 130px;
        }
        header{
            background-color: rgba(0,0,0,0.5);
            color :darkred;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 50px;
        }



    </style>
</head>
<script>
    function myFunction() {
        document.getElementById("Tartesucre").innerHTML = "Hello World";
        document.getElementById("Tartesel").innerHTML = "Hello World";
        document.getElementById("bio").innerHTML = "Hello World";
        document.getElementById("autre").innerHTML = "Hello World";
    }
</script>
<header>
    <div class="title">
        <a href="{{ url('/') }}" class="navbar-brand"><img src="img/Flogo.gif" ></a>
        <div style="margin-left:35%;">Nos Produits</div>
    </div>
    <div class="top-right links">
        <a href="/contact">Nous Contacter</a>
        <a href="/entreprise">Notre Entreprise</a>
    </div>
</header>
<body>
<div class="container">
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="container">
                <p style="display: inline-flex; fontsize:60px;color:red">Filtrer</p>
                <div id="categories-list" class="row list-group">
                    <div class="well well-sm"style="margin-bottom: 0; background: black;height: 100px">
                        <a href="#" id="Tartesucre" class="btn btn-default btn-sm" style="height:50px;width:200px;vertical-align: center">
                            <span class="glyphicon glyphicon-plus">
                                </span>Tartes sucrées</a>
                        <a href="#" id="Tartesel" class="btn btn-default btn-sm" style="height:50px;width:200px;vertical-align: center">
                            <span class="glyphicon glyphicon-plus"></span>Tartes Salées</a>
                        <a href="#" id="bio" class="btn btn-default btn-sm" style="height:50px;width:200px;vertical-align: center">
                            <span class="glyphicon glyphicon-plus">
                                </span>Tartes Bio</a>
                        <a href="#" id="autre" class="btn btn-default btn-sm" style="height:50px;width:200px;vertical-align: center">
                            <span class="glyphicon glyphicon-plus">
                                </span>Autre Produits</a>
                    </div>
                </div>

                @foreach($produits as $produit)
                    <div class="item  col-xs-4 col-lg-4" style=" background: white">
                        <div class="thumbnail" style = " background : #ffffff">
                            <h4 style="font-family: 'Prata',sans-serif;font-size: 30px;color: darkred;"> {{$produit->titre}}</h4>
                            <img class="group list-group-image" src="{{asset($produit->link_img)}}" alt="image tarte" style="box-shadow:8px 8px 12px black;max-height:250px;max-width:250px;" />
                            <div class="caption">
                            <!------<p class="group inner list-group-item-text">
                                {{$produit->description}} </p> ---------->
                                <div class="row">
                                    <div class="col-xs-12 col-md-6" style="background: url('http://127.0.0.1:8000/img/tableau-noir.jpg');background-size:cover;width: 100%;border:darkgreen solid 5px;box-shadow:8px 8px 12px black;max-height:200px">
                                        <p class="lead" style="font-family: 'Caveat', serif;font-size: 25px;color:white;margin-top: 2%;">
                                            {{$produit->description}}</p>
                                    </div>
                                    <div class="col-xs-12 col-md-12" style="margin-top: 2%">
                                        <button type="submit"  class="button"><span><a href="/edit/{{ $produit->id }}">Modifier</a></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>
