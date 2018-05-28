<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Amigo Controller
 *
 * @property \App\Model\Table\AmigoTable $Amigo
 *
 * @method \App\Model\Entity\Amigo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AmigoController extends AppController
{

    public function beforeFilter(Event $event) 
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index', 'view']);
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->viewBuilder()->setLayout('novo_teste');
        $this->paginate = ['limit' => 10];
        $amigo = $this->paginate($this->Amigo);

        $this->set(compact('amigo'));
    }

    /**
     * View method
     *
     * @param string|null $id Amigo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->viewBuilder()->setLayout('novo_teste');

        $amigo = $this->Amigo->get($id, [
            'contain' => []
        ]);

        $this->set('amigo', $amigo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->viewBuilder()->setLayout('novo_teste');

        $amigo = $this->Amigo->newEntity();
        if ($this->request->is('post')) {
            $amigo = $this->Amigo->patchEntity($amigo, $this->request->getData());

            if ($this->Amigo->save($amigo)) {
                $this->Flash->success(__('The amigo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            
            $this->Flash->error(__('The amigo could not be saved. Please, try again.'));    
            
            
        }
        $this->set(compact('amigo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Amigo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {

        $this->viewBuilder()->setLayout('novo_teste');
        
        $amigo = $this->Amigo->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $amigo = $this->Amigo->patchEntity($amigo, $this->request->getData());
            if ($this->Amigo->save($amigo)) {
                $this->Flash->success(__('The amigo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The amigo could not be saved. Please, try again.'));
        }
        $this->set(compact('amigo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Amigo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $amigo = $this->Amigo->get($id);
        if ($this->Amigo->delete($amigo)) {
            $this->Flash->success(__('The amigo has been deleted.'));
        } else {
            $this->Flash->error(__('The amigo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
