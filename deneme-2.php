<?php 



 class Alemler{

    public $db;
    public $sql;
    public $insert;

public function __construct(){

    $this->db = new PDO('mysql:host=localhost;dbname=klasproje','root','');
  
    $this->db->exec("SET NAMES utf8");


}
public function baha($sorgu){

    $this->sql= $this->db->prepare($sorgu);
        
    $this->sql->execute();
         
   }
     
   public  function insert($baslik,$aciklama){
     
     return $this->baha("INSERT INTO person (baslik,aciklama) VALUES('$baslik','$aciklama')");
            
            
     }

public function goster(){


return $this->insert=$this->sql->fetchAll(PDO::FETCH_ASSOC);


}

public function sil($id){

return $this->baha("DELETE FROM person WHERE id='$id'");

}

public function Id($no){

$this->sql=$this->db->prepare("SELECT *FROM person WHERE id= $no");
$this->sql->execute();


}

public function numara(){

 return $this->sql->fetchAll(PDO::FETCH_ASSOC);   


}

public function duzenle($dbaslik,$daciklama,$sayi){

$this->sql= $this->db->prepare("UPDATE person SET baslik='$dbaslik',aciklama='$daciklama' WHERE id='$sayi'");
return $this->sql->execute();


}



}





?>
