<?php

class TodosController extends AppController {
  public function index() {
    $todos = $this->Todo->find('all',
      array(
        'fields' => array('Todo.id', 'Todo.title', 'Todo.detail', 'Todo.created', 'Todo.updated')
      )
    );
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
    }
  }

  public function edit() {
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
      $this->request->data = $this->Todo->findById($id);
    }
  }

  public function delete() {
    // Implement later.
  }
}
