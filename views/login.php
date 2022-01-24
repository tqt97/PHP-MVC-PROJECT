<?php
use app\core\form\Form;
?>
<h1 class="text-center text-bold">Login form</h1>

<?php $form = Form::begin('', "post") ?>
<?php echo $form->field($model, 'email') ?>
<?php echo $form->field($model, 'password')->passwordField() ?>
<button type="submit" class="btn btn-success" id="submit">Login</button>
<?php Form::end() ?>