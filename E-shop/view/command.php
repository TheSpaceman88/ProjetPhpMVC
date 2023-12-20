
<form action="" method="post"> 
<div class="form-group">
    nom <input  class="form-control" type="text" name="LastName"><br>
    prenom <input class="form-control" type="text" name="FirstName"><br>
    email <input  class="form-control" type="email" name="Email"><br>
    message <input  class="form-control" type="text" name="Message"><br>
    <select name="produit" class="form-control">
        <?php
        foreach ($produits as $produit) {
            echo '<option value="' . $produit['produitId'] . '">' . $produit['produitName'] . '</option>';
        }
        ?>
    </select>
    <br>
    <br>
    <button type="submit" class="btn btn-primary">Envoyer</button> 
    </div>
</form>

