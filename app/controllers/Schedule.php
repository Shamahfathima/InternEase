<?php 

/**
 * schedule class
 */
class Schedule
{
	use Controller;

	public function index()
	{

		$this->view('Student','schedule');
	}

}
