<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
                <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tag.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('Tag.id')))); ?></li>
        <li><?php echo $this->Html->link(__('List Tags'), array('action' => 'index')); ?></li>
    </ul>
</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1><?php echo __('Tag') ?>        <small>
                    <?php echo __('Edit'); ?>                </small>
    </h1>
    <?php echo $this->Form->create('Tag'); ?>
    	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
    <?php echo $this->Form->end(array('label' => __('Submit'), 'class' => 'btn btn-success')); ?>
</div>