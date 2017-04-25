<?php
/**
  * @var \App\View\AppView $this
  */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav> -->
<div class="container content-centered">
<!-- <div class="services form large-9 medium-8 columns content"> -->
    <?= $this->Form->create($service, array('class' => 'col-md-4 col-md-offset-4')) ?>
    <fieldset>
        <legend><?= __('Add Service') ?></legend>
        <?php
            //echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('title', array('placeholder' => 'Enter service title'));
            // echo $this->Form->control('rating_point', array('placeholder' => 'Enter first name'));
            // echo $this->Form->control('rating_number', array('placeholder' => 'Enter first name'));
            // echo $this->Form->control('current_rating', array('placeholder' => 'Enter first name'));
            echo $this->Form->control('description', array('placeholder' => 'Enter service description'));
            echo $this->Form->control('url', array('placeholder' => 'Enter service website'));
            echo $this->Form->control('image_url', array('placeholder' => 'Enter full image url for service photo'));
            echo $this->Form->control('min_price', array('placeholder' => 'Enter minimum price'));
        ?>
    </fieldset>
    <br />
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
