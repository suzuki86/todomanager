<?php

App::uses('Todo', 'Model');

class TodoTestCase extends CakeTestCase {
  public $fixtures = array('app.project', 'app.status', 'app.todo');

  public function setUp() {
    parent::setUp();
    $this->Todo = ClassRegistry::init('Todo');
  }

  public function tearDown() {
    unset($this->Todo);
    parent::tearDown();
  }

  public function testGetAllTodos() {
    $actual = $this->Todo->getAllTodos();
    $expected = 3;
    $this->assertEqual(count($actual), $expected);
  }

  public function testGetAllOpenTodosCount() {
    $actual = $this->Todo->getAllOpenTodos();
    $expected = 2;
    $this->assertEqual(count($actual), $expected);
  }

  public function testErrorWhenTitleIsEmpty() {
    $this->Todo->save(array(
      'title' => '',
      'detail' => '',
      'project_id' => 1,
      'status_id' => 1
    ));
    $this->assertNotEmpty($this->Todo->validationErrors);
  }

  public function testTodosAreClosedAsExpected() {
    $this->Todo->close(1);
    $actual = $this->Todo->findById(1);
    $this->assertEqual($actual['Todo']['status_id'], 2);
  }

  public function testTodoAreOpenedAsExpected() {
    $this->Todo->open(3);
    $actual = $this->Todo->findById(3);
    $this->assertEqual($actual['Todo']['status_id'], 1);
  }
}
