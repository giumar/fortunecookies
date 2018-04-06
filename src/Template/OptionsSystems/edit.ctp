<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\OptionsSystem $optionsSystem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $optionsSystem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $optionsSystem->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Options Systems'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="optionsSystems form large-9 medium-8 columns content">
    <?= $this->Form->create($optionsSystem) ?>
    <fieldset>
        <legend><?= __('Edit Options System') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
