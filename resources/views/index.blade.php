<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test d'orientation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link href="css/app.css'" rel="stylesheet">
        <link href="css/template.css'" rel="stylesheet">
        <!-- <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet"> -->
        <!-- Styles -->
        <style>
            *{
                /* border: solid black 1px; */
            }

            .nom_module{
                /* color:  #FFA400; */
                color:  white;
            }

            .navbar {
                padding: 0;
                background-color: #40D2D5;
            }

            .navbar-brand{
                display:block;
            }

            #grad1 {
                background-color: : #9C27B0;
                height: 100%;
                margin-top: 100px;
                /* background-image: linear-gradient(120deg, #6c757d, #ffc721) */
            }

            #msform {
                text-align: center;
                position: relative;
                margin-top: 20px
            }

            #msform fieldset .form-card {
                background: white;
                border: 0 none;
                border-radius: 32px;
                box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
                padding: 20px 40px 30px 40px;
                box-sizing: border-box;
                width: 94%;
                margin: 0 3% 20px 3%;
                position: relative
            }

            #msform fieldset {
                background: white;
                border: 0 none;
                border-radius: 0.5rem;
                box-sizing: border-box;
                width: 100%;
                margin: 0;
                padding-bottom: 20px;
                position: relative
            }

            #msform fieldset:not(:first-of-type) {
                display: none
            }

            #msform fieldset .form-card {
                text-align: left;
                color: #9E9E9E
            }

            #msform input,
            #msform textarea {
                padding: 0px 8px 4px 8px;
                border: none;
                border-bottom: 1px solid #ccc;
                border-radius: 0px;
                margin-bottom: 25px;
                margin-top: 2px;
                width: 100%;
                box-sizing: border-box;
                font-family: montserrat;
                color: #2C3E50;
                font-size: 16px;
                letter-spacing: 1px
            }

            #msform input:focus,
            #msform textarea:focus {
                -moz-box-shadow: none !important;
                -webkit-box-shadow: none !important;
                box-shadow: none !important;
                border: none;
                font-weight: bold;
                border-bottom: 2px solid skyblue;
                outline-width: 0
            }

            #msform .action-button {
                width: 100px;
                background: skyblue;
                font-weight: bold;
                color: white;
                border: 0 none;
                border-radius: 32px;
                cursor: pointer;
                padding: 10px 5px;
                margin: 10px 5px
            }

            #msform .action-button:hover,
            #msform .action-button:focus {
                box-shadow: 0 0 0 2px white, 0 0 0 3px skyblue
            }

            #msform .action-button-previous {
                width: 100px;
                background: #616161;
                font-weight: bold;
                color: white;
                border: 0 none;
                border-radius: 32px;
                cursor: pointer;
                padding: 10px 5px;
                margin: 10px 5px
            }

            #msform .action-button-previous:hover,
            #msform .action-button-previous:focus {
                box-shadow: 0 0 0 2px white, 0 0 0 3px #616161
            }

            select.list-dt {
                border: none;
                outline: 0;
                border-bottom: 1px solid #ccc;
                padding: 2px 5px 3px 5px;
                margin: 2px
            }

            select.list-dt:focus {
                border-bottom: 2px solid skyblue
            }

            .card {
                z-index: 0;
                border: none;
                border-radius: 0.5rem;
                position: relative
            }

            .fs-title {
                font-size: 25px;
                color: #2C3E50;
                margin-bottom: 10px;
                font-weight: bold;
                text-align: left
            }

            #progressbar {
                /* margin-bottom: 30px; */
                overflow: hidden;
                color: lightgrey
            }

            #progressbar .active {
                color: #000000
            }

            #progressbar li {
                list-style-type: none;
                font-size: 12px;
                width: 10%;
                /* float: left; */
                /* position: relative */
            }

            #progressbar{
                width: 100%;
                display: flex;
                /* flex-direction: column; */
                justify-content: center;
                align-items: center;
            }

            .container{
                display: flex;
                flex-direction: column;
                /* justify-content: center; */
                /* align-items: center; */
            }

            #progressbar #account:before {
                font-family: FontAwesome;
                content: "\f023"
            }

            #progressbar #personal:before {
                font-family: FontAwesome;
                content: "\f007"
            }

            #progressbar #payment:before {
                font-family: FontAwesome;
                content: "\f09d"
            }

            #progressbar #confirm:before {
                font-family: FontAwesome;
                content: "\f00c"
            }

            #progressbar li:before {
                width: 20px;
                height: 20px;
                line-height: 45px;
                display: block;
                font-size: 18px;
                color: #ffffff;
                background: lightgray;
                border-radius: 50%;
                margin: 0 auto 10px auto;
                padding: 2px
                
            }

            /* ligne bleu */
            #progressbar li:after {
                /* content: '';
                width: 100%;
                height: 2px;
                background: lightgray;
                position: absolute;
                left: 0;
                top: 25px;
                z-index: -1 */
            }

            #progressbar li.active:before,
            #progressbar li.active:after {
                background: skyblue
            }

            .radio-group {
                position: relative;
                margin-bottom: 25px
            }

            .radio {
                display: inline-block;
                width: 204;
                height: 104;
                border-radius: 0;
                background: lightblue;
                box-shadow: 0 2px 2px 2px rgba(0, 0, 0, 0.2);
                box-sizing: border-box;
                cursor: pointer;
                margin: 8px 2px
            }

            .radio:hover {
                box-shadow: 2px 2px 2px 2px rgba(0, 0, 0, 0.3)
            }

            .radio.selected {
                box-shadow: 1px 1px 2px 2px rgba(0, 0, 0, 0.1)
            }

            .fit-image {
                width: 100%;
                object-fit: cover
            }


        </style>
    </head>
    <body>

            <div id="menu">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <nav class="navbar navbar-expand-lg navbar-light">
                                <a class="navbar-brand" href="/">
                                    <img src="{{ asset('css/logo-header.png') }}">
                                </a>
                                <ul class="navbar-nav m-auto justify-content-center">
                                    <li class="nav-item">
                                        <center>
                                            <h4 class="nom_module">
                                                <strong>
                                                    Trouver la filière qui me correspond
                                                </strong>
                                            </h4>
                                        </center>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div id="marge_menu"></div>

            <div class="content">

                
                <!-- MultiStep Form -->
                <div class="container-fluid" id="grad1" >
                    <div class=" row justify-content-center">
                        <div class="col-11 col-sm-9 col-md-7 col-lg-6 text-center p-0 mt-2">

                            <div class="shadow-sm card px-0 pt-4 pb-0">

                                <div class="row">
                                    <!-- progressbar -->
                                    <ul id="progressbar">
                                        <li  class="active" id="confirm"><strong>1</strong></li>
                                        <li id="confirm"><strong>2</strong></li>
                                        <li id="confirm"><strong>3</strong></li>
                                        <li id="confirm"><strong>4</strong></li>
                                        <li id="confirm"><strong>5</strong></li>
                                        <li id="confirm"><strong>6</strong></li>
                                        <li id="confirm"><strong>7</strong></li>
                                        <li id="confirm"><strong>8</strong></li>
                                        <li id="confirm"><strong>9</strong></li>
                                    </ul>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mx-0">
                                        <form name="form_q" id="msform" action="/get_result" methode="post">
                                        @csrf
                                            <!-- page 1 -->
                                            <fieldset>
                                                <div class="form-card">
                                                    <h5 class="card-title">
                                                        Dans mon temps libre, j'aime aider ma famille:
                                                    </h5>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input  type="checkbox" id="customRadio1" name="question1[]" value="1" class="question1 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio1">
                                                            Au Fa'apu
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input  type="checkbox" id="customRadio2" name="question1[]" value="2" class="question1 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio2">
                                                            A bricoler dans la maison
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input  type="checkbox" id="customRadio3" name="question1[]" value="3" class="question1 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio3">
                                                            A garder mes petits frères/soeurs
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input  type="checkbox" id="customRadio4" name="question1[]" value="4" class="question1 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio4">
                                                            A cuisiner
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input  type="checkbox" id="customRadio5" name="question1[]" value="5" class="question1 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio5">
                                                            A pêcher
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input  type="checkbox" id="customRadio6" name="question1[]" value="6" class="question1 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio6">
                                                            A réparer la voiture
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input  type="checkbox" id="customRadio7" name="question1[]" value="7" class="question1 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio7">
                                                            A utiliser Word/Excel sur l'ordi
                                                        </label>
                                                    </div>
                                                </div> 
                                                <input type="button" name="next" class="next action-button" value="Suivant" />
                                            </fieldset>

                                            <!-- page 2 -->
                                            <fieldset>
                                                <div class="form-card">

                                                    <h5 class="card-title">
                                                        Tes amis disent souvent de toi que:
                                                    </h5>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio8" name="question2[]" value="6" class="question2 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio8">
                                                            Tu ne te laisses jamais déconcentrer
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio9" name="question2[]" value="7" class="question2 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio9">
                                                            Tu es bien organisé
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio10" name="question2[]" value="2" class="question2 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio10">
                                                            Tu es toujours curieux
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio11" name="question2[]" value="34" class="question2 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio11">
                                                            Tu es très généreux
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio12" name="question2[]" value="15"class="question2 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio12">
                                                            Tu es vraiment infatigable
                                                        </label>
                                                    </div>

                                                </div> 
                                                <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
                                                <input type="button" name="next" class="next action-button" value="Suivant" />
                                            </fieldset>

                                            <!-- page 3 -->
                                            <fieldset>
                                                <div class="form-card">
                                                    <h5 class="card-title">
                                                        Où te sens-tu le plus à l'aise ?
                                                    </h5>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio13" name="question3[]" value="1" class="question3 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio13">
                                                            A la montagne, dans la forêt
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio14" name="question3[]" value="2" class="question3 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio14">
                                                            A l'atelier
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio15" name="question3[]" value="3" class="question3 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio15">
                                                            Au marché quand il y a beaucoup de monde
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio16" name="question3[]" value="4" class="question3 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio16">
                                                            A table
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio17" name="question3[]" value="5" class="question3 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio17">
                                                            Sur l'eau
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio18" name="question3[]" value="6" class="question3 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio18">
                                                            Sur la route au volant d'un véhicule
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio19" name="question3[]" value="7" class="question3 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio19">
                                                            Derrière un ordi
                                                        </label>
                                                    </div>
                                                </div> 
                                                <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
                                                <input type="button" name="next" class="next action-button" value="Suivant" />
                                            </fieldset>

                                            <!-- page 4 -->
                                            <fieldset>
                                                <div class="form-card">
                                                    <h5 class="card-title">
                                                        Qu'est-ce qui te dérange le plus ?
                                                    </h5>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio20" name="question4[]" value="15" class="question4 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio20">
                                                            Des sacs plastique abandonnés sur la plage
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio21" name="question4[]" value="7" class="question4 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio21">
                                                            Un dossier mal trié
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio22" name="question4[]" value="4" class="question4 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio22">
                                                            Une salle de bain sale
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio23" name="question4[]" value="62" class="question4 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio23">
                                                            Un piéton qui traverse sans regarder
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio24" name="question4[]" value="3" class="question4 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio24">
                                                            Voir une personne handicapée sans que personne ne l'aide
                                                        </label>
                                                    </div>
                                                </div> 
                                                <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
                                                <input type="button" name="next" class="next action-button" value="Suivant" />
                                            </fieldset>

                                            <!-- page 5 -->
                                            <fieldset>
                                                <div class="form-card">
                                                    <h5 class="card-title">
                                                        Un monde idéal pour toi c'est:
                                                    </h5>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio25" name="question5[]" value="1" class="question5 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio25">
                                                            Un monde sans pollution
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio26" name="question5[]" value="3" class="question5 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio26">
                                                            Un monde sans pauvreté
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio27" name="question5[]" value="4" class="question5 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio27">
                                                            Un monde sans famine
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio28" name="question5[]" value="27" class="question5 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio28">
                                                            Un monde où les robots aident les humains
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio29" name="question5[]" value="56" class="question5 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio29">
                                                            Un monde où l'on peut voyager dans l'espace
                                                        </label>
                                                    </div>
                                                </div> 
                                                <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
                                                <input type="button" name="next" class="next action-button" value="Suivant" />
                                            </fieldset>

                                            <!-- page 6 -->
                                            <fieldset>
                                                <div class="form-card">
                                                    <h5 class="card-title">
                                                        Quel cadeau faut-il t'offrir pour te faire plaisir ?
                                                    </h5>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio30" name="question6[]" value="7" class="question6 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio30">
                                                            Le nouvel Iphone
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio31" name="question6[]" value="56" class="question6 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio31">
                                                            Un jet ski
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio32" name="question6[]" value="34" class="question6 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio32">
                                                            Un bon repas avec des potes
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio33" name="question6[]" value="1" class="question6 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio33">
                                                            Une maison avec un grand jardin
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio34" name="question6[]" value="2" class="question6 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio34">
                                                            Une nouvelle boîte à outils
                                                        </label>
                                                    </div>
                                                </div> 
                                                <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
                                                <input type="button" name="next" class="next action-button" value="Suivant" />
                                            </fieldset>

                                            <!-- page 7 -->
                                            <fieldset>
                                                <div class="form-card">
                                                    <h5 class="card-title">
                                                        Si tu pouvais choisir un super pouvoir, ce serait:
                                                    </h5>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio35" name="question7[]" value="12" class="question7 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio35">
                                                            Une force surhumaine
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio36" name="question7[]" value="5" class="question7 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio36">
                                                            Vivre sous l'eau
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio37" name="question7[]" value="34" class="question7 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio37">
                                                            Rendre les gens heureux
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio38" name="question7[]" value="67" class="question7 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio38">
                                                            Se téléporter
                                                        </label>
                                                    </div>
                                                </div> 
                                                <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
                                                <input type="button" name="next" class="next action-button" value="Suivant" />
                                            </fieldset>


                                            <!-- page 8 -->
                                            <fieldset>
                                                <div class="form-card">
                                                    <h5 class="card-title">
                                                        Dans mon travail, je veux:
                                                    </h5>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio39" name="question8[]" value="1" class="question8 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio39">
                                                            Être en plein air
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio40" name="question8[]" value="3" class="question8 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio40">
                                                            Faire de nouvelles rencontres
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio41" name="question8[]" value="7" class="question8 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio41">
                                                            Utiliser les nouvelles technologies
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio42" name="question8[]" value="4" class="question8 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio42">
                                                            Travailler en équipe
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio43" name="question8[]" value="5" class="question8 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio43">
                                                            Découvrir de nouveaux endroits
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio44" name="question8[]" value="26" class="question8 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio44">
                                                            Comprendre le fonctionnement de machines
                                                        </label>
                                                    </div>
                                                </div> 
                                                <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
                                                <input type="button" name="next" class="next action-button" value="Suivant" />
                                            </fieldset>

                                            <!-- page 9 -->
                                            <fieldset>
                                                <div class="form-card">
                                                    <h5 class="card-title">
                                                        Ton outil de travail favori, c'est:
                                                    </h5>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio45" name="question9[]" value="7" class="question9 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio45">
                                                            Un ordi
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio46" name="question9[]" value="1" class="question9 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio46">
                                                            Une machette
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio47" name="question9[]" value="5" class="question9 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio47">
                                                            Une canne à pêche
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio48" name="question9[]" value="4" class="question9 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio48">
                                                            Une poêle
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio49" name="question9[]" value="2" class="question9 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio49">
                                                            Un tournevis
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio50" name="question9[]" value="6" class="question9 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio50">
                                                            Un poids lourd
                                                        </label>
                                                    </div>
                                                    <div class="mb-2 custom-control custom-radio">
                                                        <input type="checkbox" id="customRadio51" name="question9[]" value="3" class="question9 custom-control-input">
                                                        <label class="custom-control-label" for="customRadio51">
                                                            Aucun, j'ai la tchatche
                                                        </label>
                                                    </div>
                                                </div> 
                                                <input type="button" name="previous" class="previous action-button-previous" value="Précédent" />
                                                <input type="submit" class="next action-button" value="Valider" />
                                            </fieldset>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                var current_fs, next_fs, previous_fs; //fieldsets
                var opacity;

                var i1 = 0;
                var i2 = 0;
                var i3 = 0;
                var i4 = 0;
                var i5 = 0;
                var i6 = 0;
                var i7 = 0;
                var i8 = 0;
                var i9 = 0;

                $('.question1').click(function () {
                    var q1 = [];
                    
                    // Je récupere ma liste de réponse / Question
                    $('.question1:checked').each(function () {
                        q1[i1++] = $(this).val();
                    });     

                    if(q1.length <= 3){
                        //Chechbox clicked
                    } else {
                        alert('2 réponses max par question !')
                        
                        if ($('.question1').is(':checked')) {
                            console.log('Je désactive checked');
                            $('.question1').attr("checked", false);
                        }
                    }
                    
                });

                
                $('.question2').click(function () {
                    var q2 = [];

                    // Je récupere ma liste de réponse / Question
                    $('.question2:checked').each(function () {
                        q2[i2++] = $(this).val();
                    });     

                    if(q2.length <= 3){
                        //Chechbox clicked
                    } else {
                        alert('2 réponses max par question !')
                        
                        if ($('.question2').is(':checked')) {
                            $('.question1').attr("checked", false);
                        }
                    }
                    
                });


                $('.question3').click(function () {
                    var q3 = [];

                    // Je récupere ma liste de réponse / Question
                    $('.question3:checked').each(function () {
                        q3[i3++] = $(this).val();
                    });     

                    if(q3.length <= 3){
                        //Chechbox clicked
                    } else {
                        alert('2 réponses max par question !')
                        
                        if ($('.question3').is(':checked')) {
                            $('.question3').attr("checked", false);
                        }
                    }
                    
                });


                $('.question4').click(function () {
                    var q4 = [];

                    // Je récupere ma liste de réponse / Question
                    $('.question4:checked').each(function () {
                        q4[i4++] = $(this).val();
                    });     

                    if(q4.length <= 3){
                        //Chechbox clicked
                    } else {
                        alert('2 réponses max par question !')
                        
                        if ($('.question4').is(':checked')) {
                            $('.question4').attr("checked", false);
                        }
                    }
                    
                });


                $('.question5').click(function () {
                    var q5 = [];

                    // Je récupere ma liste de réponse / Question
                    $('.question5:checked').each(function () {
                        q5[i5++] = $(this).val();
                    });     

                    if(q5.length <= 3){
                        //Chechbox clicked
                    } else {
                        alert('2 réponses max par question !')
                        
                        if ($('.question5').is(':checked')) {
                            $('.question1').attr("checked", false);
                        }
                    }
                    
                });


                $('.question6').click(function () {
                    var q6 = [];

                    // Je récupere ma liste de réponse / Question
                    $('.question6:checked').each(function () {
                        q6[i6++] = $(this).val();
                    });     

                    if(q6.length <= 3){
                        //Chechbox clicked
                    } else {
                        alert('2 réponses max par question !')
                        
                        if ($('.question6').is(':checked')) {
                            $('.question6').attr("checked", false);
                        }
                    }
                    
                });


                $('.question7').click(function () {
                    var q7 = [];

                    // Je récupere ma liste de réponse / Question
                    $('.question2:checked').each(function () {
                        q7[i7++] = $(this).val();
                    });     

                    if(q7.length <= 3){
                        //Chechbox clicked
                    } else {
                        alert('2 réponses max par question !')
                        
                        if ($('.question7').is(':checked')) {
                            $('.question1').attr("checked", false);
                        }
                    }
                    
                });


                $('.question8').click(function () {
                    var q8 = [];

                    // Je récupere ma liste de réponse / Question
                    $('.question2:checked').each(function () {
                        q8[i8++] = $(this).val();
                    });     

                    if(q8.length <= 3){
                        //Chechbox clicked
                    } else {
                        alert('2 réponses max par question !')
                        
                        if ($('.question2').is(':checked')) {
                            $('.question1').attr("checked", false);
                        }
                    }
                    
                });


                $('.question9').click(function () {
                    var q9 = [];

                    // Je récupere ma liste de réponse / Question
                    $('.question2:checked').each(function () {
                        q9[i9++] = $(this).val();
                    });     

                    if(q9.length <= 3){
                        //Chechbox clicked
                    } else {
                        alert('2 réponses max par question !')
                        
                        if ($('.question2').is(':checked')) {
                            $('.question1').attr("checked", false);
                        }
                    }
                    
                });



                $(".next").click(function(){

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                'display': 'none',
                'position': 'relative'
                });
                next_fs.css({'opacity': opacity});
                },
                duration: 600
                });
                });

                $(".previous").click(function(){

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                step: function(now) {
                // for making fielset appear animation
                opacity = 1 - now;

                current_fs.css({
                'display': 'none',
                'position': 'relative'
                });
                previous_fs.css({'opacity': opacity});
                },
                duration: 600
                });
                });

                $('.radio-group .radio').click(function(){
                $(this).parent().find('.radio').removeClass('selected');
                $(this).addClass('selected');
                });

                $(".submit").click(function(){
                return false;
                })

            });

            // exemple checkbox limited
            // function chkcontrol(j) {
            //     var total=0;
            //     for(var i=0; i < document.form1.ckb.length; i++){
                    
            //         if(document.form1.ckb[i].checked){
            //             total =total +1;
            //         }
                    
            //         if(total > 3){
            //             alert("Please Select only three") 
            //             document.form1.ckb[j].checked = false ;
            //             return false;
            //         }
            //     }
            // }
            // Q1 checkbox limited
            // function chkcontrol_1q(j) {
            //     var total=0;
            //     for(var i=0; i < j.length; ++i){

            //         if(j.length > 1){
            //             // document.form_q.question1[i].checked = false ;
            //             alert("2 réponse maximum par question"); 
            //             return false;
            //         }
            //     }

            // }


        </script>
        
        <!-- <script src="{{ asset('js/jquery.min.js') }}"></script> -->
        <!-- <script >
            $(document).ready(function(){
                //Mon code Jquery ICI
            });
            

        </script> -->
    </body>
</html>
