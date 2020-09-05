<?php


include('database_connection.php');

$data = array(
 ':category_name'  => $_POST['category_name'],
 ':parent_category_id' => $_POST['parent_category']
);

$query = "INSERT INTO category (cat_name, parent_cat_id) VALUES (:category_name, :parent_category_id)";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
 echo 'Category Added';
}


?>