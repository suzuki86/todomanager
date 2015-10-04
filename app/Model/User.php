<?php

App::uses('AppModel', 'Model');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {
  public $validate = array(
    'username' => array(
      'required' => array(
        'rule' => array('notBlank'),
        'message' => 'A username is required'
      ),
      'isUnique' => array(
        'rule' => array('isUnique'),
        'message' => 'This username is already used'
      )
    ),
    'password' => array(
      'required' => array(
        'rule' => array('notBlank'),
        'message' => 'A password is required'
      )
    )
  );

  public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
      $passwordHasher = new BlowfishPasswordHasher();
      $this->data[$this->alias]['password'] = $passwordHasher->hash(
        $this->data[$this->alias]['password']
      );
    }
    return true;
  }
}
