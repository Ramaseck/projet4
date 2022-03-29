<a href="contact.html">Retour au site</a>


<pre>
<?php

print_r($_POST);
/*echo $_GET['name'];
echo"<br>";

echo $_GET['username'];
echo"<br>";

echo $_GET['chooce'];*/
?>
</pre>
<?php
isset($_POST['button']);
$button=$_POST['button'];
echo $button;
$sql="INSERT INTO `rama` ( `button`)
VALUES ('$button')" ;

echo "L’enregistrement est ajouté ";

?>