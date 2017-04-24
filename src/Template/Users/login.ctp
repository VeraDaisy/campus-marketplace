<!-- <div class="users form"> -->
<div class="container content-centered col-md-4 col-md-offset-4">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Login to Your Account') ?></legend>
        <?= $this->Form->control('username', array('placeholder' => 'Enter your username')) ?>
        <?= $this->Form->control('password', array('placeholder' => 'Enter your password')); ?>
    </fieldset>
    <br />
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>

<div class="container content-centered">
  <p>Don't have an account? <a href="<?= BASE_URL ?>/users/add">Click here to create one</a>.</p>
</div>
