<?php

class UserTest extends \PHPUnit\Framework\TestCase
{

	protected $user;

public function setUp() :void {

		$this->user = new \App\Models\User;
		
	}


	public function testUserName()
	{
		$this->user->setUserName('sadaf');

		$this->assertEquals($this->user->getUserName(), 'sadaf');
	}

	public function testPassword()
	{
		$this->user->setPassword('123456');

		$this->assertEquals($this->user->getPassword(), '123456');
	}

	public function testEmailAddressCanBeSet()
	{
		$user = new \App\Models\User;

		$user->setEmail('sadaf@gmail');

		$this->assertEquals($user->getEmail(), 'sadaf@gmail');
	}

	public function testEmailVariablesContainCorrectValues()
	{
		$user = new \App\Models\User;

		$user->setUserName('sadaf');

		$user->setEmail('sadaf@gmail');

		$emailVariables = $user->getEmailVariables();

		$this->assertArrayHasKey('user_name', $emailVariables);
		$this->assertArrayHasKey('email', $emailVariables);

		$this->assertEquals($emailVariables['user_name'], 'sadaf');
		$this->assertEquals($emailVariables['email'], 'sadaf@gmail');
	}

public function testLogin()
    {
        $user = new \App\Models\User;
        $username = 'mouno';
        $pass = '1234';
        $user->setUserName('mouno');
        $user->setPassword('1234');
        $this->assertEquals($user->login($username, $pass), 'Valid Login');

    }
		
	public function testSignup()
    {
        $user = new \App\Models\User;
        $username = 'rafia';
        $pass = '1234';
		$email='rafia@gmail.com';
        $user->setUserName('rafia');
        $user->setPassword('1234');
		$user->setEmail('rafia@gmail.com');
        $this->assertEquals($user->Signup($username, $pass,$email), 'Valid Signup');

    }	
	
	public function testcheck_logged_in(){
		$user = new \App\Models\User;
        $username = 'rafia';
        $user->setUserName('rafia');
        $this->assertEquals($user->check_logged_in($username), 'Valid loggedin');

	}

	public function testlogout(){
		$user = new \App\Models\User;
        $username = 'zannah';
        $user->setUserName('zannah');
        $this->assertEquals($user->logout($username), 'Valid logout');
	}

	public function testProduct()
    {
        $user = new \App\Models\User;
        $username = 'rafia';
        $contact= '01788682494';
		$address='32/3 sukrabad, dhaka';
		$email='rafia@gmail.com';
		$item_name='mascara';
		$no_of_item='02';
        $user->setUserName('rafia');
		$user->setEmail('rafia@gmail.com');
		$user->setContact('01788682494');
		$user->setAddress('32/3 sukrabad, dhaka');
        $user->setItemname('mascara');
		$user->setItemnumber('02');
        $this->assertEquals($user->Product($username,$email,$contact,$address,$item_name,$no_of_item), 'Order Placed');

    }	
	
}