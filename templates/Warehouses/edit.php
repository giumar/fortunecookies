<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Warehouse $warehouse
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $warehouse->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $warehouse->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Warehouses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="warehouses form large-9 medium-8 columns content">
    <?= $this->Form->create($warehouse) ?>
    <fieldset>
        <legend><?= __('Edit Warehouse') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
