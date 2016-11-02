<?php 

require_once ("../XingeApp.php");

class MessageUnitTest extends PHPUnit_Framework_TestCase
{   
    public function testGet()
    {
    	$m = new Message();
    	$m->setType(Message::TYPE_MESSAGE);
    	$this->assertEquals(Message::TYPE_MESSAGE, $m->getType());
    	$m->setSendTime(1);
    	$this->assertEquals(1, $m->getSendTime());
    	$m->setExpireTime(2);
    	$this->assertEquals(2, $m->getExpireTime());
    }
    
    public function testAcceptTimeToJson()
    {
    	$m = new Message();
    	$this->assertEquals('[]', $m->acceptTimeToJson());
    	$t1 = new TimeInterval(1, 0, 2, 0);
    	$m->addAcceptTime($t1);
    	$t2 = new TimeInterval(8, 0, 9, 0);
    	$m->addAcceptTime($t2);
    	$this->assertEquals('[{"start":{"hour":1,"min":0},"end":{"hour":2,"min":0}},{"start":{"hour":8,"min":0},"end":{"hour":9,"min":0}}]', $m->acceptTimeToJson());
    }
    
    public function testIsValid()
    {
    	$m = new Message();
    	$this->assertFalse($m->isValid());
    	$m1 = new Message();
    	$m1->setType(Message::TYPE_MESSAGE);
    	$this->assertTrue($m1->isValid());
    	$m2 = new Message();
    	$m2->setType(Message::TYPE_NOTIFICATION);
    	$this->assertFalse($m2->isValid());
    	$m3 = new Message();
    	$m3->setType(Message::TYPE_NOTIFICATION);
    	$s = new Style(123);
    	$m3->setStyle($s);
    	$a = new ClickAction();
    	$a->setActionType(ClickAction::TYPE_ACTIVITY);
    	$a->setActivity("activity");
    	$m3->setAction($a);
    	$this->assertTrue($m3->isValid());
    }
    
    public function testToJson()
    {
    	$m1 = new Message();
    	$m1->setType(Message::TYPE_MESSAGE);
    	$this->assertTrue($m1->isValid());
    	$this->assertEquals('{"title":"","content":"","custon_content":[]}', $m1->toJson());
    	
    	$m3 = new Message();
    	$m3->setType(Message::TYPE_NOTIFICATION);
    	$s = new Style(123);
    	$m3->setStyle($s);
    	$a = new ClickAction();
    	$a->setActionType(ClickAction::TYPE_ACTIVITY);
    	$a->setActivity("activity");
    	$m3->setAction($a);
    	$this->assertTrue($m3->isValid());
    	$this->assertEquals('{"title":"","content":"","builder_id":123,"ring":0,"vibrate":0,"clearable":1,"action":"{\"action_type\":1,\"browser\":{\"url\":null,\"confirm\":null},\"activity\":\"activity\",\"intent\":null}","custon_content":[]}', $m3->toJson());
    }
    
}

