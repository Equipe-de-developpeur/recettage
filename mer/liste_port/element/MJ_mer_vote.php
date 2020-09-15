<?php

//Si l'utilisateur est connecté, il pourra voter
if(isset($_SESSION['utilisateur_id']) && $_SESSION['utilisateur_id'] != NULL){
    $sessionUser =  $_SESSION['utilisateur_id'];
    //On prélève le vote de l'utilisateur sur ce port
    $sqlvote = $pdo->prepare("SELECT `vote_port_value` FROM `jm_mer_vote_port` WHERE `vote_port_user` = '$sessionUser' AND `vote_port_location` = $lieuID");
    $sqlvote->execute();
    $voteFetch = $sqlvote->fetch(PDO::FETCH_ASSOC);
    //On récupère dans $voteGot le valeur du vote. Si il est non existant, il sera NULL.
    $voteGot = $voteFetch['vote_port_value'];
?>
    <!-- On crée le formulaire de vote -->
    <form action="MJ_mer_listeport.php" method="post" class="anchorDiv">
        <!-- On récupère secretement les informations du port et de l'utilisateur -->
        <input type="hidden" name="idLocation" value="<?php echo $lieuID ?>">
        <input type="hidden" name="idUser" value="<?php echo $_SESSION['utilisateur_id'] ?>">
        <!-- On met en place le système de vote avec des ancres -->
        <input class="anchorLogo" id="anchor-5-<?php echo $lieuID ?>" type="radio" name="anchor" value="5"
        <?php if($voteGot == '5') { echo "checked"; } ?>>
        <!-- On écrit une condition if pour que le formulaire soit automatiquement coché sur la bonne valeur -->
        <label for="anchor-5-<?php echo $lieuID ?>" title="Fantastique" class="fas"></label>
        <input class="anchorLogo" id="anchor-4-<?php echo $lieuID ?>" type="radio" name="anchor" value="4"
        <?php if($voteGot == '4') { echo "checked"; } ?>>
        <label for="anchor-4-<?php echo $lieuID ?>" title="Bien" class="fas"></label>
        <input class="anchorLogo" id="anchor-3-<?php echo $lieuID ?>" type="radio" name="anchor" value="3"
        <?php if($voteGot == '3') { echo "checked"; } ?>>
        <label for="anchor-3-<?php echo $lieuID ?>" title="Moyen" class="fas"></label>
        <input class="anchorLogo" id="anchor-2-<?php echo $lieuID ?>" type="radio" name="anchor" value="2"
        <?php if($voteGot == '2') { echo "checked"; } ?>>
        <label for="anchor-2-<?php echo $lieuID ?>" title="Pas Bien" class="fas"></label>
        <input class="anchorLogo" id="anchor-1-<?php echo $lieuID ?>" type="radio" name="anchor" value="1"
        <?php if($voteGot == '1') { echo "checked"; } ?>>
        <label for="anchor-1-<?php echo $lieuID ?>" title="Mauvais" class="fas"></label>
        <br>
        <input type="submit" value="Voter">
    </form>
<?php } ?>