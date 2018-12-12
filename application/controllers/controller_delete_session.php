<?php

class Controller_delete_session extends Controller
{

	function action_index()
	{
		$this->view->generate('delete_session.php', 'template_view.php');
	}
}
