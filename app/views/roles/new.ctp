<h2><?php __('New role'); ?></h2> 

<!-- <% labelled_tabular_form_for :role, @role, :url => { :action => 'new' }, :html => {:id => 'role_form'} do |f| %> -->
<?php echo $form->create('Role', array('action' => 'add','id' => 'role_form','class' => 'tabular')); ?>

<!-- <%= render :partial => 'form', :locals => { :f => f } %> -->

<?php echo $this->renderElement('roles/form'); ?>

<?php echo $form->submit(__('Save', TRUE)); ?>
<?php echo $form->end(); ?>
