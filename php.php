<?php
$error=0;
$imie=$_post['imie'];
$nazwisko=$_post['nazwisko'];
$data_urodzenia=$_post['data_urodzenia'];
$mail=$_post['mail'];

<?php
    $error=0;
    if(isset($_POST['registration'])){
        $error=1;
        echo "<script>document.getElementById('form').reset();</script>";
        echo "<script>history.back();</script>";
        exit();
    }
    if(empty($_POST['imie']) || empty($_POST['nazwisko']) || empty($_POST['data_urodzenia']) || empty($_POST['mail']))
    {
        $error=1;
        echo "<script>alert ('Nie masz wszystkich danych');</script>";
        echo "<script>history.back();</script>";
        exit();
    }
    if($error!=0)
    {
        echo "<script>history.back();</script>";
        exit();
    }
    foreach($_POST as $key=>$value){
        echo "$key: $value<br>";
    }
?>
