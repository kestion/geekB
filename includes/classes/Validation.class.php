<?php

	class Validation extends MyDataObject
	{

		protected $id;
		protected $code;

		protected $users;
		protected $gallery;
		protected $friends;
		protected $private_messaging;
		protected $status;
		 
		protected $tablename = 'validation';
	  
		public function SetId($id)
		{
			$this->id = $id;
		}
		 
		public function GetId()
		{
			return $this->id;
		}

		public function SetCode($code)
		{
			$this->code = $code;
		}
		 
		public function GetCode()
		{
			return $this->code;
		}

	}

?>