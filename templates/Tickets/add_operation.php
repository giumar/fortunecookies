<?php

/**
 * @var \App\View\AppView $this
 */
use Cake\I18n\I18n;
?>
<div class="col-xs-12">
    <?= $this->Form->create($newOperation, ['templates' => 'bs4form']) ?>
<?= $this->Form->hidden('ticket_id', ['value' => $newOperation->ticket_id]); ?>
    <div class='col-xs-3'>
        <div class="form-group">
            <div class='input-group date' id='date-start'>
<?= $this->Form->dateTime('start'); ?>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class='col-xs-3'>
        <div class="form-group">
            <div class='input-group date' id='date-end'>
<?= $this->Form->dateTime('end'); ?>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
        </div>
    </div>
    <div class="col-xs-12"><?php echo $this->Form->textarea('description'); ?></div>
    <div class="col-xs-12"><?= $this->Form->submit(__('Submit')) ?></div>
<?= $this->Form->end() ?>
    <script type="text/javascript">
        $(function () {
            $('#date-start').datetimepicker({locale: '<?= I18n::getLocale() ?>'});
            $('#date-end').datetimepicker({locale: '<?= I18n::getLocale() ?>'});
        });
    </script>
</div>
