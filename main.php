<?php
require_once('SeniorDeveloper.php');
require_once('MiddleDeveloper.php');
require_once('Designer.php');
require_once('Verstalchik.php');
require_once('Worker.php');
require_once('Team.php');
require_once('HourSalary.php');
require_once('MonthSalary.php');
require_once('Salary.php');
require_once('Calculate.php');

$team = new Team();
$team->addWorker(new Designer('Rabotyaga1','familiaRabotyaga1','OtchestvoRabotyaga1', 3000, 0));
$team->addWorker(new SeniorDeveloper('Rabotyaga2','familiaRabotyaga2','OtchestvoRabotyaga2', 10, 60));
$team->addWorker(new MiddleDeveloper('Rabotyaga3','familiaRabotyaga3','OtchestvoRabotyaga3', 1000, 0));
$team->addWorker(new MiddleDeveloper('Rabotyaga4','familiaRabotyaga4','OtchestvoRabotyaga4', 1000, 0));
$team->addWorker(new Verstalchik('Rabotyaga5','familiaRabotyaga5','OtchestvoRabotyaga5', 5, 120));
echo Calculate::calc($team->getTeam());