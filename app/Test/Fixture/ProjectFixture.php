<?php

class ProjectFixture extends CakeTestFixture {
  public $useDbConfig = 'test';
  public $import = 'Project';

  public $records = array(
    array(
      'id' => 1,
      'name' => 'Default',
      'description' => 'Default Project',
      'created' => '2010-01-01 00:00:00',
      'updated' => '2010-01-01 00:00:00'
    ),
    array(
      'id' => 2,
      'name' => 'Test Project 1',
      'description' => 'Test Project 1 Description',
      'created' => '2010-01-01 00:00:00',
      'updated' => '2010-01-01 00:00:00'
    ),
  );
 }
