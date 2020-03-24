<?php include("db.php");
$ITEMID=1;
$ATTRIBUTE="ITEMNAME";
function getItemDetails($ITEMID, $ATTRIBUTE,$con){
    $ATTRIBUTE=strtoupper($ATTRIBUTE);
    $QUERY =  "SELECT ".$ATTRIBUTE." FROM ITEMS WHERE ID='$ITEMID'";
    echo $QUERY."<br>";
     $RESULT = mysqli_query($con,$QUERY);
     var_dump($RESULT);
}
getItemDetails($ITEMID, $ATTRIBUTE,$con);