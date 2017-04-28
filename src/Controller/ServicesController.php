<?php
namespace App\Controller;

use App\Controller\AppController;

/**
* Services Controller
*
* @property \App\Model\Table\ServicesTable $Services
*/
class ServicesController extends AppController
{

  /**
   * Displays a view
   *
   * @param string ...$path Path segments.
   * @return void|\Cake\Network\Response
   * @throws \Cake\Network\Exception\ForbiddenException When a directory traversal attempt.
   * @throws \Cake\Network\Exception\NotFoundException When the view file could not
   *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
   */
  public function display(...$path)
  {
      $count = count($path);
      if (!$count) {
          return $this->redirect('/');
      }
      if (in_array('..', $path, true) || in_array('.', $path, true)) {
          throw new ForbiddenException();
      }
      $page = $subpage = null;

      if (!empty($path[0])) {
          $page = $path[0];
      }
      if (!empty($path[1])) {
          $subpage = $path[1];
      }
      $this->set(compact('page', 'subpage'));

      try {
          $this->render(implode('/', $path));
      } catch (MissingTemplateException $e) {
          if (Configure::read('debug')) {
              throw $e;
          }
          throw new NotFoundException();
      }
  }

  /**
  * Index method
  *
  * @return \Cake\Network\Response|null
  */
  public function index()
  {
    // Redirect to homepage is user not logged in.
    if (!$this->Auth->user()) {
        $this->redirect('/');
    }

    $this->paginate = [
      'contain' => ['Users']
    ];
    $services = $this->paginate($this->Services);

    $this->set(compact('services'));
    $this->set('_serialize', ['services']);
  }

  /**
  * View method
  *
  * @param string|null $id Service id.
  * @return \Cake\Network\Response|null
  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
  */
  public function view($id)
  {
    $service = $this->Services->get($id, [
      'contain' => ['Users']
    ]);

    $this->set('service', $service);
    $this->set('_serialize', ['service']);
  }

  public function browse() {
    
    $this->redirect(['controller' => 'Services', 'action' => 'display', 'browse']);
  }
/**
* Detailed service view
  * @param string|null $id Service id.
  * @return \Cake\Network\Response|null
  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
*/
  public function detailed($id)
  {
    $service = $this->Services->get($id, [
      'contain' => ['Users']
      ]);

    $this->set('service', $service);
    $this->set('_serialize', ['service']);


  }

  /**
  * Add method
  *
  * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
  */
  public function add()
  {
    $service = $this->Services->newEntity();
    if ($this->request->is('post')) {
      $service = $this->Services->patchEntity($service, $this->request->getData());
      //echo $service;
      // Get currently logged in user
      $service->user_id = $this->Auth->user('id');
      echo $service->user_id;
      if ($this->Services->save($service)) {
        $this->Flash->success(__('The service has been saved.'));
        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('The service could not be saved. Please, try again.'));
    }
    $users = $this->Services->Users->find('list', ['limit' => 200]);
    $this->set(compact('service', 'users'));
    $this->set('_serialize', ['service']);
  }

  /**
  * Edit method
  *
  * @param string|null $id Service id.
  * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
  * @throws \Cake\Network\Exception\NotFoundException When record not found.
  */
  public function edit($id = null)
  {
    $service = $this->Services->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $service = $this->Services->patchEntity($service, $this->request->getData());
      if ($this->Services->save($service)) {
        $this->Flash->success(__('The service has been saved.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('The service could not be saved. Please, try again.'));
    }
    $users = $this->Services->Users->find('list', ['limit' => 200]);
    $this->set(compact('service', 'users'));
    $this->set('_serialize', ['service']);
  }

  public function isAuthorized($user) {
    // All registered users can add articles
    if ($this->request->getParam('action') === 'add') {
      return true;
    }
    // The owner of an article can edit and delete it
    if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
      $serviceId = (int)$this->request->getParam('pass.0');
      if ($this->Services->isOwnedBy($serviceId, $user['id'])) {
        return true;
      }
    }
    return parent::isAuthorized($user);
  }

  public function isOwnedBy($serviceId, $userId)
  {
    return $this->exists(['id' => $serviceId, 'user_id' => $userId]);
  }

  public function getUsername($user_id)
  {
     //// $userid = h($service->user_id);
         //   echo $userid;
           $query = $this->Services->Users->find('first', array(
        'conditions' => array('users.user_id' => $userid)));
    return $query->$username;
  }

  /**
  * Delete method
  *
  * @param string|null $id Service id.
  * @return \Cake\Network\Response|null Redirects to index.
  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
  */
  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $service = $this->Services->get($id);
    if ($this->Services->delete($service)) {
      $this->Flash->success(__('The service has been deleted.'));
    } else {
      $this->Flash->error(__('The service could not be deleted. Please, try again.'));
    }

    return $this->redirect(['action' => 'index']);
  }
}
