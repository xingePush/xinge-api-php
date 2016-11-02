<?php
require_once 'XingeApp.php';

require_once 'PHPUnit/Framework/TestCase.php';

/**
 * XingeApp test case.
 */
class unitTest extends PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var XingeApp
	 */
	private $XingeApp;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated unitTest::setUp()
		
		$this->XingeApp = new XingeApp(/* parameters */);
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated unitTest::tearDown()
		$this->XingeApp = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}
	
	/**
	 * Tests XingeApp->__construct()
	 */
	public function test__construct() {
		// TODO Auto-generated unitTest->test__construct()
		$this->markTestIncomplete ( "__construct test not implemented" );
		
		$this->XingeApp->__construct(/* parameters */);
	}
	
	/**
	 * Tests XingeApp->__destruct()
	 */
	public function test__destruct() {
		// TODO Auto-generated unitTest->test__destruct()
		$this->markTestIncomplete ( "__destruct test not implemented" );
		
		$this->XingeApp->__destruct(/* parameters */);
	}
	
	/**
	 * Tests XingeApp->PushSingleDevice()
	 */
	public function testPushSingleDevice() {
		// TODO Auto-generated unitTest->testPushSingleDevice()
		$this->markTestIncomplete ( "PushSingleDevice test not implemented" );
		
		$this->XingeApp->PushSingleDevice(/* parameters */);
	}
	
	/**
	 * Tests XingeApp->PushSingleAccount()
	 */
	public function testPushSingleAccount() {
		// TODO Auto-generated unitTest->testPushSingleAccount()
		$this->markTestIncomplete ( "PushSingleAccount test not implemented" );
		
		$this->XingeApp->PushSingleAccount(/* parameters */);
	}
	
	/**
	 * Tests XingeApp->PushAllDevices()
	 */
	public function testPushAllDevices() {
		// TODO Auto-generated unitTest->testPushAllDevices()
		$this->markTestIncomplete ( "PushAllDevices test not implemented" );
		
		$this->XingeApp->PushAllDevices(/* parameters */);
	}
	
	/**
	 * Tests XingeApp->PushTags()
	 */
	public function testPushTags() {
		// TODO Auto-generated unitTest->testPushTags()
		$this->markTestIncomplete ( "PushTags test not implemented" );
		
		$this->XingeApp->PushTags(/* parameters */);
	}
	
	/**
	 * Tests XingeApp->QueryPushStatus()
	 */
	public function testQueryPushStatus() {
		// TODO Auto-generated unitTest->testQueryPushStatus()
		$this->markTestIncomplete ( "QueryPushStatus test not implemented" );
		
		$this->XingeApp->QueryPushStatus(/* parameters */);
	}
	
	/**
	 * Tests XingeApp->QueryDeviceCount()
	 */
	public function testQueryDeviceCount() {
		// TODO Auto-generated unitTest->testQueryDeviceCount()
		$this->markTestIncomplete ( "QueryDeviceCount test not implemented" );
		
		$this->XingeApp->QueryDeviceCount(/* parameters */);
	}
	
	/**
	 * Tests XingeApp->QueryTags()
	 */
	public function testQueryTags() {
		// TODO Auto-generated unitTest->testQueryTags()
		$this->markTestIncomplete ( "QueryTags test not implemented" );
		
		$this->XingeApp->QueryTags(/* parameters */);
	}
	
	/**
	 * Tests XingeApp->CancelTimingPush()
	 */
	public function testCancelTimingPush() {
		// TODO Auto-generated unitTest->testCancelTimingPush()
		$this->markTestIncomplete ( "CancelTimingPush test not implemented" );
		
		$this->XingeApp->CancelTimingPush(/* parameters */);
	}
}

