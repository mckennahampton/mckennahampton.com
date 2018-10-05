<h2>Add Portfolio</h2>

<?php echo $this->form->create($model->name, array('is_admin' => $this->is_admin)); ?>
<?php echo $this->form->open_admin_table(); ?>
<?php echo $this->form->input('name'); ?>
<?php echo $this->form->input('url', array('label' => 'View URL', 'style' => 'width: 300px;')); ?>
<?php echo $this->form->input('description'); ?>
<?php echo $this->form->input('platform'); ?>
<?php echo $this->form->input('technologies'); ?>
<?php echo $this->form->input('this_site_url', array('label' => 'This website URL', 'style' => 'width: 300px;')); ?>
<?php echo $this->form->input('client_logo'); ?>
<?php echo $this->form->close_admin_table(); ?>
<?php echo $this->form->end('Add'); ?>