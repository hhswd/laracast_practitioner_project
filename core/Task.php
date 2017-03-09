<?php
/**
*
*/
class Task
{
	protected $id;
	protected $description;
	protected $completed;

	public function __construct($id, $description, $completed){
		$this->id = $id;
		$this->description = $description;
		$this->completed = $completed;
	}
	
	public function foobar(){
		return 'foobar';
	}
}

?>