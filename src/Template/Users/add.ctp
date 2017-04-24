<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
    </ul>
</nav> -->
<!-- <div class="users form large-9 medium-8 columns content"> -->
<div class="container content-centered">
    <?= $this->Form->create($user, array('class' => 'col-md-4 col-md-offset-4')) ?>
    <fieldset>
        <legend><?= __('Create an Account') ?></legend>
        <?php
            echo $this->Form->control('first_name', array('placeholder' => 'Enter first name'));
            echo $this->Form->control('last_name', array('placeholder' => 'Enter last name'));
            echo $this->Form->control('email', array('placeholder' => 'Enter @vt.edu email address'));
            echo $this->Form->control('username', array('placeholder' => 'Enter a username'));
            echo $this->Form->control('password', array('placeholder' => 'Enter a password'));
        ?>
    </fieldset>
    <br />
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<div class="container content-centered">
  <p>Already have an account? <a href="<?= BASE_URL ?>/users/login">Click here to login</a>.</p>
</div>
