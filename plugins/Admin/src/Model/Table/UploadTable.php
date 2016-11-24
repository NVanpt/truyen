
<?php
namespace Admin\Model\Table;
use App\Model\Entity\Post;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
/**
 * Posts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 */
class UploadTable extends Table
{
    public $validate = array(
        'image' => array(
            'rule' => array('chkImageExtension'),
            'message' => 'Please Upload Valid Image.'
        )
    );



    public function chkImageExtension($data) {
       $return = true; 

       if($data['image']['name'] != ''){
            $fileData   = pathinfo($data['image']['name']);
            $ext        = $fileData['extension'];
            $allowExtension = array('gif', 'jpeg', 'png', 'jpg');

            if(in_array($ext, $allowExtension)) {
                $return = true; 
            } else {
                $return = false;
            }   
        } else {
            $return = false; 
        }   

        return $return;
    }   
}