<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Alumno Controller
 *
 * @property \App\Model\Table\AlumnoTable $Alumno
 *
 * @method \App\Model\Entity\Alumno[] paginate($object = null, array $settings = [])
 */
class AlumnoController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $alumno = $this->paginate($this->Alumno);

        $this->set(compact('alumno'));
        $this->set('_serialize', ['alumno']);
    }

    /**
     * View method
     *
     * @param string|null $id Alumno id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $alumno = $this->Alumno->get($id, [
            'contain' => []
        ]);

        $this->set('alumno', $alumno);
        $this->set('_serialize', ['alumno']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $alumno = $this->Alumno->newEntity();
        if ($this->request->is('post')) {
            $alumno = $this->Alumno->patchEntity($alumno, $this->request->getData());
            if ($this->Alumno->save($alumno)) {
                $this->Flash->success(__('The alumno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumno could not be saved. Please, try again.'));
        }
        $this->set(compact('alumno'));
        $this->set('_serialize', ['alumno']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Alumno id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $alumno = $this->Alumno->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $alumno = $this->Alumno->patchEntity($alumno, $this->request->getData());
            if ($this->Alumno->save($alumno)) {
                $this->Flash->success(__('The alumno has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The alumno could not be saved. Please, try again.'));
        }
        $this->set(compact('alumno'));
        $this->set('_serialize', ['alumno']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Alumno id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $alumno = $this->Alumno->get($id);
        if ($this->Alumno->delete($alumno)) {
            $this->Flash->success(__('The alumno has been deleted.'));
        } else {
            $this->Flash->error(__('The alumno could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
