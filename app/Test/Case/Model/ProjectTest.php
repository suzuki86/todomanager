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

  public function testGetAllProjects() {
    $actual = $this->Project->getAllProjects();
    $expected = array(
      array(
        'Project' => array(
          'id' => 2,
          'name' => 'Test Project 1',
          'description' => 'Test Project 1 Description',
          'created' => '2010-01-01 00:00:00',
          'updated' => '2010-01-01 00:00:00'
        ),
        'Todo' => array(
        )
      ),
      array(
        'Project' => array(
          'id' => 1,
          'name' => 'Default',
          'description' => 'Default Project',
          'created' => '2010-01-01 00:00:00',
          'updated' => '2010-01-01 00:00:00'
        ),
        'Todo' => array(
          array(
            'id' => 1,
            'project_id' => '1',
            'title' => 'Test Todo 1',
            'detail' => 'Test Todo Detail 1',
            'status_id' => '1',
            'duedate' => '2010-01-01 00:00:00',
            'created' => '2010-01-01 00:00:00',
            'updated' => '2010-01-01 00:00:00'
          ),
          array(
            'id' => 2,
            'project_id' => '1',
            'title' => 'Test Todo 2',
            'detail' => 'Test Todo Detail 2',
            'status_id' => '1',
            'duedate' => '2010-01-01 00:00:00',
            'created' => '2010-01-01 00:00:00',
            'updated' => '2010-01-01 00:00:00'
          )
        )
      )
    );
    $this->assertEqual($actual, $expected);
  }
}
