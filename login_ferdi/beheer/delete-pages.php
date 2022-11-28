<meta http-equiv="refresh" content="0; URL=pages.php"/>

<?php
include "../includes/connectdb.php";


//$id = empty($_GET["page_id"]) ? null : $_GET["page_id"];

if(isset($_GET["page_id"])){
    $id = $_GET["page_id"];
} else {
    $id = 0;
}
if($id != 0){
    $sql = "DELETE FROM pages WHERE page_id = $id";
    /*$params = array(
        ":page_id" => $id
    );*/
    $sth = $db->prepare($sql);
    $sth->execute();
    //$sth->execute($params);
}
?>


