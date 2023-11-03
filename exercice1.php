<form action="/exercice1sol" method="POST">

<input type="text" name="nom"><br>

<input type="submit" value="Envoyer">

</form>



<?php
if(isset($_POST['nom'])){
    if($_POST['nom']=='dokolo'){
        echo 'Le nom est dokolo';
    }
    else{
        echo 'le nom est différent de dokolo';
    }
}

?>