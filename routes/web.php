<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/get_result', function (Request $request) {

    $fillieres = [
                    "categorie" => [
                                    "terre" => [    
                                                    [
                                                        "Tu aimes la nature, travailler la terre"
                                                    ]
                                                    ,[
                                                        ["Maraîcher Horticulteur (MHR)" => "https://www.rsma.pf/formation/nos-fillieres/maraicher-horticulteur.html"]
                                                        ,["Agent d'entretien des espaces verts (AAEV)" => "https://www.rsma.pf/formation/nos-fillieres/espaces-verts.html"]
                                                    ]
                                                ]
                                    ]
                                    ,["bricoleur" => [
                                                        [
                                                            "Tu es un bricoleur"
                                                        ]
                                                        ,[
                                                            ["Agent d'entretien du bâtiment (AEB)"=>"https://www.rsma.pf/formation/nos-fillieres/agent-d-entretien-du-batiment.html"]
                                                            ,["Monteur Dépanneur en Froid et Climatisation (MDFC)"=>"https://www.rsma.pf/formation/nos-fillieres/monteur-depanneur-en-froid-et-climatisation.html"]
                                                            ,["Plaquiste/Peintre"=>"https://www.rsma.pf/formation/nos-fillieres/plaquiste.html"]
                                                            ,["Soudeur"=>"https://www.rsma.pf/formation/nos-fillieres/soudeur.html"]            
                                                            ,["Electricien des bâtiments"=>"https://www.rsma.pf"]            
                                                            ,["Installateur sanitaire/Plombier"=>"https://www.rsma.pf"]            
                                                            ,["Maçon/Carreleur"=>"https://www.rsma.pf"]            
                                                        ]
                                                    ]
                                    ]
                                    ,["humain" => [ 
                                                    [
                                                        "Tu aimes le contact humain"
                                                    ]
                                                    ,[

                                                    
                                                        ["Métiers de l'acceuil du Tourisme et de l'hôtellerie (MATH)"=>"https://www.rsma.pf/formation/nos-fillieres/agent-d-accueil-touristique.html"]
                                                        ,["Aide à la petite enfance (APE)"=>"https://www.rsma.pf/formation/nos-fillieres/aide-a-la-personne.html"]
                                                        ,["Agent de Prévention et de Sécurité (APS)"=>"https://www.rsma.pf/formation/nos-fillieres/agent-de-prevention-et-de-securite.html"]
                                                    ]            
                                                ]
                                    ]
                                    ,["cuisto" => [
                                                    [
                                                        "Tu as l'âme d'un cuisto" 
                                                    ]
                                                    ,[
                                                        ["Agent Polyvalent de Restauration (APR)"=>"https://www.rsma.pf/formation/nos-fillieres/agent-polyvalent-de-restauration.html"]
                                                        ,["Agent de Restauration (ADR)"=>"https://www.rsma.pf/formation/nos-fillieres/agent-de-restauration.html"]
                                                    ]
                                                ]
                                    ]
                                    ,["ocean" => [
                                                    [
                                                        "Ta passion c'est l'océan"
                                                    ]
                                                    ,[
                                                        ["Pilote Lagonnaire (PLGN)"=>"https://www.rsma.pf/formation/nos-fillieres/patron-lagonnaire.html"]
                                                        ,["Métiers de la mer (Matelot)"=>"https://www.rsma.pf/formation/nos-fillieres/matelot.html"]                                            
                                                    ]
                                                ]
                                    ]
                                    ,["vehicule" => [
                                                        [
                                                            "Tu aimes conduire des véhicules"
                                                        ]
                                                        ,[
                                                            ["Agent polyvalent mécanique (PMEC)"=>"https://www.rsma.pf/formation/nos-fillieres/polyvalent-mecanique.html"]
                                                            ,["Conducteur d'Engins de Travaux Publics (CETP)"=>"https://www.rsma.pf/formation/nos-fillieres/conducteur-d-engins-travaux-publics.html"]
                                                            ,["Conducteur tous transports (CTR)"=>"https://www.rsma.pf/formation/nos-fillieres/conducteur-tous-transports.html"]
                                                            ,["Magasinier (AMA)"=>"https://www.rsma.pf/formation/nos-fillieres/magasinier.html"]        
                                                        ]
                                                    ]
                                    ]
                                    ,["administration" => [
                                                    [
                                                        "Tu te sens bien derrière un ordinateur"
                                                    ]
                                                    ,[
                                                        ["Agent administratif (AAD)"=>"https://www.rsma.pf/formation/nos-fillieres/agent-administratif.html"]
                                                        ,["Remob"=>"https://www.rsma.pf"]
                                                    ]
                                                ]
                                    ]
                ];
    
    // je récupere le formulaire
    $input = $request->all();

    // J'initialise mes series - vides
    // 1
    $terre = [];
    
    // 2
    $bricoleur = [];
    
    // 3
    $humain = [];
    
    // 4
    $cuisto = [];
    
    // 5
    $ocean = [];
    
    // 6
    $vehicule = [];
    
    // 7
    $administration = [];

    // traiter les multicategorie
    // pour chaque question
    foreach($input['question1'] as $question1){
        if($question1 > 7){
            $reponse_1[] = $question1[0];
            $reponse_1[] = $question1[1];
        }
        $reponse_1[] = $question1;
    }

    foreach($input['question2'] as $question2){
        if($question2 > 7){
            $reponse_2[] = $question2[0];
            $reponse_2[] = $question2[1];
        }
        $reponse_2[] = $question2;
    }

    foreach($input['question3'] as $question3){
        if($question3 > 7){
            $reponse_3[] = $question3[0];
            $reponse_3[] = $question3[1];
        }
        $reponse_3[] = $question3;
    }

    foreach($input['question4'] as $question4){
        if($question4 > 7){
            $reponse_4[] = $question4[0];
            $reponse_4[] = $question4[1];
        }
        $reponse_4[] = $question4;
    }

    foreach($input['question5'] as $question5){
        if($question5 > 7){
            $reponse_5[] = $question5[0];
            $reponse_5[] = $question5[1];
        }
        $reponse_5[] = $question5;
    }

    
    foreach($input['question6'] as $question6){
        if($question6 > 7){
            $reponse_6[] = $question6[0];
            $reponse_6[] = $question6[1];
        }
        $reponse_6[] = $question6;
    }

    foreach($input['question7'] as $question7){
        if($question7 > 7){
            $reponse_7[] = $question7[0];
            $reponse_7[] = $question7[1];
        }
        $reponse_7[] = $question7;
    }

    foreach($input['question8'] as $question8){
        if($question8 > 7){
            $reponse_8[] = $question8[0];
            $reponse_8[] = $question8[1];
        }
        $reponse_8[] = $question8;
    }

    foreach($input['question9'] as $question9){
        if($question9 > 7){
            $reponse_9[] = $question9[0];
            $reponse_9[] = $question9[1];
        }
        $reponse_9[] = $question9;
    }


    // je parcours ma question 1
    foreach($reponse_1 as $reponse1){
        if($reponse1 == 1){
            $terre[] = 2;
        }elseif($reponse1 == 2) {
            $bricoleur[] = 2;
        }elseif($reponse1 == 3) {
            $humain[] = 2;
        }elseif ($reponse1 == 4) {
            $cuisto[] = 2;
        }elseif ($reponse1 == 5) {
            $ocean[] = 2;
        }elseif ($reponse1 == 6) {
            $vehicule[] = 2;
        }elseif ($reponse1 == 7) {
            $administration[] = 2;
        }
    }
    // je parcours ma question 2
    foreach($reponse_2 as $reponse2){
        if($reponse2 == 1){
            $terre[] = 1.11;
        }elseif($reponse2 == 2) {
            $bricoleur[] = 1.11;
        }elseif($reponse2 == 3) {
            $humain[] = 1.11;
        }elseif ($reponse2 == 4) {
            $cuisto[] = 1.11;
        }elseif ($reponse2 == 5) {
            $ocean[] = 1.11;
        }elseif ($reponse2 == 6) {
            $vehicule[] = 1.11;
        }elseif ($reponse2 == 7) {
            $administration[] = 1.11;
        }
    }
    // je parcours ma question 3
    foreach($reponse_3 as $reponse3){
        if($reponse3 == 1){
            $terre[] = 2;
        }elseif($reponse3 == 2) {
            $bricoleur[] = 2;
        }elseif($reponse3 == 3) {
            $humain[] = 2;
        }elseif ($reponse3 == 4) {
            $cuisto[] = 2;
        }elseif ($reponse3 == 5) {
            $ocean[] = 2;
        }elseif ($reponse3 == 6) {
            $vehicule[] = 2;
        }elseif ($reponse3 == 7) {
            $administration[] = 2;
        }
    }
    // je parcours ma question 4
    foreach($reponse_4 as $reponse4){
        if($reponse4 == 1){
            $terre[] = 0.96;
        }elseif($reponse4 == 2) {
            $bricoleur[] = 0.96;
        }elseif($reponse4 == 3) {
            $humain[] = 0.96;
        }elseif ($reponse4 == 4) {
            $cuisto[] = 0.96;
        }elseif ($reponse4 == 5) {
            $ocean[] = 0.96;
        }elseif ($reponse4 == 6) {
            $vehicule[] = 0.96;
        }elseif ($reponse4 == 7) {
            $administration[] = 0.96;
        }
    }
    // je parcours ma question 5
    foreach($reponse_5 as $reponse5){
        if($reponse5 == 1){
            $terre[] = 1;
        }elseif($reponse5 == 2) {
            $bricoleur[] = 1;
        }elseif($reponse5 == 3) {
            $humain[] = 1;
        }elseif ($reponse5 == 4) {
            $cuisto[] = 1;
        }elseif ($reponse5 == 5) {
            $ocean[] = 1;
        }elseif ($reponse5 == 6) {
            $vehicule[] = 1;
        }elseif ($reponse5 == 7) {
            $administration[] = 1;
        }
    }
    // je parcours ma question 6
    foreach($reponse_6 as $reponse6){
        if($reponse6 == 1){
            $terre[] = 0.81;
        }elseif($reponse6 == 2) {
            $bricoleur[] = 0.81;
        }elseif($reponse6 == 3) {
            $humain[] = 0.81;
        }elseif ($reponse6 == 4) {
            $cuisto[] = 0.81;
        }elseif ($reponse6 == 5) {
            $ocean[] = 0.81;
        }elseif ($reponse6 == 6) {
            $vehicule[] = 0.81;
        }elseif ($reponse6 == 7) {
            $administration[] = 0.81;
        }
    }
    // je parcours ma question 7
    foreach($reponse_7 as $reponse7){
        if($reponse7 == 1){
            $terre[] = 2;
        }elseif($reponse7 == 2) {
            $bricoleur[] = 2;
        }elseif($reponse7 == 3) {
            $humain[] = 2;
        }elseif ($reponse7 == 4) {
            $cuisto[] = 2;
        }elseif ($reponse7 == 5) {
            $ocean[] = 2;
        }elseif ($reponse7 == 6) {
            $vehicule[] = 2;
        }elseif ($reponse7 == 7) {
            $administration[] = 2;
        }
    }
    // je parcours ma question 8
    foreach($reponse_8 as $reponse8){
        if($reponse8 == 1){
            $terre[] = 2;
        }elseif($reponse8 == 2) {
            $bricoleur[] = 2;
        }elseif($reponse8 == 3) {
            $humain[] = 2;
        }elseif ($reponse8 == 4) {
            $cuisto[] = 2;
        }elseif ($reponse8 == 5) {
            $ocean[] = 2;
        }elseif ($reponse8 == 6) {
            $vehicule[] = 2;
        }elseif ($reponse8 == 7) {
            $administration[] = 2;
        }
    }
    // je parcours ma question 9
    foreach($reponse_9 as $reponse9){
        if($reponse9 == 1){
            $terre[] = 2;
        }elseif($reponse9 == 2) {
            $bricoleur[] = 2;
        }elseif($reponse9 == 3) {
            $humain[] = 2;
        }elseif ($reponse9 == 4) {
            $cuisto[] = 2;
        }elseif ($reponse9 == 5) {
            $ocean[] = 2;
        }elseif ($reponse9 == 6) {
            $vehicule[] = 2;
        }elseif ($reponse9 == 7) {
            $administration[] = 2;
        }
    }
    
    $terre = array_sum($terre);
    $humain = array_sum($humain);
    $cuisto = array_sum($cuisto);
    $ocean = array_sum($ocean);
    $vehicule = array_sum($vehicule);
    $administration = array_sum($administration);
    $bricoleur = array_sum($bricoleur);

    $result = [
        'terre' => $terre
        ,'humain' => $humain
        ,'cuisto' => $cuisto
        ,'ocean' => $ocean
        ,'vehicule' => $vehicule
        ,'administration' => $administration
        ,'bricoleur' => $bricoleur
    ];
    
    $tot = $humain + $cuisto + $terre + $ocean + $vehicule + $administration + $bricoleur;

    foreach($result as $categorie => $val){

        $p_res = $val / $tot;

        $p_result[$categorie] = $p_res * 100;

    }


    arsort($p_result);    
    arsort($result);

    // print_r($p_result);

    // var_dump($tot);


    return view('results',compact('result','p_result','fillieres'));
});


Route::get('/home', 'HomeController@index')->name('home');
