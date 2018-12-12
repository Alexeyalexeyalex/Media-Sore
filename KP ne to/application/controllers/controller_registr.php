<?php

class Controller_registr extends Controller
{

	function action_index()
	{
		$this->view->generate('registr_view.php', 'template_view.php');
	}
}
