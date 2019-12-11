<?php
require_once('Worker.php');
class Team
{
	private $team = array();
	public function addWorker(Worker $worker)
	{
		$this->team[] = $worker;

	}
	public function getTeam()
	{
		return $this->team;

	}
}