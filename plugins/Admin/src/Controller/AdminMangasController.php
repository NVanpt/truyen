<?php
namespace Admin\Controller;
use Admin\Controller\AppController;
 use Cake\ORM\TableRegistry;
class AdminMangasController extends AppController
{
	public function initialize(){
		parent::initialize();
		$this->loadModel('Mangas');
	}

    public function index()
    {
       
        $admin_mangas=TableRegistry::get('mangas');
		$this->paginate = array(
       'limit' => 4,// mỗi page có 4 record
       'order' => array('id' => 'desc'),//giảm dần theo id
     );
     $data = $this->paginate("mangas");
     $this->set("data",$data);
    }
    public function add()
    {
        $mangas = $this->Mangas->newEntity();
        if ($this->request->is('post')) {
            $mangas = $this->Mangas->patchEntity($mangas, $this->request->data);
            if ($this->Mangas->save($mangas)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mangas'));
        $this->set('_serialize', ['mangas']);
    }
    public function edit($id=null)
   {
        $mangas = $this->Mangas->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $mangas = $this->Mangas->patchEntity($mangas, $this->request->data);
            if ($this->Mangas->save($mangas)) {
                $this->Flash->success(__('The manga has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The manga could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('mangas'));
        $this->set('_serialize', ['mangas']);
    }
     public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mangas = $this->Mangas->get($id);
        if ($this->Mangas->delete($mangas)) {
            $this->Flash->success(__('The manga has been deleted.'));
        } else {
            $this->Flash->error(__('The manga could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}