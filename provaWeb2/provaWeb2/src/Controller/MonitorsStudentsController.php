<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MonitorsStudents Controller
 *
 * @property \App\Model\Table\MonitorsStudentsTable $MonitorsStudents
 *
 * @method \App\Model\Entity\MonitorsStudent[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MonitorsStudentsController extends AppController
{
     if (in_array($this->request->action, ['edit', 'delete'])) {
        $monitorsStudentsId = (int)$this->request->params['pass'][0];
        if ($this->MonitorsStudents->isOwnedBy($monitorsStudentsId, $user['id'])) {
            return true;
            }
        }
        return parent::isAuthorized($user);
        }
       public function isAuthorized($user)
    {
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Monitors', 'Students']
        ];
        $monitorsStudents = $this->paginate($this->MonitorsStudents);

        $this->set(compact('monitorsStudents'));
    }

    /**
     * View method
     *
     * @param string|null $id Monitors Student id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $monitorsStudent = $this->MonitorsStudents->get($id, [
            'contain' => ['Monitors', 'Students']
        ]);

        $this->set('monitorsStudent', $monitorsStudent);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $monitorsStudent = $this->MonitorsStudents->newEntity();
        if ($this->request->is('post')) {
            $monitorsStudent = $this->MonitorsStudents->patchEntity($monitorsStudent, $this->request->getData());
            $monitorsStudent->user_id = $this->Auth->user('id');
            if ($this->MonitorsStudents->save($monitorsStudent)) {
                $this->Flash->success(__('The monitors student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monitors student could not be saved. Please, try again.'));
        }
        $monitors = $this->MonitorsStudents->Monitors->find('list', ['limit' => 200]);
        $students = $this->MonitorsStudents->Students->find('list', ['limit' => 200]);
        $this->set(compact('monitorsStudent', 'monitors', 'students'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Monitors Student id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $monitorsStudent = $this->MonitorsStudents->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $monitorsStudent = $this->MonitorsStudents->patchEntity($monitorsStudent, $this->request->getData());
            if ($this->MonitorsStudents->save($monitorsStudent)) {
                $this->Flash->success(__('The monitors student has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monitors student could not be saved. Please, try again.'));
        }
        $monitors = $this->MonitorsStudents->Monitors->find('list', ['limit' => 200]);
        $students = $this->MonitorsStudents->Students->find('list', ['limit' => 200]);
        $this->set(compact('monitorsStudent', 'monitors', 'students'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Monitors Student id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $monitorsStudent = $this->MonitorsStudents->get($id);
        if ($this->MonitorsStudents->delete($monitorsStudent)) {
            $this->Flash->success(__('The monitors student has been deleted.'));
        } else {
            $this->Flash->error(__('The monitors student could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function isAuthorized($user)
    {
        // All registered users can add articles
        // Prior to 3.4.0 $this->request->param('action') was used.
        if ($this->request->getParam('action') === 'add') {
            return true;
        }

        // The owner of an article can edit and delete it
        // Prior to 3.4.0 $this->request->param('action') was used.
        if (in_array($this->request->getParam('action'), ['edit', 'delete'])) {
            // Prior to 3.4.0 $this->request->params('pass.0')
            $articleId = (int)$this->request->getParam('pass.0');
            if ($this->Articles->isOwnedBy($articleId, $user['id'])) {
                return true;
            }
        }

        return parent::isAuthorized($user);
    }
}