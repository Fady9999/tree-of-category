<?php


include('database_connection.php');

$data = array(
 ':category_name'  => $_POST['new_category_name'],
 ':parent_category_id' => $_POST['parent_edit_category']
);

$query = "UPDATE category SET cat_name = :category_name WHERE cat_id = :parent_category_id";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
 echo 'Category edited';
}


?>