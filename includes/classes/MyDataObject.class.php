<?php

abstract class MyDataObject
{
	private $primaryKey;
	private $fields;
	
	//public function __construct()
	//{
		//$this->detectFields;
	//}
	
	//protected function Delete()
	//{
		
		//if($this->{$this->$primary_key} != null)
		//{
			//$q = "DELETE FROM `".$this->tablename."` 
			//WHERE ".$this {$this->primary_key}."='".intval($this->$primary_key)."'";
			//mysql_query($q);
		//}
	//}
	
	//protected function Save()
	//{
	
		//if($this->{this->primaryKey} != null)
		//{
			//nbrFields = count(this->fields);
			//compteur = 0;
			
			//$query = ("UPDATE".mysql_real_escape_string($this->tablename)."SET";
			
			//foreach($this->fields AS $field)
			//{
			//	$query .= "`".mysql_real_escape_string($field['Field'])."` = '".mysql_real_escape_string($this->$field['Field'])."'");
				
			//	compteur++;
				
			//	if(compteur < (nbrFields -1))
			//	{
				//	$query .= ",";
			//	}
				
			//	$query .= "WHERE".mysql_real_escape_string($this->primaryKey)." = '".intval($this->$primary_key)."'";
			//}
			
	//	}
		//else
		//{
			//nbrFields = count(this->fields);
			//compteur = 0;
			//$query = ("INSERT INTO".mysql_real_escape_string($this->tablename)."(");
			
			//foreach($this-> fields AS field)
			//{
				//$query .= "(".mysql_real_escape_string($field['Field']).") VALUES (");
				//compteur++;
			//}
			
			//compteur = 0;
			
			//foreach($this-> fields AS field)
			//{
				//$query .= (.mysql_real_escape_string($field['Field']).")");
				//compteur++;
			//}
			
			//$this->{$this->primaryKey} = mysql_insert_id();
		//}
	//}
}

?>