<div id="menu">
    <ul>
        <li><a href="#">Gestion de commande</a>
            <ul>
                <li><a href="<?php echo $base_url."gescom/cde_saisir.php"; ?>" title="Saisir un bon de commande VPC">Saisir un bon de commande</a></li>
                <li><a href="<?php echo $base_url."gescom/cde_rechercher.php"; ?>" title="Rechercher une commande VPC">Rechercher une commande</a></li>
            </ul>
        </li>
        
        <li><a href="<?php echo $base_url."client/clients.php"; ?>" title="Gestion des clients VPC">Custo</a></li>
        <li><a href="<?php echo $base_url."prodi/catalogue.php"; ?>" title="Gestion du catalogue VPC">Produit</a>
        <ul>
                <li><a href="<?php echo $base_url."gescom/cde_saisir.php"; ?>" title="Saisir un bon de commande VPC">Saisir un produit</a></li>
                <li><a href="<?php echo $base_url."gescom/cde_rechercher.php"; ?>" title="Rechercher une commande VPC">Rechercher un produit</a></li>
            </ul>
        </li>
        <li><a href="<?php echo $base_url."sav-on/sav.php"; ?>" title="Gestion des réclamations et retours">SAV-On</a></li>
    </ul>
</div>