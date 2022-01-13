<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $siteoption->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $siteoption->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Siteoptions'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="siteoptions form large-9 medium-8 columns content">
    <?= $this->Form->create($siteoption) ?>
    <fieldset>
        <legend><?= __('Edit Siteoption') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('value');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
