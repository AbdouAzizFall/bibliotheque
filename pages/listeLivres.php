<?php
$stmt=$connexion->prepare("SELECT id_l,img,titre FROM livre");
$stmt->execute();
$result=$stmt->get_result();
?>
<div class="container mt-5">
    <h1 class="text-center mb-4">Voici les livres de notre bibliotheque</h1>
    <p class="text-center mb-4" style="color: #007bff; ">Découvrez une collection de livres passionnants à lire !</p>

    <?php if($result && $result->num_rows>0): ?> 
        <div class="row g-4">
            <?php while( $row = $result->fetch_assoc()): ?>
                <div class="col-md-4">
                <div class="card">
                    <img src="<?php echo htmlspecialchars($row['img']) ?>" class="card-img-top" alt="Image du livre">

                </div>

            <?php endwhile; ?>
        </div>
        </div>
        <?php else: ?>
            <p class="text-center">Aucun livre disponible dans la base de données</p>
         <?php endif; ?>
        
</div>



