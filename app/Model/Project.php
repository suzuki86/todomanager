<?php

App::uses('AppModel', 'Model');

class Project extends AppModel {
  public $hasMany = 'Todo';
  public $validate = array(
    'name' => array(
      'required' => array(
        'rule' => array('notBlank'),
        'message' => 'A name is required'
      )
    )
  );

  public function getAllProjects() {
    return $this->find('all', array(
      'order' => array(
        'Project.id DESC'
      )
    ));
  }
}
