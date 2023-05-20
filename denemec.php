<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
include("deneme-2.php");


$cektir= new Alemler();
$cektir->baha("SELECT*FROM person");
$sonuc=$cektir->goster();
?>


<table>
  <tr>
    <th>Başlık</th>
    <th>Açıklama</th>
<th>Düzenle</th>
    <th>Sil</th>
  </tr>
  
  <?php 
foreach($sonuc as $son){

?>





  <tr>
    <td><?php echo $son['baslik']; ?></td>
    <td><?php echo $son['aciklama'] ?> </td>
   <td><a href="duzenle.php?id=<?php echo $son['id']; ?>">Düzenle</a></td>

    <td>
    <form action="" method="post">
        <input type="hidden" name="gizli" value="<?php echo $son['id']; ?>">
        <button type="submit" name="sil">Sil</button>
    </form>    
 </td>
  </tr>


<?php

}

?> 
</table>
    
</body>
</html>