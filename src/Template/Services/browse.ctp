<?php
/**
* @var \App\View\AppView $this
*/
?>

<div class="container content-centered">
  <div class="container content-centered">
    <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
             <?php
              if ($this->request->session()->read('Auth.User')) { ?>
                <h2>Welcome, <?= $this->request->session()->read('Auth.User.first_name') ?>!</h2>
              <?php } ?>
              <div id="imaginary_container">

                  <div class="input-group stylish-input-group">
                      <input type="text" class="form-control"  placeholder="search for services" >
                      <span class="input-group-addon">
                          <button type="submit">
                              <span class="glyphicon glyphicon-search"></span>
                          </button>
                      </span>
                  </div>
              </div>
          </div>
    </div>
    <div class="row">
      <br>
      Don't know what you're looking for? Browse a category below!
    </div><br />
    <div class="container-colored">
      <div class="row">
        <div class="col-md-3 col-height">
          <a id="beauty-link">Beauty (2)</a>
        </div>
        <div class="col-md-3 col-height">
          Carpool (3)
        </div>
        <div class="col-md-3 col-height">
          Babysitting (1)
        </div>
        <div class="col-md-3 col-height">
          Entertainer (2)
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-height">
          Food (1)
        </div>
        <div class="col-md-3 col-height">
          Dogsitting (2)
        </div>
        <div class="col-md-3 col-height">
          Cleaner (2)
        </div>
        <div class="col-md-3 col-height">
          Car Wash (3)
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-height">
          Note Taker (2)
        </div>
        <div class="col-md-3 col-height">
          Example (2)
        </div>
        <div class="col-md-3 col-height">
          Example (5)
        </div>
        <div class="col-md-3 col-height">
          Example (1)
        </div>
      </div>
  </div>

  </div>
<br><br>

  <div id="browse-results">
    <h2>Beauty-Related Services</h2>
    <p>Not yet implemented but results would show up here.</p>
  </div>

</div>
