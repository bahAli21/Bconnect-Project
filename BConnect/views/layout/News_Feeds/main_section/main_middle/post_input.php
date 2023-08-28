<!-- .........Post Input.......... -->
<form class="add-post input-post">
    <div class="profile-picture" id="my-profile-picture">
        <img src="../../assets/images/uploadImg/<?= $user->getUser($_SESSION['id'])['ProfilePhotoURL'] ?>" alt="">
    </div>
    <input type="text" placeholder="What's on your mind ?" id="add-post">
    <input type="submit" value="post" class="btn btn-primary">
</form>
