<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultat-orientation-</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="css/template.css" rel="stylesheet">
    <style>

        *{
            /* border: solid black 1px; */
        }


        .card-footer{
            max-height: 40px;
        }

        .show_all_filiere .row .col-md-3 .card{
            border-radius: 10px 10px 10px 10px;
        }

        .all_filiere{
            display: none;
            color: white;
        }

        #rond_vehicule{
            width: 10px;
            height: 10px;
            background-color: #ff0000;
            border-radius: 50%;

        }
        #rond_cuisto{
            width: 10px;
            height: 10px;
            background-color: #eb45e2;
            border-radius: 50%;

        }
        #rond_administration{
            width: 10px;
            height: 10px;
            background-color: #4845fa;
            border-radius: 50%;

        }
        #rond_ocean{
            width: 10px;
            height: 10px;
            background-color: #40d5d5;
            border-radius: 50%;

        }
        #rond_terre{
            width: 10px;
            height: 10px;
            background-color: #63d540;
            border-radius: 50%;

        }
        #rond_bricoleur{
            width: 10px;
            height: 10px;
            background-color: #fade42;
            border-radius: 50%;

        }
        #rond_humain{
            width: 10px;
            height: 10px;
            background-color: #f14e4e;
            border-radius: 50%;

        }

        .p_card{
            max-height: 90px;
        }
    
        .counter {
            background-color:#f5f5f5;
            /* padding: 20px 0; */
            border-radius: 5px;
            max-height: 36px;
        }

        .count-title {
            font-size: 15px;
            font-weight: bold;
            /* margin-top: 10px; */
            margin-bottom: 0;
            text-align: center;
        }

        .count-text {
            font-size: 13px;
            font-weight: normal;
            /* margin-top: 10px; */
            margin-bottom: 0;
            text-align: center;
        }

        .fa-2x {
            /* margin: 0 auto; */
            float: none;
            display: table;
            color: #4ad1e5;
        }

        .nom_module{
            /* color:  #FFA400; */
            color:  white;
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
                                    <h4 class="all_filiere">
                                        <strong>
                                            Toutes les filières
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

    <div id="marge_menu">
    </div>
    
    <main role="main">
        <div class="container-fluid">
            <div class="result_filiere row mt-5 d-flex justify-content-around">
                
                <!-- coté gauche - filières -->
                <div class="col-sm-6">
                
    
                    <!-- list result -->
                    @foreach($result as $categorie => $res)
    
                        <!-- loop first $result -->
                        <!-- j'affiche uniquement 1er element de ma list -->
                        @if($loop->first)
    
                            <!-- list categorie => filiere -->
                            @foreach($fillieres as $key => $value)
    
                                @foreach($value as $_categorie => $val)
                                    
                                    <!-- loop first $value -->
                                    @if($loop->first)
    
                                        <!-- Si $result->categorie égale list categorie -->
                                        @if($categorie == $_categorie)
                                            <!-- affiché -->
                                            

                                            @foreach($val as $k => $v)
                                                
                                                <!-- Affichage phrase -->
                                                @if($loop->first)
                                                    <div class="row d-flex justify-content-around">

                                                        @foreach($val[0] as $p)
                                                                <div class="result_text col-md-12">
                                                                <br>
                                                                <br>
                                                                    <div class="card shadow-sm">
                                                                        <div class="card p-1">
                                                                            <center>
                                                                                <h2>
                                                                                    <strong>
                                                                                        {{ $p }}
                                                                                    </strong>
                                                                                </h2>
                                                                            </center>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                        @endforeach
                                                    </div>
                                                @endif
    
                                                <!-- affichage liste filières spécialiser -->
                                                @if($loop->last)
                                                    <br>
                                                        <div class="row d-flex justify-content-around">
                                                            <div class="col-md-12">
                                                                <!-- spécialités filières -->
                                                                <div class=" card shadow-sm">
                                                                    <center>
                                                                        <br>
                                                                        <strong style="color: #707070;">
                                                                            <b>
                                                                                Les filières qui te correspondent sont :
                                                                            </b>
                                                                        </strong>
                                                                    </center>
                                                                    <div class="card-body">
                                                                        <center>
                                                                            <div class="row d-flex justify-content-center">
                                                                                @foreach($val[1] as $f)
                                                                                    @foreach($f as $nom_filliere => $lien)
                                                                                        <div class="col-md-6 mb-2">
                                                                                            <!-- lien vers filières -->
                                                                                            <a href="{{ $lien }}" target="_blank">
                                                                                            <div class="card shadow">
                                                                                                <div class="card-body">
                                                                                                    <center>
                                                                                                        <strong>
                                                                                                            <!-- Nom Filiere -->
                                                                                                            {{ $nom_filliere }}
                                                                                                            </strong>
                                                                                                        </center>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </a>
                                                                                        </div>
                                                                                    @endforeach
                                                                                @endforeach
                                                                            </div>
                                                                        </center>
                                                                        <br>
                                                                    </div>
                                                                    <div id="all_filiere" class="mb-2">
                                                                        <center>
                                                                            <!-- Large modal -->
                                                                            <button style="height: 40px; font-size: 16px;" type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target=".bd-example-modal-lg">
                                                                                Voir toutes les filières
                                                                            </button>
                                                                        </center>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                @endif
                                            @endforeach
    
                                        @endif
    
    
                                    @endif
    
                                @endforeach
    
                            @endforeach
    
                        @endif
    
                        
                    @endforeach
    
    
    
                </div>

                <!-- coté droit - camember -->
                <div class="col-sm-6">
                    
                    <!-- camember -->
                    <div class="titre_percent row d-flex justify-content-center">
                        <br>
                        <br>
                        <div class="col-md-6">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row mx-d-flex mx-auto justify-content-around">
                                <div class="col-md-12">
                                    <div class="row">
                                        @foreach($p_result as $_cat => $percent)
                                            @if($_cat == 'vehicule')
                                                <!-- vehicule -->
                                                
                                                    <input type="hidden" data-val_percent="{{ $percent }}"class="percent_vehicule timer count-title count-number" data-to="{{ $percent }}" data-speed="1500"/>  
                                                                                                                                    
                                            @elseif($_cat == 'administration')
                                                <!-- administration -->
                                                
                                                    <input type="hidden" data-val_percent="{{ $percent }}"class="percent_administration timer count-title count-number" data-to="{{ $percent }}" data-speed="1500"/> 
                                                
                                            @elseif($_cat == 'cuisto')
                                                <!-- cuisto -->
                                                
                                                    
                                                    <input type="hidden" data-val_percent="{{ $percent }}"class="percent_cuisto timer count-title count-number" data-to="{{ $percent }}" data-speed="1500"/>  
                                                    
                                                
                                            @elseif($_cat == 'ocean')
                                                <!-- ocean -->
                                                
                                                    
                                                    <input type="hidden" data-val_percent="{{ $percent }}"class="percent_ocean timer count-title count-number" data-to="{{ $percent }}" data-speed="1500"/>  
                                                    
                                                
                                            @elseif($_cat == 'terre')
                                                <!-- terre -->
                                                
                                                    <input type="hidden" data-val_percent="{{ $percent }}"class="percent_terre timer count-title count-number" data-to="{{ $percent }}" data-speed="1500"/> 
                                                
                                            @elseif($_cat == 'bricoleur')
                                                <!-- bricoleur -->
                                                
                                                    
                                                    <input type="hidden" data-val_percent="{{ $percent }}"class="percent_bricoleur timer count-title count-number" data-to="{{ $percent }}" data-speed="1500"/> 
                                                    
                                                
                                            @elseif($_cat == 'humain')
                                                <!-- humain -->
                                                
                                                    
                                                    <input type="hidden" data-val_percent="{{ $percent }}"class="percent_humain timer count-title count-number" data-to="{{ $percent }}" data-speed="1500"/>  
                                                    
                                                
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <!-- camember graphique -->
                            <div class="row">

                                    <!-- <div id="box_donut"> -->
                                        <canvas id="donut" width="400" height="250">
                                        </canvas>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                

                </div>


                <br>
            
            </div>

        </div>



        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                
                    <!-- toutes les filières -->
                    <div class="shadow-sm">
                        <!-- bouton affiché spécialiter -->
                        <div class="specialized">
                            <center>
                                <button class="btn btn-outline-secondary mt-2" data-dismiss="modal" style="height: 40px; font-size: 16px;">
                                    Fermer
                                </button>
                            </center>
                        </div>
                        <!-- AFFICHAGE ALL FILIERE -->
                        <div class="row p-2">
                            <!-- cuisine -->
                            <div class="col-md-4 mb-3">
                                <div class="card shadow">
                                    <div class="card-title title_cat_grey pt-2 m-2 shadow-sm">
                                        <center>
                                            <h6>
                                                <b>
                                                Cuisine
                                                </b>
                                            </h6>
                                        </center>
                                    </div>
                                    <a href="https://www.rsma.pf/formation/nos-fillieres/agent-polyvalent-de-restauration.html" target="_blank"> 
                                        <div class="card-body">
                                            <center>
                                                <strong>

                                                    <!-- lien externe -->
                                                    <!-- filiere -->
                                                    Agent Polyvalent de Restauration (APR)
                                                    
                                                </strong>
                                            </center>
                                        </div>
                                    </a>
                                    <a href="https://www.rsma.pf/formation/nos-fillieres/agent-de-restauration.html" target="_blank"> 
                                        <div class="card-body">
                                            <center>
                                                <strong>

                                                    <!-- lien externe -->
                                                    <!-- filiere -->
                                                    Agent de Restauration (ADR)
                                                    
                                                </strong>
                                            </center>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <!-- terre -->
                            <div class="col-md-4 mb-3">
                                <div class="card shadow">
                                    <div class="card-title title_cat_grey pt-2 m-2 shadow-sm">
                                        <center>
                                            <h6 ">
                                                <b>
                                                Terre
                                                </b>
                                            </h6>
                                        </center>
                                    </div>
                                    <a href="https://www.rsma.pf/formation/nos-fillieres/maraicher-horticulteur.html" target="_blank"> 
                                        <div class="card-body">
                                            <center>
                                                <strong>

                                                    <!-- lien externe -->
                                                    <!-- filiere -->
                                                    Maraîcher Horticulteur (MHR)
                                                    
                                                </strong>
                                            </center>
                                        </div>
                                    </a>
                                    <a href="https://www.rsma.pf/formation/nos-fillieres/espaces-verts.html" target="_blank"> 
                                        <div class="card-body">
                                            <center>
                                                <strong>

                                                    <!-- lien externe -->
                                                    <!-- filiere -->
                                                    Agent d'entretien des espaces verts (AAEV)
                                                    
                                                </strong>
                                            </center>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <!-- ocean -->
                            <div class="col-md-4 mb-3">
                                <div class="card shadow">
                                    <div class="card-title title_cat_grey pt-2 m-2 shadow-sm">
                                        <center>
                                            <h6 ">
                                                <b>
                                                    Ocean
                                                </b>
                                            </h6>
                                        </center>
                                    </div>
                                    <a href="https://www.rsma.pf/formation/nos-fillieres/patron-lagonnaire.html" target="_blank"> 
                                        <div class="card-body">
                                            <center>
                                                <strong>

                                                    <!-- lien externe -->
                                                    <!-- filiere -->
                                                    Pilote Lagonaire (PLGN)
                                                    
                                                </strong>
                                            </center>
                                        </div>
                                    </a>
                                    <a href="https://www.rsma.pf/formation/nos-fillieres/matelot.html" target="_blank"> 
                                        <div class="card-body">
                                            <center>
                                                <strong>

                                                    <!-- lien externe -->
                                                    <!-- filiere -->
                                                    Métiers de la mer (Matelot)
                                                    
                                                </strong>
                                            </center>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <!-- administration -->
                            <div class="col-md-4 mb-3">
                                <div class="card shadow">
                                    <div class="card-title title_cat_grey pt-2 m-2 shadow-sm">
                                        <center>
                                            <h6 ">
                                                <b>
                                                Administration
                                                </b>
                                            </h6>
                                        </center>
                                    </div>
                                    <a href="https://www.rsma.pf/formation/nos-fillieres/agent-administratif.html" target="_blank"> 
                                        <div class="card-body">
                                            <center>
                                                <strong>

                                                <!-- lien externe -->
                                                    <!-- filiere -->
                                                    Agent administratif (AAD)
                                                    
                                                </strong>
                                            </center>
                                        </div>
                                    </a>
                                    <a href="https://www.rsma.pf/" target="_blank"> 
                                        <div class="card-body">
                                            <center>
                                                <strong>
                                                    <!-- filiere -->
                                                    Remob
                                                </strong>
                                            </center>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <!-- contact humain -->
                            <div class="col-md-4 mb-3">
                                <div class="card shadow">
                                    <div class="card-title title_cat_grey pt-2 m-2 shadow-sm">
                                        <center>
                                            <h6 >
                                                <b>
                                                Tourisme et service aux particuliers
                                                </b>
                                            </h6>
                                        </center>
                                    </div>

                                    <a href="https://www.rsma.pf/formation/nos-fillieres/agent-d-accueil-touristique.html" target="_blank"> 
                                        <div class="card-body">
                                            <center>
                                                <strong>

                                                <!-- lien externe -->
                                                    <!-- filiere -->
                                                    Métiers de l'acceuil du Tourisme et de l'hôtellerie (MATH)
                                                    
                                                </strong>
                                            </center>
                                        </div>
                                    </a>
                                    <a href="https://www.rsma.pf/formation/nos-fillieres/aide-a-la-personne.html" target="_blank"> 
                                        <div class="card-body">
                                            <center>
                                                <strong>

                                                <!-- lien externe -->
                                                    <!-- filiere -->
                                                    Aide à la petite enfance (APE)
                                                    
                                                </strong>
                                            </center>
                                        </div>
                                    </a>
                                    <a href="https://www.rsma.pf/formation/nos-fillieres/agent-de-prevention-et-de-securite.html" target="_blank"> 
                                        <div class="card-body">
                                            <center>
                                                <strong>

                                                <!-- lien externe -->
                                                    <!-- filiere -->
                                                    Agent de Prévention et de Sécurité (APS)
                                                    
                                                </strong>
                                            </center>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <!-- vehicule -->
                            <div class="col-md-4 mb-3">
                                <div class="card shadow">
                                    <div class="card-title title_cat_grey pt-2 m-2 shadow-sm">
                                        <center>
                                            <h6>
                                                <b>
                                                Véhicules
                                                </b>
                                            </h6>
                                        </center>
                                    </div>
                                    <!-- lien agent plyvalent mécanique -->
                                    <a href="https://www.rsma.pf/formation/nos-fillieres/polyvalent-mecanique.html" target="_blank"> 
                                        <div class="card-body">
                                            <center>
                                                <strong>
                                                    <!-- Nom Filiere -->
                                                    Agent polyvalent mécanique (PMEC)
                                                    
                                                </strong>
                                            </center>
                                        </div>
                                    </a>
                                    <!-- lien conducteur d'engins de travaux public -->
                                    <a href="https://www.rsma.pf/formation/nos-fillieres/conducteur-d-engins-travaux-publics.html" target="_blank"> 
                                        <div class="card-body">
                                            <center>
                                                <strong>

                                                    <!-- nom filiere -->
                                                    Conducteur d'Engins de Travaux Public (CETP)
                                                    
                                                </strong>
                                            </center>
                                        </div>
                                    </a>
                                    <!-- lien conducteur tous transport -->
                                    <a href="https://www.rsma.pf/formation/nos-fillieres/conducteur-tous-transports.html" target="_blank"> 
                                        <div class="card-body">
                                            <center>
                                                <strong>

                                                <!-- lien externe -->
                                                    <!-- nom filiere -->
                                                    Conducteur tous transports (CTR)
                                                    
                                                </strong>
                                            </center>
                                        </div>
                                    </a>
                                    <!-- lien magasinier -->
                                    <a href="https://www.rsma.pf/formation/nos-fillieres/magasinier.html" target="_blank"> 
                                        <div class="card-body">
                                            <center>
                                                <strong>

                                                    <!-- nom filiere -->
                                                    Magasinier (AMA)
                                                    
                                                </strong>
                                            </center>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <br>
                            <!-- bricoleur -->
                            <div class="col-md-12 mb-3">
                                <div class="card shadow">
                                    <div class="card-title title_cat_grey pt-2 m-2 shadow-sm">
                                        <center>
                                            <h6 >
                                                <b>
                                                Bricoleur
                                                </b>
                                            </h6>
                                        </center>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- lien agent d'entretien du batiment -->
                                            <a href="https://www.rsma.pf/formation/nos-fillieres/agent-d-entretien-du-batiment.html" target="_blank"> 
                                                <div class="card-body">
                                                    <center>
                                                        <strong>

                                                            <!-- nom filiere -->
                                                            Agent d'entretien du bâtiment (AEB)
                                                            
                                                        </strong>
                                                    </center>
                                                </div>
                                            </a>
                                        
                                        </div>
                                        <div class="col-md-6">
                                            <!-- lien monteur dépanneur en froid et climatisation -->
                                            <a href="https://www.rsma.pf/formation/nos-fillieres/monteur-depanneur-en-froid-et-climatisation.html" target="_blank"> 
                                                <div class="card-body">
                                                    <center>
                                                        <strong>

                                                            <!-- nom filiere -->
                                                            Monteur Dépanneur en Froid et Climatisation (MDFC)
                                                            
                                                        </strong>
                                                    </center>
                                                </div>
                                            </a>
                                        
                                        </div>
                                        <div class="col-md-6">
                                            <!-- lien plaquiste peinture -->
                                            <a href="https://www.rsma.pf/formation/nos-fillieres/plaquiste.html" target="_blank"> 
                                                <div class="card-body">
                                                    <center>
                                                        <strong>

                                                            <!-- nom filiere -->
                                                            Plaquiste/Peintre
                                                            
                                                        </strong>
                                                    </center>
                                                </div>
                                            </a>
                                        
                                        </div>
                                        <div class="col-md-6">
                                            <!-- lien soudeur -->
                                            <a href="https://www.rsma.pf/formation/nos-fillieres/soudeur.html" target="_blank"> 
                                                <div class="card-body">
                                                    <center>
                                                        <strong>

                                                            <!-- nom filiere -->
                                                            Soudeur
                                                            
                                                        </strong>
                                                    </center>
                                                </div>
                                            </a>
                                        
                                        </div>
                                        <div class="col-md-6">
                                            <!-- lien Electricien -->
                                            <a href="https://www.rsma.pf" target="_blank"> 
                                                <div class="card-body">
                                                    <center>
                                                        <strong>

                                                            <!-- nom filiere -->
                                                            Electricien des bâtiments
                                                            
                                                        </strong>
                                                    </center>
                                                </div>
                                            </a>
                                        
                                        </div>
                                        <div class="col-md-6">
                                            <!-- lien Installateur sanitaire / plombier -->
                                            <a href="https://www.rsma.pf" target="_blank"> 
                                                <div class="card-body">
                                                    <center>
                                                        <strong>

                                                            <!-- nom filiere -->
                                                            Installateur sanitaire/plombier
                                                            
                                                        </strong>
                                                    </center>
                                                </div>
                                            </a>
                                        
                                        </div>
                                        <div class="col-md-6">
                                            <!-- lien Macon / Carreleur -->
                                            <a href="https://www.rsma.pf" target="_blank"> 
                                                <div class="card-body">
                                                    <center>
                                                        <strong>

                                                            <!-- nom filiere -->
                                                            Maçon/Carreleur
                                                            
                                                        </strong>
                                                    </center>
                                                </div>
                                            </a>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js" crossorigin="anonymous"></script>        
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="dist/Chart.bundle.js "></script>
    <script src="dist/Chart.js "></script>
    <script language="javascript">
        $(document).ready(function(){

            

            var percent_vehicule = $('.percent_vehicule').data('val_percent');
            var percent_bricoleur = $('.percent_bricoleur').data('val_percent');
            var percent_cuisto = $('.percent_cuisto').data('val_percent');
            var percent_administration = $('.percent_administration').data('val_percent');
            var percent_ocean = $('.percent_ocean').data('val_percent');
            var percent_terre = $('.percent_terre').data('val_percent');
            var percent_humain = $('.percent_humain').data('val_percent');
            
            percent_vehicule = Math.round(percent_vehicule);
            percent_bricoleur = Math.round(percent_bricoleur);
            percent_administration = Math.round(percent_administration);
            percent_cuisto = Math.round(percent_cuisto);
            percent_ocean = Math.round(percent_ocean);
            percent_terre = Math.round(percent_terre);
            percent_humain = Math.round(percent_humain);
            
            var ctx_donut = document.getElementById('donut').getContext('2d');


            var myChart_donut = new Chart(ctx_donut, {
                type: 'doughnut',
                data: {
                    labels: ['Véhicules'+' '+percent_vehicule+'%', 'Administration'+' '+percent_administration+'%', 'Cuisine'+' '+percent_cuisto+'%', 'Océan'+' '+percent_ocean+'%', 'Terre'+' '+percent_terre+'%', 'Bricoleur'+' '+percent_bricoleur+'%', 'Tourisme et service aux particuliers'+' '+percent_humain+'%'],
                    datasets: [{
                        label: ['Votes','# test'],
                        data: [percent_vehicule, 
                            percent_administration, 
                            percent_cuisto, 
                            percent_ocean, 
                            percent_terre, 
                            percent_bricoleur,
                            percent_humain],
                        backgroundColor: [
                            'rgba(255, 0, 0, 0.651)',
                            'rgba(72, 69, 250, 0.678)',
                            'rgba(235, 69, 227, 0.699)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(99, 213, 64, 0.705)',
                            'rgba(250, 222, 66, 0.714)',
                            'rgba(255, 145, 0, 0.692)'
                        ],
                        borderColor: [
                            'rgba(255, 0, 0, 0.651)',
                            'rgba(72, 69, 250, 0.678)',
                            'rgba(235, 69, 227, 0.699)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(99, 213, 64, 0.705)',
                            'rgba(250, 222, 66, 0.714)',
                            'rgba(255, 145, 0, 0.692)'
                        ],
                        borderWidth: 1
                    }]
                },      
                options: {
                    title: {
                        display: true,
                        text: "Tes centres d'intérêt",
                        padding: 10,
                        fontSize: 20,
                    }
                }
            });

        });


    </script>

</body>

</html>
