<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MonitorsUsers Controller
 *
 * @property \App\Model\Table\MonitorsUsersTable $MonitorsUsers
 *
 * @method \App\Model\Entity\MonitorsUser[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MonitorsUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Monitors', 'Users']
        ];
        $monitorsUsers = $this->paginate($this->MonitorsUsers);

        $this->set(compact('monitorsUsers'));
    }

    /**
     * View method
     *
     * @param string|null $id Monitors User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $monitorsUser = $this->MonitorsUsers->get($id, [
            'contain' => ['Monitors', 'Users']
        ]);

        $this->set('monitorsUser', $monitorsUser);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $monitorsUser = $this->MonitorsUsers->newEntity();
        if ($this->request->is('post')) {
            $monitorsUser = $this->MonitorsUsers->patchEntity($monitorsUser, $this->request->getData());
            if ($this->MonitorsUsers->save($monitorsUser)) {
                $this->Flash->success(__('The monitors user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monitors user could not be saved. Please, try again.'));
        }
        $monitors = $this->MonitorsUsers->Monitors->find('list', ['limit' => 200]);
        $users = $this->MonitorsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('monitorsUser', 'monitors', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Monitors User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $monitorsUser = $this->MonitorsUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $monitorsUser = $this->MonitorsUsers->patchEntity($monitorsUser, $this->request->getData());
            if ($this->MonitorsUsers->save($monitorsUser)) {
                $this->Flash->success(__('The monitors user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monitors user could not be saved. Please, try again.'));
        }
        $monitors = $this->MonitorsUsers->Monitors->find('list', ['limit' => 200]);
        $users = $this->MonitorsUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('monitorsUser', 'monitors', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Monitors User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $monitorsUser = $this->MonitorsUsers->get($id);
        if ($this->MonitorsUsers->delete($monitorsUser)) {
            $this->Flash->success(__('The monitors user has been deleted.'));
        } else {
            $this->Flash->error(__('The monitors user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function isAuthorized($user) {
        if ($this->request->action === 'add') {
            return true;
        }
            if (in_array($this->request->action, ['edit', 'delete'])) {
                $monitorsStudentId = (int)$this->request->params['pass'][0];
                if ($this->MonitorsStudents->isOwnedBy($monitorsStudentId, $user['id'])) {
                    return true;
                }
            }
        return parent::isAuthorized($user);
    }
}
