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
        <h5>Posted by: <a href="#"><?php
         echo  h($service->user_id);
          ?>
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
        <img class="media-object" src="<?= BASE_URL ?>/webroot/img/default-user-image.png" width="80px">
      </div>
      <div class="media-body">
        <h5>Review by:  <a href="#">monicaw8</a></h5>
        <p>Great customer service.
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
        <img class="media-object" src="<?= BASE_URL ?>/webroot/img/default-user-image.png" width="80px">
      </div>
      <div class="media-body">
        <h5>Review by:  <a href="#">jane</a></h5>
        <p>Cheap and affordable - I got exactly what I needed! 10/10 ighly recommend.
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
        <img class="media-object" src="<?= BASE_URL ?>/webroot/img/default-user-image.png" width="80px">
      </div>
      <div class="media-body">
        <h5>Review by:  <a href="#">chris</a></h5>
        <p>Tiffany was so nice and helpful. She is definitely reliable!
        </p>
        <button title="Upvote" type="button" class="btn btn-default btn-xs">
          <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 60
        </button>
        <button title="Message seller" type="button" class="btn btn-default btn-xs">
          <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span> 1
        </button>
      </div>
    </div>

    <div class="media">
      <div class="media-left">
        <img class="media-object" src="<?= BASE_URL ?>/webroot/img/default-user-image.png" width="80px">
      </div>
      <div class="media-body">
        <h5>Review by:  <a href="#">hokie123</a></h5>
        <p>Great food and great company. I will definitely come back.
        </p>
        <button title="Upvote" type="button" class="btn btn-default btn-xs">
          <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span> 20
        </button>
        <button title="Message seller" type="button" class="btn btn-default btn-xs">
          <span class="glyphicon glyphicon-thumbs-down" aria-hidden="true"></span> 3
        </button>
      </div>
    </div>
    <!-- End reviews listing section -->

  </div>
  <!-- End container -->

