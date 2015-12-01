<?php

class businessData{

	private $id, $users_id, $bus_name, $address_no, $address_road, $address_pc, $contact_no, $business_no, $website, $description, $file, $prem;


	public function _construct($dbRow){

		$this->id = $dbRow['id'];
		$this->users_id = $dbRow['users_id'];
		$this->bus_name = $dbRow['bus_name'];
		$this->address_no = $dbRow['address_no'];
		$this->address_road = $dbRow['address_road'];
		$this->address_pc = $dbRow['address_pc'];
		$this->contact_no = $dbRow['contact_no'];
		$this->business_no = $dbRow['business_no'];
		$this->website = $dbRow['website'];
		$this->description = $dbRow['description'];
		$this->file = $dbRow['file'];
		$this->prem = $dbRow['prem'];

	}
	public function getbusiness_dataid(){

		return $this->id;
	}
	public function getbusinessusers_id(){

		return $this->users_id;
	}
	public function getbusinessbus_name(){

		return $this->bus_name;
	}
	public function getbusinessaddress_no(){

		return $this->address_no;
	}
	public function getbusinessaddress_road(){

		return $this->address_road;
	}
	public function getbusinessaddress_pc(){

		return $this->address_pc;
	}
	public function getbusinesscontact_no(){

		return $this->contact_no;
	}
	public function getbusinessbusiness_no(){

		return $this->business_no;
	}
	public function getbusinesswebsite(){

		return $this->website;
	}
	public function getbusinessdescription(){

		return $this->description;
	}
	public function getbusinessfile(){

		return $this->file;
	}
	public function getbusinessprem(){

		return $this->prem;
	}
	
	
}



?>