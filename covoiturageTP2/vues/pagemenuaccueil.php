<div data-role="page" id="pagemenuaccueil">
<?php
include "vues/entetepageavecboutonretouretaccueil.html";
include "vues/logo.html";
?>
 <div data-role="content" id="divinscription">    
    <div id="divmenuaccueil">
        <ul data-role="listview" >
            <li><a href="index.php?action=gereroffresarriveeentreprise" rel="external" >Voir toutes les offres arrivée entreprise</a></li>
            <li><a href="index.php?action=gereroffresdepartentreprise" rel="external" >Voir toutes les offres départ entreprise</a></li>
            <li><a href="#">Gérer mes offres</a></li>
        </ul> 
    </div>
 </div>     
    
<?php
include "vues/pied.html";
?>
</div>
