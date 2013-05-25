<?php

	class Gallery extends MyDataObject
	{

		protected $id;
		protected $url_picture;
		protected $id_user;
		protected $legend;
		
		protected $validation;
		protected $private_messaging;
		protected $friends;
		protected $status;
		protected $users;
		 
		protected $tablename = 'gallery';
	  
		public function SetId($id)
		{
			$this->id = $id;
		}
		 
		public function GetId()
		{
			return $this->id;
		}

		public function SetUrlPicture($url_picture)
		{
			$this->url_picture = $url_picture;
		}
		 
		public function GetUrlPicture()
		{
			return $this->url_picture;
		}
		
		public function SetIdUser($id_user)
		{
			$this->id_user = $id_user;
		}
		 
		public function GetIdUser()
		{
			return $this->id_user;
		}
		
			public function SetLegend($legend)
		{
			$this->legend = $legend;
		}
		 
		public function GetLegend()
		{
			return $this->legend;
		}
		
	}

?>