<?php
class Model_Main extends Model
{
	public function get_data()
	{
    include('connection.php');

    $stmt = $pdo->query("select * from films");
    $data = $stmt->fetchAll();
    return $data;
}
}
