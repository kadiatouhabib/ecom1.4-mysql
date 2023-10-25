<?php

global $conn;

function selectUserByIdIndex() {
    //recuperer une ligne dans la db user
global $conn;
$result1 = mysqli_query ($conn, "SELECT * FROM user WHERE id = $id" );

//avec fetch row: tableau indexé
$data  = mysqli_fetch_row($result); 

return $data;

}

function selecteUserByIdAssoc-() {
    
}