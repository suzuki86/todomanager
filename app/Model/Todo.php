<?php

App::uses('AppModel', 'Model');

class Todo extends AppModel {
  public $belongsTo = array('Project', 'Status');
  public $validate = array(
    'title' => array(
      'required' => array(
        'rule' => array('notBlank'),
        'message' => 'A title is required'
      )
    )
  );

  public function getAllOpenTodos() {
    return $this->find('all', array(
      'conditions' => array(
        'Todo.status_id' => 1
      ),
      'order' => array(
        'Todo.id DESC'
      )
    ));
  }
}
