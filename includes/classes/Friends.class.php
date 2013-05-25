<?php

	class Friends extends MyDataObject
	{

		protected $id;
		protected $id_user_one;
		protected $id_user_two;
		
		protected $validation;
		protected $private_messaging;
		protected $gallery;
		protected $status;
		protected $users;
		 
		protected $tablename = 'friends';
	  
		public function SetId($id)
		{
			$this->id = $id;
		}
		 
		public function GetId()
		{
			return $this->id;
		}

		public function SetIdUserOne($id_user_one)
		{
			$this->id_user_one = $id_user_one;
		}
		 
		public function GetIdUserOne()
		{
			return $this->id_user_one;
		}
		
		public function SetIdUserTwo($id_user_two)
		{
			$this->id_user_two = $id_user_two;
		}
		 
		public function GetIdUserTwo()
		{
			return $this->id_user_two;
		}
		
	}

?>