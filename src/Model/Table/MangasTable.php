<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class MangasTable extends Table
{
	public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        // Just add the belongsTo relation with CategoriesTable
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
        ]);
    }

}