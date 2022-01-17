<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="col-xs-12">
<?php
echo $this->Form->create($ticket, ['templates'=>'bs4form']);
echo $this->Form->control('title');
echo $this->Form->control('description');
echo $this->Form->control('tickettype_id', ['label'=>'Type of ticket']);
echo $this->Form->control('ticketstatus_id', ['label'=>'Status']);
echo $this->Form->submit(__('Submit'));
echo $this->Form->end();
?>
</div>