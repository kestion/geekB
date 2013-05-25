<?php

	class Status extends MyDataObject
	{

		protected $idr;
		protected $id_user;
		protected $date;
		protected $text;
		
		protected $validation;
		protected $gallery;
		protected $friends;
		protected $private_messaging;
		protected $users;
		 
		protected $tablename = 'status';
	  
		public function SetId($id)
		{
			$this->id = $id;
		}
		 
		public function GetId()
		{
			return $this->id;
		}

		public function SetId_user($id_user)
		{
			$this->id_user = $id_user;
		}
		 
		public function GetId_user()
		{
			return $this->id_user;
		}
		
		public function SetDate($date)
		{
			$this->date = $date;
		}
		 
		public function GetDate()
		{
			return $this->date;
		}
		
			public function SetText($text)
		{
			$this->text = $text;
		}
		 
		public function GetText()
		{
			return $this->text;
		}
		
	}

?>