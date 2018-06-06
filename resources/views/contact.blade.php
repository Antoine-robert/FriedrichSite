@extends('layouts.template')

@section('title')
    testlayout
@endsection
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tarte Flambée Friedrich</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Homemade+Apple" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Prata" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="icon" type="image/jpg" href="{{asset('/img/Flogo.jpg')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" href='css/Template.css'>
    <link rel="stylesheet" href='css/Contact.css'>

</head>
@section('header')
    <header>
        <div class="title">
            <a href="{{ url('/') }}" class="navbar-brand"><img src="img/Flogo.gif" ></a>
            <div style="margin-left:27%;">Formulaire de Contact</div>
        </div>
        <div class="top-right links">
            <a href="/produits">Nos Produits</a>
            <a href="/entreprise">Notre Entreprise</a>
        </div>
    </header>
@endsection
@section('content')
    <div class='container'>
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class=" container">
                <div class="ws_conteneur_general_champs_information" style= "background:rgba(0,0, 0, 0.5);border-bottom:5px solid darkred;border-top:5px solid darkred ;">
                    <div style="color: white;font-family: 'Raleway', sans-serif;font-size: 60px;margin-top: 1%;background: black;border-radius: 10%">Vos informations</div>
                    <div class="ws_conteneur_champs_invisible" style="margin-top: 2%;">
                        <div style="cursor: default;">Nom</div>
                        <input type="text" name="nom_pariculier" placeholder="Entrez votre nom" />
                    </div>
                    <div class="ws_conteneur_champs_invisible" style="margin-top: 2%;">
                        <div style="cursor: default;">Prénom</div>
                        <input type="text" name="prenom_pariculier" placeholder="Entrez votre Prénom" />
                    </div>
                    <div class="ws_conteneur_champs_invisible" style="margin-top: 2%;">
                        <div style="cursor: default;">Numéro de téléphone</div>
                        <input type="text" name="adresse2" placeholder="Entrez votre Numéro de tel" />
                    </div>
                    <div class="ws_conteneur_champs_invisible" style="margin-top: 2%;">
                        <div style="cursor:default;">Adresse mail</div>
                        <input type="text" name="adresse2" placeholder="Entrez votre Adresse mail" />
                    </div>
                    <div class="ws_conteneur_champs_invisible" style="margin-bottom: 2%;margin-top: 2%;height: 250px;width: 100%;">
                        <textarea type="text" name="adresse2" placeholder="Rédigez Ici votre Message" style="width:100%;height:100%;"></textarea>
                    </div>
                    <input type="checkbox"><p style="font-size:20px;color: white;display: inline;max-width: 1000px;">En soumettant ce formulaire, j'accepte que les informations saisies soient exploitées dans le cadre de votre demande de contact ansi que dans la relation commerciale qui peut en découler</p>
                </br>
                    <button type="submit"  class="button" style="vertical-align:middle;margin-bottom: 5px"><span>Envoyer</span></button>
                </div>
            </div>
            </div>
        </div>
    </div>

@endsection
@section('scripts')
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection