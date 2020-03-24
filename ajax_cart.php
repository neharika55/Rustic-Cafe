<?php
include("db.php");
if(isset($_GET['ITEMID']) && isset($_GET['QUANTITY'])){
$ITEMCODE=$_GET['ITEMID'];
$QUANTITY=$_GET['QUANTITY'];
if(!isset($_SESSION['CART']))
    $_SESSION['CART']=array();
if(isset($_SESSION['CART'][$ITEMCODE]))
         $_SESSION['CART'][$ITEMCODE]+=$QUANTITY;
else 
         $_SESSION['CART'][$ITEMCODE]=$QUANTITY;
if($_SESSION['CART'][$ITEMCODE]==0)
         unset($_SESSION['CART'][$ITEMCODE]);
  //var_dump($_SESSION['CART']);         
} //else{
  //  echo "NOT SET";
//}
/*
var_dump($_SESSION_CART);         */