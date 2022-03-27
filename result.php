<a href="index.html">Retour au site</a>
<?php
isset($_POST['button']);
$button=$_POST['button'];
echo $button;
$sql="INSERT INTO `rama` ( `button`)
VALUES ('$button')" ;

echo "L’enregistrement est ajouté ";

?>