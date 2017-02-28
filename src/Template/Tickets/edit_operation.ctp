<?php
/**
  * @var \App\View\AppView $this
  */
use Cake\I18n\I18n;
?>
<div class="col-xs-12">
    <?= $this->Form->create($operation, ['templates'=>'bs4form']) ?>
<<<<<<< HEAD
	<?= $this->Form->hidden('ticket_id', ['value' => $operation->ticket_id]); ?>
=======
	<?php
		echo $this->Form->input('ticket_id', ['options' => $tickets]);
		/*echo $this->Form->input('start');
		echo $this->Form->input('end');
		*/
	?>
>>>>>>> cdd63adabbce4d5f2cf5eabf35f138f974ed23ef
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
<<<<<<< HEAD
	<div class="col-xs-12"><?php echo $this->Form->input('description'); ?></div>
	<div class="col-xs-12"><?= $this->Form->submit(__('Submit')) ?></div>
	<?= $this->Form->end() ?>
	<script type="text/javascript">
		$(function () {
			$('#date-start').datetimepicker({ locale: '<?= I18n::locale() ?>'});
			$('#date-end').datetimepicker({ locale: '<?= I18n::locale() ?>' });
		});
	</script>
</div>
=======
	<?php
		echo $this->Form->input('description');
	?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script type="text/javascript">
	$(function () {
		$('#date-start').datetimepicker({ locale: '<?= I18n::locale() ?>'});
		$('#date-end').datetimepicker({ locale: '<?= I18n::locale() ?>' });
	});
</script>
>>>>>>> cdd63adabbce4d5f2cf5eabf35f138f974ed23ef
