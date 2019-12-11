<?php
require_once('MonthSalary.php');
require_once('HourSalary.php');
abstract class Worker
{
	protected $name;
    protected $familia;
    protected $otchestvo;
	protected $money;
	protected $hour;
    protected $mounth;
	public function __construct( $name, $familia, $otchestvo,  $money,  $hour, $mounth)
	{
		$this->name = $name;
        $this->familia = $familia;
        $this->otchestvo = $otchestvo;
		$this->money = $money;
		$this->hour = $hour;
        $this->mounth = $mounth;
	}
	public function calcSalary()
	{
		if ($this->hour === 0){
			$salary = new MonthSalary($this->money, $this->mounth);
		} else {
			$salary = new HourSalary($this->money, $this->hour, $this->mounth);
		}
		return $salary->calcSalary();
	}
}