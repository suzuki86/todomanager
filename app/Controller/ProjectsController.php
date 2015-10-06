<?php

class ProjectsController extends AppController {
  public function index() {
    $projects = $this->Project->getAllProjects();
    $this->set('projects', $projects);
  }

  public function add() {
    if ($this->request->is('post')) {
      $this->Project->create();
      if ($this->Project->save($this->request->data)) {
        $this->Flash->success(__('The project has been saved'));
        $this->redirect(array('action' => 'index'));
      } else {
        $this->Flash->error(__('The project could not be saved. Please, try again.'));
      }
    }
  }

  public function edit() {
  }

  public function delete() {
  }
}
