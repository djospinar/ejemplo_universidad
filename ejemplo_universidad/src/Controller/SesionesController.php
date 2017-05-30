<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Sesiones Controller
 *
 * @property \App\Model\Table\SesionesTable $Sesiones
 *
 * @method \App\Model\Entity\Sesione[] paginate($object = null, array $settings = [])
 */
class SesionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $sesiones = $this->paginate($this->Sesiones);

        $this->set(compact('sesiones'));
        $this->set('_serialize', ['sesiones']);
    }

    /**
     * View method
     *
     * @param string|null $id Sesione id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sesione = $this->Sesiones->get($id, [
            'contain' => []
        ]);

        $this->set('sesione', $sesione);
        $this->set('_serialize', ['sesione']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sesione = $this->Sesiones->newEntity();
        if ($this->request->is('post')) {
            $sesione = $this->Sesiones->patchEntity($sesione, $this->request->getData());
            if ($this->Sesiones->save($sesione)) {
                $this->Flash->success(__('The sesione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sesione could not be saved. Please, try again.'));
        }
        $this->set(compact('sesione'));
        $this->set('_serialize', ['sesione']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sesione id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sesione = $this->Sesiones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sesione = $this->Sesiones->patchEntity($sesione, $this->request->getData());
            if ($this->Sesiones->save($sesione)) {
                $this->Flash->success(__('The sesione has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sesione could not be saved. Please, try again.'));
        }
        $this->set(compact('sesione'));
        $this->set('_serialize', ['sesione']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sesione id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sesione = $this->Sesiones->get($id);
        if ($this->Sesiones->delete($sesione)) {
            $this->Flash->success(__('The sesione has been deleted.'));
        } else {
            $this->Flash->error(__('The sesione could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
