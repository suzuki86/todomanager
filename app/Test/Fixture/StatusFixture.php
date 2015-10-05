<?php

class StatusFixture extends CakeTestFixture {
  public $useDbConfig = 'test';
  public $import = 'Status';

  public $records = array(
    array(
      'id' => 1,
      'label' => 'open'
    ),
    array(
      'id' => 2,
      'label' => 'closed'
    ),
  );
 }
