<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Order.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Order.id')))); ?></li>
        <li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Order Items'), array('controller' => 'order_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Item'), array('controller' => 'order_items', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1><?php echo __('Order') ?>        <small>
                    <?php echo __('Edit'); ?>                </small>
    </h1>
    <?php echo $this->Form->create('Order'); ?>
    	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('billing_address');
		echo $this->Form->input('billing_address2');
		echo $this->Form->input('billing_city');
		echo $this->Form->input('billing_zip');
		echo $this->Form->input('billing_state');
		echo $this->Form->input('billing_country');
		echo $this->Form->input('shipping_address');
		echo $this->Form->input('shipping_address2');
		echo $this->Form->input('shipping_city');
		echo $this->Form->input('shipping_zip');
		echo $this->Form->input('shipping_state');
		echo $this->Form->input('shipping_country');
		echo $this->Form->input('weight');
		echo $this->Form->input('order_item_count');
		echo $this->Form->input('subtotal');
		echo $this->Form->input('tax');
		echo $this->Form->input('shipping');
		echo $this->Form->input('total');
		echo $this->Form->input('order_type');
		echo $this->Form->input('authorization');
		echo $this->Form->input('transaction');
		echo $this->Form->input('status');
		echo $this->Form->input('ip_address');
	?>
    <?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn btn-success')); ?>
</div>