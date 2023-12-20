
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<h1>produits</h1>



<div class="row">
<?php
foreach ($produits as $produit){
?>  
        <h2><?= $produit['produitName'] ?></h2>
        <div class="thumbnail"> <img <?php echo 'src="' . $produit['produitImageLink'] . '"'; ?> >
         <p><?php echo $produit['produitPrice']."€"; ?></p>
        
         <?php } ?>
</div>





</div>

