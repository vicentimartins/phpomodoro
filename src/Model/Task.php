<?php

namespace PHPomodoro\Model;

class Task
{
	public $id;
	public $name;
	public $statusId;
	public $projectId;

	public function __construct($id, $name, $statusId, $projectId)
	{
		$this->id 			= $id;
		$this->name 		= $name;
		$this->statusId 	= $statusId;
		$this->projectId 	= $projectId;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setId($id)
	{
		$this->id = $id;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getStatusId()
	{
		return $this->statusId
	}

	public function setStatusId($statusId)
	{
		$this->statusId = $statusId;
	}

	public function getProjectId()
	{
		return $this->projectId;
	}

	public function setProjectId($projectId)
	{
		$this->projectId = $projectId;
	}
}