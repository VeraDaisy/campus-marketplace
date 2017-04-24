<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cmDescription = 'Campus Marketplace';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cmDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>


    <?= $this->Html->css('cake.css') ?>

    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('main.css') ?>
    <?= $this->Html->css('normalize.css') ?>
    <?= $this->Html->css('app.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Rubik" rel="stylesheet">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>


</head>
<body>
    <!-- <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="http://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="http://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav> -->
    <!-- Fixed navbar -->
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <?php
              if (!$this->request->session()->read('Auth.User')) { ?>
                <a class="navbar-brand" href="<?= BASE_URL ?>"><img src="<?= BASE_URL ?>/img/logo.png" alt="Campus Marketplace logo"/></a>
              <?php }
              else { ?>
                <a class="navbar-brand" href="<?= BASE_URL ?>/services"><img src="<?= BASE_URL ?>/img/logo.png" alt="Campus Marketplace logo"/></a>
              <?php } ?>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <?php
                if (!$this->request->session()->read('Auth.User')) { ?>
                  <li><a id="registerLink" href="<?= BASE_URL ?>/users/add">Register</a></li>
                  <li><a id="signinLink" href="<?= BASE_URL ?>/users/login">Signin</a></li>
                <?php }
                else { ?>
                  <li><a id="logoutLink" href="<?= BASE_URL ?>/services/add">Add Service</a></li>
                  <li><a id="logoutLink" href="<?= BASE_URL ?>/users/logout">Logout</a></li>
                <?php }
                ?>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </nav>

    <?= $this->Flash->render() ?>
    <div class="clearfix">
        <?= $this->fetch('content') ?>
    </div>


    <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>

    <?php
    echo $this->Html->script('jquery.js');
    echo $this->Html->script('bootstrap.js');
    echo $this->Html->script('modernizr-2.8.3.min.js');
    echo $this->Html->script('app.js');
    ?>
</body>
</html>
