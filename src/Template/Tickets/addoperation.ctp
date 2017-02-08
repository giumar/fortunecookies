<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="row">
    <?= $this->Form->create($newOperation) ?>
    <fieldset>
        <legend><?= __('Add Operation') ?></legend>
        <?php
            echo $this->Form->hidden('ticket_id', ['value' => $newOperation->ticket_id]);
            echo $this->Form->input('start');
            echo $this->Form->input('end');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
