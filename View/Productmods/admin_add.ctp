<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
                <li><?php echo $this->Html->link(__('List Productmods'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1><?php echo __('Productmod') ?>        <small>
                    <?php echo __('New'); ?>                </small>
    </h1>
    <?php echo $this->Form->create('Productmod'); ?>
    	<?php
		echo $this->Form->input('product_id');
		echo $this->Form->input('sku');
		echo $this->Form->input('name');
		echo $this->Form->input('value');
		echo $this->Form->input('price');
		echo $this->Form->input('weight');
		echo $this->Form->input('active');
		echo $this->Form->input('views');
	?>
    <?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn btn-success')); ?>
</div>