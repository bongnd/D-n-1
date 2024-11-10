<?php
include_once 'commos/function.php';

function get_categories(){

    $sql="SELECT * FROM danhmuc";
    $conn= pdo_get_connection();
    $stmt =$conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
function get_categoriesID($id){
    return pdo_query_one("SELECT * FROM danhmuc WHERE danhmuc= ?",$id);

}
function get_danhmuc(){
    return pdo_query("SELECT *FROM danhmuc");
}