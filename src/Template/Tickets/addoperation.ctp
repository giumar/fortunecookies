<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="col-xs-12">
    <?= $this->Form->create($newOperation, ['templates'=>'bs4form']) ?>
    <fieldset>
        <legend><?= __('Add Operation') ?></legend>
        <?php
            echo $this->Form->hidden('ticket_id', ['value' => $newOperation->ticket_id]);
            echo $this->Form->input('start');
            echo $this->Form->input('end');
        ?>
    </fieldset>
    <?= $this->Form->submit(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
