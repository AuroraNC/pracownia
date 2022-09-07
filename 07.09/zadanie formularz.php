<html>
<head>
<style>
p{color:red;}
</style>
</head>
<body>
<?php 
echo "<p>imie i nazwisko</p>";

$wiek = 19;
echo "Masz ".$wiek. " lat";

?>
<p></p>
<form method="" action="">
<input type="text" name="t">
<input type="submit" value="potwierdz">

</form>

<?php
if(isset($_GET['t']) && [empty]($_GET
$tekst=$_GET['t'];
echo "Wpisales: ".$tekst;
?>
</body>
</html>