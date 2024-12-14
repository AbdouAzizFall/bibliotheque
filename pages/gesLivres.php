<?php
$stmt = $connexion->prepare("SELECT * FROM livre");
$stmt -> execute();
$result = $stmt->get_result();

?>
<a class="btn btn-success mt-5" href="?page=ajout">Ajouter</a>
<div class="col-md-8 offset-2 mt-5">
    <table class="table table spired">
        <thead class="bg-dark" style="color: white">
            <tr>
                <th scope="col">Titre</th>
                <th scope="col">Auteur</th>
                <th scope="col">Genre</th>
                <th scope="col">Année publication</th>
                <th scope="col">Disponibilité</th>
                <th scope="col">Image</th>
                <th scope="col">Actions</th>
            </tr>
            <?php while($ligne = mysqli_fetch_row($result)) : ?>

            <tbody class="bg-light">
                <tr>
                    <td><?= $ligne[1] ?></td>
                    <td><?= $ligne[2] ?></td>
                    <td><?= $ligne[3] ?></td>
                    <td><?= $ligne[4] ?></td>
                    <td><?= $ligne[5] ?></td>
                    <td><img src="<?= $ligne[6] ?>" alt=""></td>
                    <td>
                        <a class="btn btn-success" href="?page=edit&id=<?= $ligne[0] ?>">Modifier</a>
                        <a class="btn btn-danger" href="?page=edit&id=<?= $ligne[0] ?>">Supprimer</a>
                    </td>
                </tr>
            </tbody>
            <?php endwhile ?>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>