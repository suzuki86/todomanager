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

  public function getAllTodos() {
    return $this->find('all', array(
      'order' => array(
        'Todo.id DESC'
      )
    ));
  }

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

  public function open($id = null) {
    if (!preg_match('/^[0-9]+$/', $id)) {
      return false;
    }
    if (!$this->hasAny(array('id' => $id))) {
      return false;
    }
    $todo_to_open = array(
      'Todo' => array('id' => $id, 'status_id' => 1)
    );
    $this->save($todo_to_open, false);
  }

  public function close($id = null) {
    if (!preg_match('/^[0-9]+$/', $id)) {
      return false;
    }
    if (!$this->hasAny(array('id' => $id))) {
      return false;
    }
    $todo_to_close = array(
      'Todo' => array('id' => $id, 'status_id' => 2, 'closed' => date('Y-m-d H:i:s'))
    );
    $this->save($todo_to_close, false);
  }

  public function getOpenTodosCount() {
    return $this->find('count', array(
      'conditions' => array('Todo.status_id' => 1)
    ));
  }

  /**
   * @param int $dateRange
   */

  public function getClosedTodosCount($dateRange = null) {
    if ($dateRange === 1) {
      $date = strtotime('-24 hour');
    } else {
      $date = strtotime('-' . $dateRange . ' day');
    }
    return $this->find('count', array(
      'conditions' => array(
        'Todo.status_id' => 2,
        'Todo.closed >=' => date('Y-m-d H:i:s', $date)
      )
    ));
  }
}
