<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="col-xs-12">
    <?= $this->Form->create($newOperation, ['templates'=>'bs4form']) ?>
    <fieldset>
        <legend><?= __('Add Operation') ?></legend>
        <?= $this->Form->hidden('ticket_id', ['value' => $newOperation->ticket_id]); ?>
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
		<div class="col-xs-1"></div>
        <script type="text/javascript">
            $(function () {
                $('#date-start').datetimepicker({ locale:'en' });
				$('#date-end').datetimepicker({ locale:'en' });
            });
        </script>
        <?php echo $this->Form->input('description'); ?>
    </fieldset>
    <?= $this->Form->submit(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
