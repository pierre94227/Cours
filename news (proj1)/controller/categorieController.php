<?php

function update($bdd){
$cat = new Categorie($bdd);

$isUpdate=false;


$cat->nom_cat = @$_POST["nom_cat"];
$cat->id_cat = @$_POST["id_cat"];
    if($cat->update($bdd)){
$isUpdate===true;
};

include('view/categorie/update_cat.php');
}

function delete($bdd){
    
$cat = new Categorie($bdd);
$cat->nom_cat = @$_POST["nom_cat"];

if ( $cat->nom_cat !== null) {
    
    $cat->delete($bdd);
};
include('view/categorie/delete_cat.php');
}


function create($bdd){
$cat = new Categorie($bdd);
$cat->nom_cat = @$_POST["nom_cat"];

if ($cat->nom_cat !== null) {
    $cat->insert($bdd);
    
};
include('view/categorie/create_cat.php');
}