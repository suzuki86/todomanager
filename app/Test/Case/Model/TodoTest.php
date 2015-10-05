<?php

App::uses('Todo', 'Model');

class TodoTestCase extends CakeTestCase {
  public $fixtures = array('app.status', 'app.todo');

  public function setUp() {
    parent::setUp();
    $this->Todo = ClassRegistry::init('Todo');
  }

  public function testGetAllOpenTodos() {
    $actual = $this->Todo->getAllOpenTodos();
    $expected = array(
      array(
        'Todo' => array(
          'id' => 2,
          'title' => 'Test Todo 2',
          'detail' => 'Test Todo Detail 2',
          'status_id' => 1,
          'created' => '2010-01-01 00:00:00',
          'updated' => '2010-01-01 00:00:00'
        ),
        'Status' => array(
          'id' => 1,
          'label' => 'open'
        )
      ),
      array(
        'Todo' => array(
          'id' => 1,
          'title' => 'Test Todo 1',
          'detail' => 'Test Todo Detail 1',
          'status_id' => 1,
          'created' => '2010-01-01 00:00:00',
          'updated' => '2010-01-01 00:00:00'
        ),
        'Status' => array(
          'id' => 1,
          'label' => 'open'
        )
      )
    );
    $this->assertEqual($actual, $expected);
  }
}
