<h2>Edit Release</h2>

<?php echo $this->form->create($model->name, array('is_admin' => $this->is_admin)); ?>
<?php echo $this->form->open_admin_table(); ?>
<?php echo $this->form->input('name'); ?>
<?php echo $this->form->input('artist', array('label' => 'Artist', 'style' => 'width: 300px;')); ?>
<?php echo $this->form->input('bandcamp', array('label' => 'Bandcamp URL', 'style' => 'width: 300px;')); ?>
<?php echo $this->form->input('url', array('label' => 'URL', 'style' => 'width:300px;')); ?>
<?php echo $this->form->input('description'); ?>
<?php echo $this->form->input('price', array('label' => 'Price ($x.xx)')); ?>
<?php echo $this->form->input('publish_date', array('label' => 'Publised Date (xx-xx-xxxx)')); ?>
<?php echo $this->form->input('cover', array('label' => 'Cover Image URL')); ?>
<?php echo $this->form->input('contributors', array('label' => 'Album Contributors')); ?>
<?php echo $this->form->close_admin_table(); ?>
<?php echo $this->form->end('Update'); ?>