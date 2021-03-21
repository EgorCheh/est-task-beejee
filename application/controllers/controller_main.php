<?php

class Controller_Main extends Controller
{
	function __construct()
	{
		$this->view = new View();
		$this->model = new Model_Main();
	}

	function action_index()
	{
		$data=$this->model->get_data();
		$this->view->generate('main_view.php', 'template_view.php',$data);
	}

	function action_add_task()
	{
		$name=$_POST['name'];
		$task=$_POST['task'];
		$email=$_POST['email'];
		$this->model->add_task($name, $email, $task);
		$data=$this->model->get_data();
		$this->view->generate('main_view.php', 'template_view.php',$data);
	}
}
