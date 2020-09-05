<?php


include('database_connection.php');
$data = array(
    ':parent_category_id' => $_POST['parent_delete_category']
   );
$query ="DELETE FROM category WHERE cat_id = :parent_category_id OR parent_cat_id = :parent_category_id ";

   $statement = $connect->prepare($query);
if($statement->execute($data))
{
 echo 'Category deleted';
}

?>