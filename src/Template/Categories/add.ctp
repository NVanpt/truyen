<?php
echo $this->Form->input('parent_id', [
    'options' => $parentCategories,
    'empty' => 'No parent category'
]);