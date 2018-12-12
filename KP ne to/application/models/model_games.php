<?php
class Model_Games extends Model
{
	public function get_data()
	{
    include('connection.php');
    $stmt = $pdo->query("select * from games");
    $data = $stmt->fetchAll();
    return $data;
	}
}
