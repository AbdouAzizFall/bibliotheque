<?php 
if(isset($_POST['enregistrer'])){
    $titre=$_POST['titre'];
    $auteur=$_POST['auteur'];
    $genre=$_POST['genre'];
    $annee=$_POST['annee'];
    $dispo=$_POST['dispo'];
    $image=$_POST['image'];

    $stmt=$connexion->prepare("INSERT INTO etudiant (nom,prenom,classe) VALUES (?,?,?)");
    $stmt->bind_param("sss",$nom,$prenom,$classe);
    $stmt->execute();
    header('location: index.php');
}
?>
<div class="col-md-8 offset-2 mt-5">
    <form action="" method="POST">
        <label for="">Titre</label>
        <input type="text" name="titre" id="" class="form-control"><br>
        <label for="">Auteur</label>
        <input type="text" name="auteur" id="" class="form-control"><br>
        <label for="">Genre</label>
        <input type="text" name="genre" id="" class="form-control"><br>
        <label for="">Année de publication</label>
        <input type="text" name="annee" id="" class="form-control"><br>
        <label for="">Disponibilité</label>
        <input type="text" name="dispo" id="" class="form-control"><br>
        <label for="">Image</label>
        <input type="text" name="image" id="" class="form-control"><img src="" alt=""><br>
        <button type="submit" class="btn btn-success" name="enregistrer">Enregistrer</button>
        <button type="submit" class="btn btn-danger">Retour</button>
    </form>
</div>