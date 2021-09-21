<?php

namespace App\Models;

class User
{
	public $user_name;

	public $last_name;

	public $email;

	public $password;

	public $contact;

	public $address;

	public $item_name;

	public $no_of_items;


	public function setUserName($username)
	{
		$this->user_name = $username;

	}

	public function getUserName()
	{
		return $this->user_name;
	}


	public function setPassword($password)
	{
		$this->password = $password;

	}

	public function setContact($contact)
	{
		$this->contact=$contact;

	}

	public function setAddress($address)
	{
        $this->address=$address;

	}

	public function setItemname($item_name)
	{
		$this->item_name=$item_name;
	}

	public function setItemnumber($no_of_item)
	{
		$this->no_of_item=$no_of_item;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function setEmail($email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}


	public function getEmailVariables()
	{
		return [
			'user_name' => $this->getUserName(),
			'email' => $this->getEmail(),
		];
	}
	public function login($username, $pass){

            $this->username = $username;
            $this->pass = $pass;


            if(!empty($this->username)){


                if($this->getPassword() === $this->pass ){

                     return 'Valid Login';
                }
                else{
                    return 'Invalid password';
                }

            }
            else{
                return 'Enter User Name';
            }


    }

	public function Signup($username,$pass,$email){

		$this->username = $username;
		$this->pass = $pass;
		$this->email=$email;

     if(!empty($this->email)){
		if(!empty($this->username)){

			if($this->getPassword() === $this->pass ){

				 return 'Valid Signup';
			}
			else{
				return 'Invalid signup';
			}

		}
	}
		else{
			return 'Enter User Name and email and password';
		}

	}



	public function check_logged_in($username){

		$this->username = $username;


		if(!empty($this->username)){

				 return 'Valid loggedin';
			}
		
		else{
			return 'Enter login info';
		}
	}




		public function logout($username){

			$this->username = $username;
	
	
			if(!empty($this->username)){
	
					 return 'Valid logout';
				}
			
			else{
				return 'Remove User Name';
			}
        }

		public function Product($username,$email,$contact,$address,$item_name,$no_of_item){

			$this->username = $username;
			$this->email=$email;
			$this->contact=$contact;
			$this->address=$address;
			$this->item_name=$item_name;
			$this->no_of_items=$no_of_item;
	
		 if(!empty($this->email)){
			if(!empty($this->username)){
				if(!empty($this->contact)){
					if(!empty($this->address)){
						if(!empty($this->item_name)){
							if(!empty($this->no_of_item)){
								return 'Order Placed';
							}
				else{
					return 'Invalid signup';
				}
			}
		}
			}
		}
	}
			else{
				return 'ENTER pRODUCT DETAILS`';
			}
	
		}



}