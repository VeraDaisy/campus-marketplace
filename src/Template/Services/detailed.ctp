<?php
/**
  * @var \App\View\AppView $this
  */
?>

  <div class="container">

    <!-- Begin media body -->
    <div class="page-header">
      <h1><?= h($service->title) ?></h1>
    </div>
    <div class="media">
      <div class="media-left">
        <img class="media-object" src="<?= h($service->image_url) ?>" width="300px">
      </div>
      <div class="media-body">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
        <h5>Posted by: <a href="#"><?php
          if ($this->request->session()->read('Auth.User')) { ?>
            <?= $this->request->session()->read('Auth.User.username') ?>
          <?php } ?>
   </a>
        <p><?= h($service->description) ?>
        </p>
        <p><strong>Minimum Bid:</strong> $<?= h($service->min_price) ?></p>

        <button title="Save for later" type="button" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
        </button>

        <button title="Message seller" type="button" class="btn btn-default btn-lg">
          <span class="glyphicon glyphicon-comment" aria-hidden="true"></span>
        </button>
      </div>
    </div>
    <!-- End of media body -->

    <h3>Reviews for this user:</h3>

    <!-- Begin Leave a review section -->
    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
    <form>
      <div class="form-group">
        <label for="exampleTextarea">Leave your review:</label>
        <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Submit Review</button>
    </form>
    <!-- End Leave a review section -->

    <!-- Begin reviews listing section -->
    <div class="media">
      <div class="media-left">
        <img class="media-object" src="<?= BASE_URL ?>/img/default-service.jpg" width="80px">
      </div>
      <div class="media-body">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
        <h5>Review by:  <a href="#">username</a></h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales libero id est tempor aliquam. Nunc et fringilla massa. Vivamus et massa urna. Vivamus nisi sapien, tristique sit amet ex at, tempus vestibulum lacus. Curabitur interdum viverra tristique. Nam egestas, metus consectetur faucibus tristique, lacus tellus pharetra sem, ut rutrum nibh augue quis dui.
        </p>
        <button title="Upvote" type="button" class="btn btn-default btn-xs">
          <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 200
        </button>
        <button title="Message seller" type="button" class="btn btn-default btn-xs">
          <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span> 3
        </button>
      </div>
    </div>

    <div class="media">
      <div class="media-left">
        <img class="media-object" src="<?= BASE_URL ?>/img/default-service.jpg" width="80px">
      </div>
      <div class="media-body">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <h5>Review by:  <a href="#">username</a></h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales libero id est tempor aliquam. Nunc et fringilla massa. Vivamus et massa urna. Vivamus nisi sapien, tristique sit amet ex at, tempus vestibulum lacus. Curabitur interdum viverra tristique. Nam egestas, metus consectetur faucibus tristique, lacus tellus pharetra sem, ut rutrum nibh augue quis dui.
        </p>
        <button title="Upvote" type="button" class="btn btn-default btn-xs">
          <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 1000
        </button>
        <button title="Message seller" type="button" class="btn btn-default btn-xs">
          <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span> 291
        </button>
      </div>
    </div>

    <div class="media">
      <div class="media-left">
        <img class="media-object" src="<?= BASE_URL ?>/img/default-service.jpg" width="80px">
      </div>
      <div class="media-body">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
        <h5>Review by:  <a href="#">username</a></h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales libero id est tempor aliquam. Nunc et fringilla massa. Vivamus et massa urna. Vivamus nisi sapien, tristique sit amet ex at, tempus vestibulum lacus. Curabitur interdum viverra tristique. Nam egestas, metus consectetur faucibus tristique, lacus tellus pharetra sem, ut rutrum nibh augue quis dui.
        </p>
        <button title="Upvote" type="button" class="btn btn-default btn-xs">
          <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 1000
        </button>
        <button title="Message seller" type="button" class="btn btn-default btn-xs">
          <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span> 291
        </button>
      </div>
    </div>

    <div class="media">
      <div class="media-left">
        <img class="media-object" src="<?= BASE_URL ?>/img/default-service.jpg" width="80px">
      </div>
      <div class="media-body">
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
        <h5>Review by:  <a href="#">username</a></h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales libero id est tempor aliquam. Nunc et fringilla massa. Vivamus et massa urna. Vivamus nisi sapien, tristique sit amet ex at, tempus vestibulum lacus. Curabitur interdum viverra tristique. Nam egestas, metus consectetur faucibus tristique, lacus tellus pharetra sem, ut rutrum nibh augue quis dui.
        </p>
        <button title="Upvote" type="button" class="btn btn-default btn-xs">
          <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 1000
        </button>
        <button title="Message seller" type="button" class="btn btn-default btn-xs">
          <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span> 291
        </button>
      </div>
    </div>
    <!-- End reviews listing section -->

  </div>
  <!-- End container -->
