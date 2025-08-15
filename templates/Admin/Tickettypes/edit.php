<?php
/**
 * @var \App\View\AppView $this
 */
?>
<ul class="h-menu">
    <li><?=
        $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tickettype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tickettype->id)]
        )
        ?></li>
    <li><?= $this->Html->link(__('List Tickettypes'), ['action' => 'index']) ?></li>
</ul>
<?= $this->Form->create($tickettype, ['templates' => 'bs4form']) ?>
    <?php
    echo $this->Form->control('name');
    ?>
<?= $this->Form->submit(__('Submit')) ?>
<?= $this->Form->end() ?>
