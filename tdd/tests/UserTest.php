<?php 
require '../bootstrap.php';

use PHPUnit_Framework_TestCase as PHPUnit;
use Application\Model\User;

class UserTest extends PHPUnit
{
    protected $User;
    
    public function setUp() 
    {
        $this->User = new User();
    }
    
    
    
    public function testIfIsAbleToSetAndGetUserName()
    {
        $this->User->setName('Andre');
        
        $this->assertEquals('Andre', $this->User->getName());
    }
    
    
    public function testIfIsAbleToSetAndGetUserAddress()
    {
        $this->User->setAddress('Rua teste');
        
        $this->assertEquals('Rua teste', $this->User->getAddress());
    }
}
