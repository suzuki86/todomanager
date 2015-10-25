<?php

class TodosController extends AppController {

  public $uses = array('Todo', 'Status', 'Project');

  private $duedate_options = array(
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

  public function index() {
    if(
      isset($this->request->query['filter'])
      && $this->request->query['filter'] === 'all'
    ) {
      $todos = $this->Todo->getAllTodos();
    } else {
      $todos = $this->Todo->getAllOpenTodos();
    }
    $this->set('todos', $todos);
  }

  public function add() {
    if ($this->request->is('post')) {
      $this->Todo->create();
      if ($this->Todo->save($this->request->data)) {
        $this->Flash->success(__('The todo has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Flash->error(__('The todo could not be saved. Please, try again.'));
      }
    } else {
      $this->set('projects', $this->Project->find('list', array(
        'fields' => array('id', 'name')
      )));

      $this->set('statuses', $this->Status->find('list', array(
        'fields' => array('id', 'label')
      )));

      $this->set('duedate_options', $this->duedate_options);
    }
  }

  public function edit($id = null) {
    $this->set('projects', $this->Project->find('list', array(
      'fields' => array('id', 'name')
    )));

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
      $this->set('duedate_options', $this->duedate_options);
      $this->set('statuses', $this->Status->find('list', array(
        'fields' => array('id', 'label')
      )));
      $this->request->data = $this->Todo->findById($id);
    }
  }

  public function open() {
    $autoRender = false;
    $this->Todo->open($this->request->data['Todo']['id_to_open']);
    $this->redirect('/todos');
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
