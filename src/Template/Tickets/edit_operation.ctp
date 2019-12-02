<?php
/**
  * @var \App\View\AppView $this
  */
use Cake\I18n\I18n;
?>
<div class="col-xs-12">
    <?= $this->Form->create($operation, ['templates'=>'bs4form']) ?>
	<?= $this->Form->hidden('ticket_id', ['value' => $operation->ticket_id]); ?>
	<div class='col-xs-3'>
		<div class="form-group">
			<div class='input-group date' id='date-start'>
				<?= $this->Form->text('start'); ?>
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
		</div>
	</div>		
	<div class='col-xs-3'>
		<div class="form-group">
			<div class='input-group date' id='date-end'>
				<?= $this->Form->text('end'); ?>
				<span class="input-group-addon">
					<span class="glyphicon glyphicon-calendar"></span>
				</span>
			</div>
		</div>
	</div>
	<div class="col-xs-12"><?php echo $this->Form->input('description'); ?></div>
	<div class="col-xs-12"><?= $this->Form->submit(__('Submit')) ?></div>
	<?= $this->Form->end() ?>
</div>
<script type="text/javascript">
	$(function () {
		$('#date-start').datetimepicker({ locale: '<?= I18n::locale() ?>'});
		$('#date-end').datetimepicker({ locale: '<?= I18n::locale() ?>' });
	});
</script>
