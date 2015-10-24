<?php

App::uses('Project', 'Model');

class ProjectTestCase extends CakeTestCase {
  public $fixtures = array('app.project', 'app.status', 'app.todo');

  public function setUp() {
    parent::setUp();
    $this->Project = ClassRegistry::init('Project');
  }

  public function tearDown() {
    unset($this->Project);
    parent::tearDown();
  }

  public function testGetAllProjectsCount() {
    $actual = $this->Project->getAllProjects();
    $expected = 2;
    $this->assertEqual(count($actual), $expected);
  }
}
