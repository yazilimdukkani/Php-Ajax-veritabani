<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>

        <script src="https://code.jquery.com/jquery-3.7.0.min.js" type="text/javascript"></script>

        <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
        
    </head>
    <body>
     

<form action="" method="post" id="add">
<label for="text">Başlık</label>  
<br>
<input type="text" name="baslik" value="">
<br>
<br>
<label for="text">Yazı</label><br>
<textarea name="yazi"></textarea>
<br>

<button type="submit">Gönder</button>
</form>
<?php 

/*
spl_autoload_register(function ($class_name) {
    include $class_name . '.class.php';
});

*/

include("deneme-2.php");
?>
<?php 






$veritabani= new Alemler();

$bas=@$_POST['baslik'];
$yaz= @$_POST['yazi'];

if(!empty($_POST['baslik'])&& !empty($_POST['yazi'])){


 $onay=   $veritabani->insert($_POST['baslik'],$_POST['yazi']);




$yonlendirme= header("Location: deneme-1.php");







}





?>

<?php
  if ( !empty($_POST['gizli'])) {

$silindi= $veritabani->sil($_POST['gizli']);

header("Location: deneme-1.php");


}
?>
<br>
<h4>Tablo</h4>









<script>
$(function(){
  $("#cek").click(function(){
    $.ajax({
      type: "GET",
      url: "denemec.php",
      //data: $(this).serialize(), // Formda'ki tüm verileri gönderir.
      //dataType: "json",
      success: function (response) {
       
          //alert("işlem başarılı");
          $('.veriler').html(response);
        
      },
      error: function(e) {
        // Bu kısım axaj.php'de bir hata varsa çalışır.
        alert("Beklenmedik bir hata oluştu");
      }
    });

  });
            
});


</script>
<button id="cek" class="btn btn-primary">Veri Çek</button>

<div class="veriler"></div>






<script>

$("#add").submit(function(e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: "deneme-1.php",
      data: $(this).serialize(), // Formda'ki tüm verileri gönderir.
      //dataType: "json",
      success: function (response) {
       
          alert("işlem başarılı");
       
        
      },
      error: function(e) {
        // Bu kısım axaj.php'de bir hata varsa çalışır.
        alert("Beklenmedik bir hata oluştu");
      }
    });
  });

            



</script>
   
   </body>
    </html>