<?php
class Controller_Games extends Controller
{

	function __construct(){
		$this->model = new Model_Games();
		$this->view = new View();
	}

	function action_index()
	{
		$data = $this->model->get_data();
		$this->view->generate('games_view.php', 'template_view.php',$data);
	}

	function action_game($id)
	{
		include('connection.php');
		$query = $pdo->prepare("select * from games where id_games = ?");
		$query->execute([$id]);
		$data = $query->fetch();
		$this->view->generate('onefilm_view.php', 'template_view.php',$data);
	}
 }
 ?>
