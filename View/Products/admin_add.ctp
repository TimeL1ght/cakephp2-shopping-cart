<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
                <li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands'), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand'), array('controller' => 'brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productmods'), array('controller' => 'productmods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Productmod'), array('controller' => 'productmods', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1><?php echo __('Product') ?>        <small>
                    <?php echo __('New'); ?>                </small>
    </h1>
    <?php echo $this->Form->create('Product'); ?>
    	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('brand_id');
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
		echo $this->Form->input('description');
		echo $this->Form->input('image');
		echo $this->Form->input('price');
		echo $this->Form->input('weight');
		echo $this->Form->input('tags');
		echo $this->Form->input('views');
		echo $this->Form->input('active');
	?>
    <?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn btn-success')); ?>
</div>