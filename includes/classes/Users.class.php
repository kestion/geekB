<?php

	class Users extends MyDataObject
	{

		protected $id;
		protected $login;
		protected $email;
		protected $password;
		protected $description;
		protected $url_avatar;
		
		protected $validation;
		protected $gallery;
		protected $friends;
		protected $private_messaging;
		protected $status;
		 
		protected $tablename = 'users';
	  
		public function SetId($id)
		{
			$this->id = $id;
		}
		 
		public function GetId()
		{
			return $this->id;
		}

		public function SetLogin($login)
		{
			$this->login = $login;
		}
		 
		public function GetLogin()
		{
			return $this->login;
		}
		
		public function SetEmail($email)
		{
			$this->email = $email;
		}
		 
		public function GetEmail()
		{
			return $this->email;
		}
		
			public function SetPassword($password)
		{
			$this->password = $password;
		}
		 
		public function GetPassword()
		{
			return $this->password;
		}
		
			public function SetDescription($description)
		{
			$this->description = $description;
		}
		 
		public function GetDescription()
		{
			return $this->description;
		}
		
			public function SetUrl_avatar($url_avatar)
		{
			$this->url_avatar = $url_avatar;
		}
		 
		public function GetUrl_avatar()
		{
			return $this->url_avatar;
		}
		
	}

?>