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

  public function testGetAllTodosCount() {
    $actual = $this->Todo->getAllTodos();
    $expected = 4;
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
    // When integer passed.
    $this->Todo->close(1);
    $actual = $this->Todo->findById(1);
    $this->assertEqual($actual['Todo']['status_id'], 2);

    // When string passed.
    $this->Todo->close('2');
    $actual = $this->Todo->findById(2);
    $this->assertEqual($actual['Todo']['status_id'], 2);

    // When no agument passed.
    $actual = $this->Todo->close();
    $this->assertFalse($actual);

    // When invalid string passed.
    $actual = $this->Todo->close('hello');
    $this->assertFalse($actual);

    $actual = $this->Todo->close('2hello');
    $this->assertFalse($actual);

    $actual = $this->Todo->close('hello2');
    $this->assertFalse($actual);
  }

  public function testTodoAreOpenedAsExpected() {
    // When integer passed.
    $this->Todo->open(3);
    $actual = $this->Todo->findById(3);
    $this->assertEqual($actual['Todo']['status_id'], 1);

    // When string passed.
    $this->Todo->open('4');
    $actual = $this->Todo->findById(4);
    $this->assertEqual($actual['Todo']['status_id'], 1);

    // When no agument passed.
    $actual = $this->Todo->open();
    $this->assertFalse($actual);

    // When invalid string passed.
    $actual = $this->Todo->open('hello');
    $this->assertFalse($actual);

    $actual = $this->Todo->open('2hello');
    $this->assertFalse($actual);

    $actual = $this->Todo->open('hello2');
    $this->assertFalse($actual);
  }
}
