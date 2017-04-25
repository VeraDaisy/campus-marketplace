<?php
namespace App\Controller;

use App\Controller\AppController;

/**
* Users Controller
*
* @property \App\Model\Table\UsersTable $Users
*/
class UsersController extends AppController
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
    $users = $this->paginate($this->Users);

    $this->set(compact('users'));
    $this->set('_serialize', ['users']);
  }

  /**
  * View method
  *
  * @param string|null $id User id.
  * @return \Cake\Network\Response|null
  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
  */
  public function view($id = null)
  {
    $user = $this->Users->get($id, [
      'contain' => []
    ]);

    $this->set('user', $user);
    $this->set('_serialize', ['user']);
  }

  /**
  * Add method
  *
  * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
  */
  public function add()
  {
    $user = $this->Users->newEntity();
    // $user = $this->Users->newEntity(
    //   $this->request->getData(),
    //   ['validate' => 'add']
    // );
    if ($this->request->is('post')) {
      $user = $this->Users->patchEntity($user, $this->request->getData());
      if ($this->Users->save($user)) {
        $this->Flash->success(__('Account created. Please login.'));

        return $this->redirect(['controller' => 'Users', 'action' => 'display', 'login']);
      }
      $this->Flash->error(__('The user could not be saved. Please, try again.'));
    }
    $this->set(compact('user'));
    $this->set('_serialize', ['user']);
  }

  /**
  * Edit method
  *
  * @param string|null $id User id.
  * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
  * @throws \Cake\Network\Exception\NotFoundException When record not found.
  */
  public function edit($id = null)
  {
    $user = $this->Users->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $user = $this->Users->patchEntity($user, $this->request->getData());
      if ($this->Users->save($user)) {
        $this->Flash->success(__('The user has been saved.'));

        return $this->redirect(['action' => 'index']);
      }

      $this->Flash->error(__('The user could not be saved. Please, try again.'));
    }
    $this->set(compact('user'));
    $this->set('_serialize', ['user']);
  }

  /**
  * Delete method
  *
  * @param string|null $id User id.
  * @return \Cake\Network\Response|null Redirects to index.
  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
  */
  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $user = $this->Users->get($id);
    if ($this->Users->delete($user)) {
      $this->Flash->success(__('The user has been deleted.'));
    } else {
      $this->Flash->error(__('The user could not be deleted. Please, try again.'));
    }

    return $this->redirect(['action' => 'index']);
  }

  // public function beforeFilter(Event $event)
  // {
  //   parent::beforeFilter($event);
  //   // Allow users to register and logout.
  //   // You should not add the "login" action to allow list. Doing so would
  //   // cause problems with normal functioning of AuthComponent.
  //   $this->Auth->allow(['add', 'logout']);
  // }

  public function login()
  {
    if ($this->request->is('post')) {
      $user = $this->Auth->identify();
      if ($user) {
        $this->Auth->setUser($user);
        return $this->redirect($this->Auth->redirectUrl());
      }
      $this->Flash->error(__('Invalid username or password, try again'));
    }
  }

  public function logout()
  {
    return $this->redirect($this->Auth->logout());
  }

}
