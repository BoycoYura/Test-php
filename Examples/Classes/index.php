<?php 

require'functions.php';


class Task {

	protected $description;

	protected $completed = false;


   	public function __construct($description) 
   	{
       	$this->description = $description;
   	}

   	public function GetCompleted(){
   		return 	$this->completed;
   	}

   	public function GetDescription(){
   		return $this->description;
   	}

   	public function Complete(){
   		$this->completed = true;   	
   	}


}

$tasks = [
	new Task('Create a first page'),
	new Task('Create a second page'),
	new Task('Create a third page'),
	new Task('Create a four page')
];

$tasks[0]->Complete();


require'index-viev.php';
?>



