<?php

class PagesControllerTest extends ControllerTestCase {
  public $fixtures = array('app.project', 'app.status', 'app.todo');

  public function testExpectedStringIsShownOnDashboard() {
    $actual = $this->testAction('/');
    $this->assertContains('You have', $actual);
  }
}
