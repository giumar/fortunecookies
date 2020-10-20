<div class="col">
<?php
	echo $this->Form->create($ticket, ['templates'=>'bs4form']);
	echo $this->Form->input('title');
	echo $this->Form->input('description');
	echo $this->Form->input('tickettype_id', ['options' => $types, 'label'=>'Type of ticket']);
	echo $this->Form->input('ticketstatus_id', ['options' => $statuses, 'label' => 'Status']);
	echo $this->Form->submit(__('Submit'));
	echo $this->Form->end();
?>
</div>
