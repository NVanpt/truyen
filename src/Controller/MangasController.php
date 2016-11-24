<?php 
namespace App\Controller;
use Cake\ORM\TableRegistry;
class MangasController extends AppController
{
	var $helpers = array('Paginator','Html');
	var $paginate = array();
	public function index(){
		/*public $paginate =[
			'fields'=>['manga.id','manga.images','manga.title'],
			'limit'=>8,
			'order'=>['manga.title'=>'asc']
		];*/
		$mangas=TableRegistry::get('mangas');
		$query=$mangas->find();
		/*->order(['id' => 'DESC'])
	    ->limit(8);*/
		$this->set(array('data'=>$query));
	    
		/*truyen noi bat*/
		
	/* phân loại truyện*/
		
		$query_1 = $mangas
	    ->find()
	    ->where(['categories_id =' => 1]);
	    $this->set(array('data_1'=>$query_1));
	    $query_2 = $mangas
	    ->find()
	    ->where(['categories_id =' => 4]);
	    $this->set(array('data_2'=>$query_2));
	    $query_3 = $mangas
	    ->find()
	    ->where(['categories_id =' => 5]);
	    $this->set(array('data_3'=>$query_3));
	    $query_4 = $mangas
	    ->find()
	    ->where(['categories_id =' => 10]);
	    $this->set(array('data_4'=>$query_4));
	    /*truyen moi*/
	    $query_5 = $mangas->find()
	    ->order(['id' => 'DESC'])
	    ->limit(9);
	    $this->set(array('data_5'=>$query_5));
		/*thể loại truyện*/
		$categories=TableRegistry::get('categories');
		$query_6 = $categories->find()
	    ->order(['id' => 'DESC'])
	    ->limit(3);
	    $this->set(array('data_6'=>$query_6));
	    /*truyện đọc nhiều nhất*/
	    //$post=TableRegistry::get('Admin.posts');
	    $this->loadModel("Admin.Posts");
	    $posts = $this->Posts->find('all', [
		    'limit' => 5,
		    'order' => 'Posts.created DESC'
		]);
		$this->set(array('post'=>$posts));
		/*Pagination*/
		
		$this->paginate = array(
       'limit' => 4,// mỗi page có 4 record
       'order' => array('id' => 'desc'),//giảm dần theo id
     );

		$this->set('records', $this->paginate("mangas"));
	}
	public function TopManga(){
		$mangas=TableRegistry::get('mangas');
		$this->paginate = array(
       'limit' => 4,// mỗi page có 4 record
       'order' => array('id' => 'desc'),//giảm dần theo id
     );
     $data = $this->paginate("mangas");
     $this->set("data",$data);
	}
	 public function detailManga($id = null){
	 	/*$options=array('conditions'=>array('Mangas.slug'=>$slug));
	 	$mana = $this->Mangas->find($options);
	 	if(empty($mana)){
	 		throw new NotFoundException(__('Không tìm thấy quyển sách này'));
	 	}
	 	$this->set(compact('mana'));
	 	$this->set('_serialize','mana');*/
	 	$mana = $this->Mangas->get($id,['
	 		']);
	 	//debug($mana);die;
	 	$this->set(compact('mana'));
	 	$this->set('_serialize','mana');

	 	 /*truyen moi*/
	 	$this->loadModel("Mangas");
	    $query_5 = $this->Mangas->find()
	    ->order(['id' => 'DESC'])
	    ->limit(9);
	    $this->set(array('data_5'=>$query_5));

	 	$query_1 = $this->Mangas
	    ->find()
	    ->where(['categories_id =' => 1]);
	    $this->set(array('data_1'=>$query_1));
	    $query_2 = $this->Mangas
	    ->find()
	    ->where(['categories_id =' => 4]);
	    $this->set(array('data_2'=>$query_2));
	    $query_3 = $this->Mangas
	    ->find()
	    ->where(['categories_id =' => 5]);
	    $this->set(array('data_3'=>$query_3));
	    $query_4 = $this->Mangas
	    ->find()
	    ->where(['categories_id =' => 10]);
	    $this->set(array('data_4'=>$query_4));
	   
	}
	public function read()
	{
		
	}
	public function managerIndex()
	{
		$mangas=TableRegistry::get('mangas');
		$query=$mangas->find();
		$this->set(array('data'=>$query));
	}
}