<?php 

require_once ("../XingeApp.php");

class ClickActionUnitTest extends PHPUnit_Framework_TestCase
{   
    public function testIsValid()
    {
    	$ca = new ClickAction();
    	$this->assertFalse($ca->isValid());
    	$ca->setActionType(0);
    	$this->assertFalse($ca->isValid());
    	$ca->setActionType(ClickAction::TYPE_ACTIVITY);
    	$ca->setActivity("com.tencnt.xinge.test");
    	$this->assertTrue($ca->isValid());
    	
    	$ca1 = new ClickAction();
    	$ca1->setActionType(ClickAction::TYPE_ACTIVITY);
    	$ca1->setIntent("intent");
    	$this->assertFalse($ca1->isValid());
    	
    	$ca2 = new ClickAction();
    	$ca2->setActionType(ClickAction::TYPE_INTENT);
    	$ca2->setIntent("intent");
    	$this->assertTrue($ca2->isValid());
    	
    	$ca3 = new ClickAction();
    	$ca3->setActionType(ClickAction::TYPE_URL);
    	$ca3->setUrl("http://url");
    	$ca3->setComfirmOnUrl(1);
    	$this->assertTrue($ca3->isValid());
    }
    
    public function testToJson()
    {
    	$ca = new ClickAction();
    	$ca->setActionType(ClickAction::TYPE_ACTIVITY);
    	$ca->setActivity("activity");
    	$this->assertEquals('{"action_type":1,"browser":{"url":null,"confirm":null},"activity":"activity","intent":null}', $ca->toJson());
    }
}

