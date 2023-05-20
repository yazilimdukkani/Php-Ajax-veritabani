<?php 

$hata=error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Burası düzenlecek sayfadır</title>
</head>
<body>
    
<?php 
$sayfa= @$_GET['id'];



if (empty($sayfa)) {
    

    header("Location: deneme-1.php");

}
else{
    

}




include("deneme-2.php");
$gizlenmis= new Alemler();
$gizlenmis->Id($_GET['id']);
$sonuc= $gizlenmis->numara();

?>
    
<form action="" method="post" id="add">
<label for="text">Başlık</label>  
<br>
<?php 
foreach($sonuc as $cikti){

?>
<input type="text" name="dbaslik" value="<?php echo $cikti['baslik'];?>">
<br>
<br>
<label for="text">Yazı</label><br>
<textarea name="dyazi"><?php echo $cikti['aciklama'];  ?></textarea>
<br>

<input type="hidden" name="dgizli" value="<?php echo $cikti['id'];  ?>">

<?php 




}

?>
<button type="submit">Düzenle</button>
</form>
<!-- burası düzenleme postu -->

<?php 
if(!empty($_POST['dbaslik']) && !empty($_POST['dyazi'])&& !empty($_POST['dgizli'])){

    $gizlenmis->duzenle($_POST['dbaslik'],$_POST['dyazi'],$_POST['dgizli']);

header("Location: duzenle.php?id=".$_GET['id']);


}
?>
<!-- burası kontrol id -->
<?php 

if ($cikti['id'] != $_GET['id']) {
    header("Location: deneme-1.php");



}
else{


}





?>




</body>
</html>