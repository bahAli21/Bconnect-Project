<!--.............. Feed Aria Start............... -->
 <div class="feeds">

 <?php require_once('../test.php') ?>
  <?php if(isset($feeds)): ?>
    <?php foreach ($feeds as $feed): ?>
      <div class="feed" data-post-id="<?= $feed->getId() ?>">
        <!-- ....Feed Top.... -->
        <div class="feed-top">
            <div class="user">
                <div class="profile-picture">
                    <img src="<?= $feed->getProfilePicture() ?>" alt="">
                </div>
                <div class="info">
                    <h3>
                        <?= ucwords($feed->getFullName()) ?>
                    </h3>
                    <div class="time text-gry">
                        <small><?= ucfirst($feed->getLocation()) ?>, <span><?= $feed->getDuration() ?></span> </small>
                    </div>
                </div>
            </div>
            <span class="edit">
                <img src="../../assets/images/icons/three-dots.svg" >
            </span>
        </div>
        <!-- ...Feed Img.... -->
        <div class="feed-img">
            <img src="<?= $feed->getPicture() ?>" alt="">
        </div>
        <!-- ...Feed Action Aria... -->
        <div class="action-button">
            <div class="interaction-button">
                <span><i class="fa fa-heart"></i></span>
                <span><i class="fa fa-comment-dots"></i></span>
                <span><i class="fa fa-link"></i></span>
            </div>
            <div class="bookmark">
                <i class="fa fa-bookmark"></i>
            </div>
        </div>

        <!--.... Liked by.... -->
        <div class="liked-by">
            <span><img src="<?= $feed->getLikedBy()['first'] ?>" alt=""></span>
            <span><img src="<?= $feed->getLikedBy()['second'] ?>" alt=""></span>
            <span><img src="<?= $feed->getLikedBy()['third'] ?>" alt=""></span>
            <p>Liked by <b><?= ucwords($feed->getUserLiked()['name']) ?></b> and <b><?= $feed->getUserLiked()['number'] ?> <?= $feed->getUserLiked()['description'] ?></b></p>
        </div>


        <!-- ......Caption...... -->
        <div class="caption">
            <div class="title"><?= $feed->getTitleLegend() ?></div>
            <p><b><?= ucwords($feed->getFullName()) ?> </b><?= $feed->getDescription() ?>
            <span class="hars-tag"><?= $feed->getHarshTag() ?></span></p>
        </div>

        <!-- ........Comments...... -->
        <div class="comments text-gry">
            View all comments
        </div>
    </div>
  <?php endforeach ?>
<?php endif ?>
</div>
