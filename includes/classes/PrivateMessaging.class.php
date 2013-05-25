<?php

	class PrivateMessaging extends MyDataObject
	{

		protected $id;
		protected $title;
		protected $content;
		protected $sender_user;
		protected $recipient_user;
		
		protected $validation;
		protected $gallery;
		protected $friends;
		protected $status;
		protected $users;
		 
		protected $tablename = 'private_messaging';
	  
		public function SetId($id)
		{
			$this->id = $id;
		}
		 
		public function GetId()
		{
			return $this->id;
		}

		public function SetTitle($title)
		{
			$this->title = $title;
		}
		 
		public function GetTitle()
		{
			return $this->title;
		}
		
		public function SetContent($content)
		{
			$this->content = $content;
		}
		 
		public function GetContent()
		{
			return $this->content;
		}
		
			public function SetSenderUser($sender_user)
		{
			$this->sender_user = $sender_user;
		}
		 
		public function GetSenderUser()
		{
			return $this->sender_user;
		}
		
			public function SetRecipientUser($recipient_user)
		{
			$this->recipient_user = $recipient_user;
		}
		 
		public function GetRecipientUser()
		{
			return $this->recipient_user;
		}
		
	}

?>