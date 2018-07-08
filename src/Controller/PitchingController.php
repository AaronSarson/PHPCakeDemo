<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Pitching Controller
 *
 * @property \App\Model\Table\PitchingTable $Pitching
 *
 * @method \App\Model\Entity\Pitching[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PitchingController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $pitching = $this->paginate($this->Pitching);

        $this->set(compact('pitching'));
    }

    /**
     * View method
     *
     * @param string|null $id Pitching id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pitching = $this->Pitching->get($id, [
            'contain' => []
        ]);

        $this->set('pitching', $pitching);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pitching = $this->Pitching->newEntity();
        if ($this->request->is('post')) {
            $pitching = $this->Pitching->patchEntity($pitching, $this->request->getData());
            if ($this->Pitching->save($pitching)) {
                $this->Flash->success(__('The pitching has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pitching could not be saved. Please, try again.'));
        }
        $this->set(compact('pitching'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pitching id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pitching = $this->Pitching->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pitching = $this->Pitching->patchEntity($pitching, $this->request->getData());
            if ($this->Pitching->save($pitching)) {
                $this->Flash->success(__('The pitching has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pitching could not be saved. Please, try again.'));
        }
        $this->set(compact('pitching'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pitching id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pitching = $this->Pitching->get($id);
        if ($this->Pitching->delete($pitching)) {
            $this->Flash->success(__('The pitching has been deleted.'));
        } else {
            $this->Flash->error(__('The pitching could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
