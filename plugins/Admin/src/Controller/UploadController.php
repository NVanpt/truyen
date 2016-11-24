<?php
namespace Admin\Controller;
use Admin\Controller\AppController;
 use Cake\ORM\TableRegistry;

/**
 * Uploads Controller
 *
 * @property \App\Model\Table\PostsTable $Posts
 */
class UploadController extends AppController
{
	public function index()
	{
		 if ($this->request->is('post')) {
        $this->Upload->create();
        //Check if image has been uploaded
        if (!empty($this->request->data['Upload']['title'])) {
            $file = $this->request->data['Upload']['images'];

            $ext = substr(strtolower(strrchr($file['name'], '.')), 1);
            $arr_ext = array('jpg', 'jpeg', 'gif','png');

            if (in_array($ext, $arr_ext)) {
                move_uploaded_file($file['tmp_name'], WWW_ROOT . 'img/' . $file['name']);
                //prepare the filename for database entry
                $this->request->data['Upload']['images'] = $file['name'];
            }
        }

        if ($this->Upload->save($this->request->data)) {
            $this->Session->setFlash(__('The category has been saved.'));
            return $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash(__('The category could not be saved. Please, try again.'));
        }
    }
   		
}