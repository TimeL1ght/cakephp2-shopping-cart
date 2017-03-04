<div class="col-sm-3 col-md-2 sidebar">
    <ul class="nav nav-sidebar">
        <?php if (strpos($action, 'add') === false): ?>
        <li><?php echo "<?php echo \$this->Form->postLink(__('Delete'), array('action' => 'delete', \$this->Form->value('{$modelClass}.{$primaryKey}')), array('confirm' => __('Are you sure you want to delete # %s?', \$this->Form->value('{$modelClass}.{$primaryKey}')))); ?>"; ?></li>
<?php endif; ?>
        <li><?php echo "<?php echo \$this->Html->link(__('List " . $pluralHumanName . "'), array('action' => 'index')); ?>"; ?></li>
<?php
        $done = array();
        foreach ($associations as $type => $data) {
            foreach ($data as $alias => $details) {
                if ($details['controller'] != $this->name && !in_array($details['controller'], $done)) {
                    echo "\t\t<li><?php echo \$this->Html->link(__('List " . Inflector::humanize($details['controller']) . "'), array('controller' => '{$details['controller']}', 'action' => 'index')); ?> </li>\n";
                    echo "\t\t<li><?php echo \$this->Html->link(__('New " . Inflector::humanize(Inflector::underscore($alias)) . "'), array('controller' => '{$details['controller']}', 'action' => 'add')); ?> </li>\n";
                    $done[] = $details['controller'];
                }
            }
        }
?>
    </ul>
</div>
<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h1><?php echo "<?php echo __('".Inflector::humanize($singularHumanName)."') ?>"; ?>
        <small>
        <?php if (strpos($action, 'add') === false): ?>
            <?php echo "<?php echo __('Edit'); ?>"; ?>
        <?php else: ?>
            <?php echo "<?php echo __('New'); ?>"; ?>
        <?php endif; ?>
        </small>
    </h1>
    <?php echo "<?php echo \$this->Form->create('{$modelClass}'); ?>\n"; ?>
    <?php
        echo "\t<?php\n";
        foreach ($fields as $field) {
            if (strpos($action, 'add') !== false && $field === $primaryKey) {
                continue;
            } elseif (!in_array($field, array('created', 'modified', 'updated'))) {
                echo "\t\techo \$this->Form->input('{$field}');\n";
            }
        }
        if (!empty($associations['hasAndBelongsToMany'])) {
            foreach ($associations['hasAndBelongsToMany'] as $assocName => $assocData) {
                echo "\t\techo \$this->Form->input('{$assocName}');\n";
            }
        }
        echo "\t?>\n";
    ?>
    <?php
        echo "<?php echo \$this->Form->end(array('label' => __('Submit'), 'class' => 'btn btn-success')); ?>\n";
    ?>
</div>