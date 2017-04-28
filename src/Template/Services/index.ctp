<?php
/**
* @var \App\View\AppView $this
*/
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
<ul class="side-nav">
<li class="heading"><?= __('Actions') ?></li>
<li><?= $this->Html->link(__('New Service'), ['action' => 'add']) ?></li>
<li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
<li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
</ul>
</nav> -->
<!-- <div class="services index large-9 medium-8 columns content"> -->
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
      Don't know what you're looking for?
      <br>
      <a href="<?= BASE_URL ?>/services/browse">Click here to browse by category</a>
    </div>

  </div>
<br><br>
  <h2>Saved Items</h2>
  <div class="row">
    <div class="col-md-12">
      <div id="Carousel" class="carousel slide">
        <ol class="carousel-indicators">
          <li data-target="#Carousel" data-slide-to="0" class="active"></li>
          <li data-target="#Carousel" data-slide-to="1"></li>
          <li data-target="#Carousel" data-slide-to="2"></li>
        </ol>

        <!-- Carousel items -->
        <div class="carousel-inner">

          <div class="item active">
            <div class="row">
              <div class="col-md-3"><a href="#!/detailed" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
              <div class="col-md-3"><a href="#!/detailed" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
              <div class="col-md-3"><a href="#!/detailed" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
              <div class="col-md-3"><a href="#!/detailed" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
            </div><!--.row-->
          </div><!--.item-->

          <div class="item">
            <div class="row">
              <div class="col-md-3"><a href="#!/detailed" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
              <div class="col-md-3"><a href="#!/detailed" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
              <div class="col-md-3"><a href="#!/detailed" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
              <div class="col-md-3"><a href="#!/detailed" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
            </div><!--.row-->
          </div><!--.item-->

          <div class="item">
            <div class="row">
              <div class="col-md-3"><a href="#!/detailed" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
              <div class="col-md-3"><a href="#!/detailed" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
              <div class="col-md-3"><a href="#!/detailed" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
              <div class="col-md-3"><a href="#!/detailed" class="thumbnail"><img src="http://placehold.it/250x250" alt="Image" style="max-width:100%;"></a></div>
            </div><!--.row-->
          </div><!--.item-->

        </div><!--.carousel-inner-->
        <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
        <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
      </div><!--.Carousel-->
    </div>
  </div>

  <h2>Recent Services</h2>
  <section class="new-deal">
    <div class="container">

      <?php foreach ($services as $service): ?>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 deal deal-block">
        <div class="item-slide">
          <div class="box-img">
            <img src="<?= h($service->image_url) ?>" alt="dasdas" style="width:300px;height:200px;overflow:hidden"/>
            <div class="text-wrap">
              <h4><?= h($service->title) ?></h4>

                <h3>$<?= $this->Number->format($service->min_price) ?></h3>

              <!-- <div class="book-now-c">
                <a href="#!/detailed">See More</a>
              </div> -->
            </div>
          </div>
          <div class="slide-hover">
            <div class="text-wrap">
              <p><?= h($service->description) ?></p>
              <h4><?= h($service->title) ?></h4>
              <div class="desc">
                <h3>$<?= $this->Number->format($service->min_price) ?></h3>
              </div>
              <div class="book-now-c">
                <a href="<?= BASE_URL ?>/services/detailed/<?= $this->Number->format($service->id) ?>">See More</a>
                <!-- <a href="#!/detailed">See More</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>




<!-- <table cellpadding="0" cellspacing="0">
<thead>
<tr>
<th scope="col"><?= $this->Paginator->sort('id') ?></th>
<th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
<th scope="col"><?= $this->Paginator->sort('title') ?></th>
<th scope="col"><?= $this->Paginator->sort('rating_point') ?></th>
<th scope="col"><?= $this->Paginator->sort('rating_number') ?></th>
<th scope="col"><?= $this->Paginator->sort('current_rating') ?></th>
<th scope="col"><?= $this->Paginator->sort('min_price') ?></th>
<th scope="col"><?= $this->Paginator->sort('created') ?></th>
<th scope="col"><?= $this->Paginator->sort('modified') ?></th>
<th scope="col" class="actions"><?= __('Actions') ?></th>
</tr>
</thead>
<tbody>
<?php foreach ($services as $service): ?>
<tr>
<td><?= $this->Number->format($service->id) ?></td>
<td><?= $service->has('user') ? $this->Html->link($service->user->id, ['controller' => 'Users', 'action' => 'view', $service->user->id]) : '' ?></td>
<td><?= h($service->title) ?></td>
<td><?= $this->Number->format($service->rating_point) ?></td>
<td><?= $this->Number->format($service->rating_number) ?></td>
<td><?= $this->Number->format($service->current_rating) ?></td>
<td><?= $this->Number->format($service->min_price) ?></td>
<td><?= h($service->created) ?></td>
<td><?= h($service->modified) ?></td>
<td class="actions">
<?= $this->Html->link(__('View'), ['action' => 'view', $service->id]) ?>
<?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->id]) ?>
<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<div class="paginator">
<ul class="pagination">
<?= $this->Paginator->first('<< ' . __('first')) ?>
<?= $this->Paginator->prev('< ' . __('previous')) ?>
<?= $this->Paginator->numbers() ?>
<?= $this->Paginator->next(__('next') . ' >') ?>
<?= $this->Paginator->last(__('last') . ' >>') ?>
</ul>
<p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
</div> -->



</div>
