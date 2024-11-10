<?php
include_once 'commos/function.php';

function get_categories(){

    $sql="SELECT * FROM categories";
    $conn= pdo_get_connection();
    $stmt =$conn->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}
function get_categoriesID($id){
    return pdo_query_one("SELECT * FROM categories WHERE categories_id= ?",$id);

}
function get_danhmuc(){
    return pdo_query("SELECT *FROM categories");
}