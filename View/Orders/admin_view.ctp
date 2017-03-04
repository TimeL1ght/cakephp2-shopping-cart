<div class="orders view">
<h2><?php echo __('Order'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($order['Order']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($order['Order']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($order['Order']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($order['Order']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($order['Order']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Address'); ?></dt>
		<dd>
			<?php echo h($order['Order']['billing_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Address2'); ?></dt>
		<dd>
			<?php echo h($order['Order']['billing_address2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing City'); ?></dt>
		<dd>
			<?php echo h($order['Order']['billing_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Zip'); ?></dt>
		<dd>
			<?php echo h($order['Order']['billing_zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing State'); ?></dt>
		<dd>
			<?php echo h($order['Order']['billing_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Billing Country'); ?></dt>
		<dd>
			<?php echo h($order['Order']['billing_country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Address'); ?></dt>
		<dd>
			<?php echo h($order['Order']['shipping_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Address2'); ?></dt>
		<dd>
			<?php echo h($order['Order']['shipping_address2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping City'); ?></dt>
		<dd>
			<?php echo h($order['Order']['shipping_city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Zip'); ?></dt>
		<dd>
			<?php echo h($order['Order']['shipping_zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping State'); ?></dt>
		<dd>
			<?php echo h($order['Order']['shipping_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping Country'); ?></dt>
		<dd>
			<?php echo h($order['Order']['shipping_country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Weight'); ?></dt>
		<dd>
			<?php echo h($order['Order']['weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Item Count'); ?></dt>
		<dd>
			<?php echo h($order['Order']['order_item_count']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Subtotal'); ?></dt>
		<dd>
			<?php echo h($order['Order']['subtotal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tax'); ?></dt>
		<dd>
			<?php echo h($order['Order']['tax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Shipping'); ?></dt>
		<dd>
			<?php echo h($order['Order']['shipping']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total'); ?></dt>
		<dd>
			<?php echo h($order['Order']['total']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order Type'); ?></dt>
		<dd>
			<?php echo h($order['Order']['order_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Authorization'); ?></dt>
		<dd>
			<?php echo h($order['Order']['authorization']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transaction'); ?></dt>
		<dd>
			<?php echo h($order['Order']['transaction']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($order['Order']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ip Address'); ?></dt>
		<dd>
			<?php echo h($order['Order']['ip_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($order['Order']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($order['Order']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Order'), array('action' => 'edit', $order['Order']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Order'), array('action' => 'delete', $order['Order']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Items'), array('controller' => 'order_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Item'), array('controller' => 'order_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Order Items'); ?></h3>
	<?php if (!empty($order['OrderItem'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Order Id'); ?></th>
		<th><?php echo __('Product Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Weight'); ?></th>
		<th><?php echo __('Price'); ?></th>
		<th><?php echo __('Subtotal'); ?></th>
		<th><?php echo __('Productmod Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($order['OrderItem'] as $orderItem): ?>
		<tr>
			<td><?php echo $orderItem['id']; ?></td>
			<td><?php echo $orderItem['order_id']; ?></td>
			<td><?php echo $orderItem['product_id']; ?></td>
			<td><?php echo $orderItem['name']; ?></td>
			<td><?php echo $orderItem['quantity']; ?></td>
			<td><?php echo $orderItem['weight']; ?></td>
			<td><?php echo $orderItem['price']; ?></td>
			<td><?php echo $orderItem['subtotal']; ?></td>
			<td><?php echo $orderItem['productmod_name']; ?></td>
			<td><?php echo $orderItem['created']; ?></td>
			<td><?php echo $orderItem['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'order_items', 'action' => 'view', $orderItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'order_items', 'action' => 'edit', $orderItem['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'order_items', 'action' => 'delete', $orderItem['id']), array('confirm' => __('Are you sure you want to delete # %s?', $orderItem['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order Item'), array('controller' => 'order_items', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
