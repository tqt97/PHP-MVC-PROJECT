<?php
use app\core\form\Form;
?>
<h1 class="text-center text-bold">Register form</h1>
<?php $form = Form::begin('', "post") ?>
<div class="row">
    <div class="col">
        <?php echo $form->field($model, 'firstname') ?>
    </div>
    <div class="col">
        <?php echo $form->field($model, 'lastname') ?>
    </div>
</div>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<?php echo $form->field($model, 'passwordConfirm')->passwordField() ?>
<button type="submit" class="btn btn-success" id="submit">Register</button>
<?php Form::end() ?>