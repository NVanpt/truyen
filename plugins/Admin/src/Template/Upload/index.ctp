

<?php
echo $this->Form->create('Upload', array( 'type' => 'file'));
echo $this->Form->input('pdf_path', array('type' => 'file','label' => 'Pdf'));
echo $this->Form->button('Upload', array('type' => 'submit'));
?>