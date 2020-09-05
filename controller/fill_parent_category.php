<?php


include('database_connection.php');

$query = "SELECT * FROM category ORDER BY cat_name ASC";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '<option value="0">Parent Category</option>';

foreach($result as $row)
{
 $output .= '<option value="'.$row["cat_id"].'">'.$row["cat_name"].'</option>';
}

echo $output;

?>