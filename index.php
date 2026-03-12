

<?php
$archived = true;     // se crea booleavo
?>

<!DOCTYPE html>
<html>
    <head></head>     
    <body>       
        <?php if(!$archived) { echo "archivado"; }else { echo "activo"; } ?>

        <?php if($archived): ?> 
            <p>archivado</p>
        <?php else:?>   
            <p>activo</p>     // separar logica de prog
        <?php endif;?>        // con la presentación


    </body>
</html>
