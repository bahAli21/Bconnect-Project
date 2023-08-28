<!-- .......Profile.Start........ -->
<a  class="profile">
  <div class="profile-picture" id="my-profile-picture">
      <img src="../../assets/images/uploadImg/<?= $user->getUser($_SESSION['id'])['ProfilePhotoURL'] ?>" alt="">
  </div>
  <div class="profile-handle">
      <h4><?= $user->getUser($_SESSION['id'])['FullName'] ?></h4>
  </div>
</a>
<!-- .......Profile.End........ -->
