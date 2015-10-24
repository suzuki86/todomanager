<?php

class TodoFixture extends CakeTestFixture {
  public $useDbConfig = 'test';
  public $import = 'Todo';

  public $records = array(
    array(
      'id' => 1,
      'project_id' => 1,
      'title' => 'Test Todo 1',
      'detail' => 'Test Todo Detail 1',
      'status_id' => 1,
      'duedate' => '2010-01-01 00:00:00',
      'created' => '2010-01-01 00:00:00',
      'updated' => '2010-01-01 00:00:00'
    ),
    array(
      'id' => 2,
      'project_id' => 1,
      'title' => 'Test Todo 2',
      'detail' => 'Test Todo Detail 2',
      'status_id' => 1,
      'duedate' => '2010-01-01 00:00:00',
      'created' => '2010-01-01 00:00:00',
      'updated' => '2010-01-01 00:00:00'
    ),
    array(
      'id' => 3,
      'project_id' => 1,
      'title' => 'Test Todo 3',
      'detail' => 'Test Todo Detail 3',
      'status_id' => 2,
      'duedate' => '2010-01-01 00:00:00',
      'created' => '2010-01-01 00:00:00',
      'updated' => '2010-01-01 00:00:00'
    )
  );
 }
