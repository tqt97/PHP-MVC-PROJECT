<h1 class="text-center text-bold">Register form</h1>

<?php $form = \app\core\form\Form::begin('', "post") ?>
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
<?php \app\core\form\Form::end() ?>

<!-- <form action="" method="post">
    <div class="row">
        <div class="col">

        </div>
        <div class="col">

        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email" id="email" value="demo@gmail.com">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password" id="password">
    </div>
    <div class="mb-3">
        <label class="form-label">Password confirm</label>
        <input type="password" class="form-control" name="passwordConfirm" id="passwordConfirm">
    </div>
    <button type="submit" class="btn btn-success" id="submit">Register</button>
</form> -->