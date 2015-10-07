<?php

class TodosController extends AppController {
  public function index() {
    $this->loadModel('Status');
    $todos = $this->Todo->getAllOpenTodos();
    $this->set('todos', $todos);
  }

  public function add() {
    $this->loadModel('Project');
    $this->set('projects', $this->Project->find('list', array(
      'fields' => array('id', 'name')
    )));

    $this->loadModel('Status');
    $this->set('statuses', $this->Status->find('list', array(
      'fields' => array('id', 'label')
    )));

    if ($this->request->is('post')) {
      $this->Todo->create();
      if ($this->Todo->save($this->request->data)) {
        $this->Flash->success(__('The todo has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Flash->error(__('The todo could not be saved. Please, try again.'));
      }
    }
  }

  public function edit($id = null) {
    $this->loadModel('Project');
    $this->set('projects', $this->Project->find('list', array(
      'fields' => array('id', 'name')
    )));

    $this->loadModel('Status');
    $this->Todo->id = $id;
    if (!$this->Todo->exists()) {
      throw new NotFoundException(__('Invalid todo'));
    }
    if ($this->request->is('post') || $this->request->is('put')) {
      if ($this->Todo->save($this->request->data)) {
        $this->Flash->success(__('The todo has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Flash->error(__('The todo could not be saved. Please, try again.'));
      }
    } else {
      $duedate_options = array(
        'label' => false,
        'type' => 'datetime',
        'timeFormat' => 24,
        'dateFormat' => 'YMD',
        'legend' => false,
        'label' => false,
        'div' => false,
        'interval' => 1,
        'monthNames' => false,
        'class' => 'selectbox'
      );
      $this->set('duedate_options', $duedate_options);
      $this->set('statuses', $this->Status->find('list', array(
        'fields' => array('id', 'label')
      )));
      $this->request->data = $this->Todo->findById($id);
    }
  }

  public function close() {
    $autoRender = false;
    $this->Todo->close($this->request->data['Todo']['id_to_close']);
    $this->redirect('/todos');
  }

  public function delete() {
    // Implement later.
  }
}
