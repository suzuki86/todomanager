<?php

App::uses('AppModel', 'Model');

class Todo extends AppModel {
  public $validate = array(
    'title' => array(
      'required' => array(
        'rule' => array('notBlank'),
        'message' => 'A title is required'
      )
    )
  );
}
