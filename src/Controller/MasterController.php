<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Master Controller
 *
 * @property \App\Model\Table\MasterTable $Master
 *
 * @method \App\Model\Entity\Master[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MasterController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $master = $this->paginate($this->Master);

        $this->set(compact('master'));
    }

    /**
     * View method
     *
     * @param string|null $id Master id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $master = $this->Master->get($id, [
            'contain' => []
        ]);

        $this->set('master', $master);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $master = $this->Master->newEntity();
        if ($this->request->is('post')) {
            $master = $this->Master->patchEntity($master, $this->request->getData());
            if ($this->Master->save($master)) {
                $this->Flash->success(__('The master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The master could not be saved. Please, try again.'));
        }
        $this->set(compact('master'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Master id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $master = $this->Master->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $master = $this->Master->patchEntity($master, $this->request->getData());
            if ($this->Master->save($master)) {
                $this->Flash->success(__('The master has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The master could not be saved. Please, try again.'));
        }
        $this->set(compact('master'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Master id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $master = $this->Master->get($id);
        if ($this->Master->delete($master)) {
            $this->Flash->success(__('The master has been deleted.'));
        } else {
            $this->Flash->error(__('The master could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function player(){
        $players=$this->request->params['pass'];
        $masters=$this->Master->find('player',[
        'players' => $players
        ]);

        //pass to view
        $this->set(['masters'=>$masters, 'players'=>$players]);
    }
}
