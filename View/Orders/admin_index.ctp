<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li><?php echo $this->Html->link(__('New Order'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Order Items'), array('controller' => 'order_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Item'), array('controller' => 'order_items', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <?php echo $this->Flash->render() ?>    <h1 class="page-header"><?php echo __('Orders'); ?></h1>
    <div class="table-responsive">
        <table class="table table-striped">
        <thead>
        <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('first_name'); ?></th>
                    <th><?php echo $this->Paginator->sort('last_name'); ?></th>
                    <th><?php echo $this->Paginator->sort('email'); ?></th>
                    <th><?php echo $this->Paginator->sort('phone'); ?></th>
                    <th><?php echo $this->Paginator->sort('billing_address'); ?></th>
                    <th><?php echo $this->Paginator->sort('billing_address2'); ?></th>
                    <th><?php echo $this->Paginator->sort('billing_city'); ?></th>
                    <th><?php echo $this->Paginator->sort('billing_zip'); ?></th>
                    <th><?php echo $this->Paginator->sort('billing_state'); ?></th>
                    <th><?php echo $this->Paginator->sort('billing_country'); ?></th>
                    <th><?php echo $this->Paginator->sort('shipping_address'); ?></th>
                    <th><?php echo $this->Paginator->sort('shipping_address2'); ?></th>
                    <th><?php echo $this->Paginator->sort('shipping_city'); ?></th>
                    <th><?php echo $this->Paginator->sort('shipping_zip'); ?></th>
                    <th><?php echo $this->Paginator->sort('shipping_state'); ?></th>
                    <th><?php echo $this->Paginator->sort('shipping_country'); ?></th>
                    <th><?php echo $this->Paginator->sort('weight'); ?></th>
                    <th><?php echo $this->Paginator->sort('order_item_count'); ?></th>
                    <th><?php echo $this->Paginator->sort('subtotal'); ?></th>
                    <th><?php echo $this->Paginator->sort('tax'); ?></th>
                    <th><?php echo $this->Paginator->sort('shipping'); ?></th>
                    <th><?php echo $this->Paginator->sort('total'); ?></th>
                    <th><?php echo $this->Paginator->sort('order_type'); ?></th>
                    <th><?php echo $this->Paginator->sort('authorization'); ?></th>
                    <th><?php echo $this->Paginator->sort('transaction'); ?></th>
                    <th><?php echo $this->Paginator->sort('status'); ?></th>
                    <th><?php echo $this->Paginator->sort('ip_address'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($orders as $order): ?>
	<tr>
		<td><?php echo h($order['Order']['id']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['email']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['phone']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['billing_address']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['billing_address2']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['billing_city']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['billing_zip']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['billing_state']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['billing_country']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['shipping_address']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['shipping_address2']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['shipping_city']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['shipping_zip']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['shipping_state']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['shipping_country']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['weight']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['order_item_count']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['subtotal']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['tax']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['shipping']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['total']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['order_type']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['authorization']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['transaction']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['status']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['ip_address']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['created']); ?>&nbsp;</td>
		<td><?php echo h($order['Order']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $order['Order']['id']), array('class' => 'btn btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $order['Order']['id']), array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $order['Order']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $order['Order']['id']), 'class' => 'btn btn-danger')); ?>
		</td>
	</tr>
<?php endforeach; ?>
        </tbody>
        </table>
    </div>
    <p>
    <?php
    echo $this->Paginator->counter(array(
        'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
    ));
    ?>    </p>
    <div class="paging">
    <?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
    </div>
</div>

