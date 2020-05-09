<?php
$lc='localhost';
$name='root';
$ps='';
$sql=new mysqli($lc,$name,$ps);
if($sql->connect_error){
    die('connection failed'.$sql->connect_error);
}
echo "connect success";
$query="select * from userprofile";
$isi=$sql->query($query);
// foreach($isi a)
?>