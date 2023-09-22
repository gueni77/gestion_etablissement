<?php
var_dump($_POST);
require_once "../C-PEDAGOC/connexion.php";
//----configuration du button valider
//-----------code d'insertion-----
if (
    !empty($_POST['nom_candiat']) 
    && !empty($_POST['prenom_candidat'])
    && !empty($_POST['Date_Naissance_candidat'])  
    && !empty($_POST['sexe_candidat'])
    && !empty($_POST['sexe_candidat'])
    && !empty($_POST['lieu_naissance'])
    && !empty($_POST['contact_candidat']) 
    && !empty($_POST['email_candidat'])
    && !empty($_POST['adresse_candidat']) 
    && !empty($_POST['specialite_candidat']) 
    && !empty($_POST['formation_candidat'])
    && !empty($_POST['type_formation_candidat']) 
    && !empty($_POST['diplome_candidat'])
    && !empty($_POST['photo_candidat'])
    ) {
        
    $sql = "INSERT INTO $dbname.candidat(nom_candiat, prenom_candidat,Date_Naissance_candidat,sexe_candidat,lieu_naissance,contact_candidat,email_candidat,adresse_candidat, specialte_candidat, formation_candidat, type_formation_candidat, diplome_candidat, photo_candidat)
            VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $req = $connexion->prepare($sql);
        $req->execute(array(
            $_POST['nom_candiat'],
            $_POST['prenom_candidat'],
            $_POST['Date_Naissance_candidat'],
            $_POST['sexe_candidat'],
            $_POST['lieu_naissance'],
            $_POST['contact_candidat'],
            $_POST['email_candidat'],
            $_POST['adresse_candidat'],
            $_POST['specialite_candidat'],
            $_POST['formation_candidat'],
            $_POST['type_formation_candidat'],
            $_POST['diplome_candidat'],
            $_POST['photo_candidat']        
        ));
        if ($req->rowCount()!=0) {
            echo "Félicitation vous êtes inscrit(e)s";
        }else {
            echo "Désolé une erreur s'est produite lors de votre inscription !";
        }
    }else {
        echo "veuillez remplir tous les champs ";
    }
?>

