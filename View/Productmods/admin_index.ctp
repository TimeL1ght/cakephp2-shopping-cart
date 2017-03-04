<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <li><?php echo $this->Html->link(__('New Productmod'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('controller' => 'products', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <?php echo $this->Flash->render() ?>    <h1 class="page-header"><?php echo __('Productmods'); ?></h1>
    <div class="table-responsive">
        <table class="table table-striped">
        <thead>
        <tr>
                    <th><?php echo $this->Paginator->sort('id'); ?></th>
                    <th><?php echo $this->Paginator->sort('product_id'); ?></th>
                    <th><?php echo $this->Paginator->sort('sku'); ?></th>
                    <th><?php echo $this->Paginator->sort('name'); ?></th>
                    <th><?php echo $this->Paginator->sort('value'); ?></th>
                    <th><?php echo $this->Paginator->sort('price'); ?></th>
                    <th><?php echo $this->Paginator->sort('weight'); ?></th>
                    <th><?php echo $this->Paginator->sort('active'); ?></th>
                    <th><?php echo $this->Paginator->sort('views'); ?></th>
                    <th><?php echo $this->Paginator->sort('created'); ?></th>
                    <th><?php echo $this->Paginator->sort('modified'); ?></th>
                    <th class="actions"><?php echo __('Actions'); ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($productmods as $productmod): ?>
	<tr>
		<td><?php echo h($productmod['Productmod']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($productmod['Product']['name'], array('controller' => 'products', 'action' => 'view', $productmod['Product']['id'])); ?>
		</td>
		<td><?php echo h($productmod['Productmod']['sku']); ?>&nbsp;</td>
		<td><?php echo h($productmod['Productmod']['name']); ?>&nbsp;</td>
		<td><?php echo h($productmod['Productmod']['value']); ?>&nbsp;</td>
		<td><?php echo h($productmod['Productmod']['price']); ?>&nbsp;</td>
		<td><?php echo h($productmod['Productmod']['weight']); ?>&nbsp;</td>
		<td><?php echo h($productmod['Productmod']['active']); ?>&nbsp;</td>
		<td><?php echo h($productmod['Productmod']['views']); ?>&nbsp;</td>
		<td><?php echo h($productmod['Productmod']['created']); ?>&nbsp;</td>
		<td><?php echo h($productmod['Productmod']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $productmod['Productmod']['id']), array('class' => 'btn btn-info')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $productmod['Productmod']['id']), array('class' => 'btn btn-warning')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $productmod['Productmod']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $productmod['Productmod']['id']), 'class' => 'btn btn-danger')); ?>
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

