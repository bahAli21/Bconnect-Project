<?php
session_start();
require_once('../../config/Database.php');
require_once('../../models/userModel/User.php');
require_once('../../models/userModel/UserInfo.php');
require_once('../../models/userModel/UserSetting.php');
  $allData = (new UserSetting)->getUserInformations();

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCONNECT</title>
    <!-- .................CUSTOM CSS LINK................. -->
    <link rel="stylesheet" href="../../assets/css/News_Feeds/style.css">
    <!-- ...............Font Awesome Link................. -->
    <link rel="stylesheet" href="../../assets/fontawesome-free-6.3.0-web/css/all.css">
    <!-- Include stylesheet -->
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>
<body>
    <!-- ...................Start Navbar................... -->
  <?php require_once('../layout/News_Feeds/main_section/nav/navbar.php'); ?>
<!-- ...................End Navbar................... -->

<!-- ...................Start Main Section................... -->
  <main>
      <div class="container main-container">

          <!--================== Main Left Start ==================  -->
          <div class="main-left">
              <!-- .......Profile.Start........ -->
              <?php require_once('../layout/News_Feeds/main_section/main_left/profile_start.php'); ?>
               <!-- .......Profile.End........ -->

              <!-- .........Start Aside Bar.......... -->
              <?php require_once('../layout/News_Feeds/main_section/main_left/aside.php'); ?>
              <!-- ..........End Aside Bar........... -->
          </div>
          <!--==================  Main Left End =================== -->
          <!--================== Main Middle Start================== -->
          <div class="main-middle">
              <div class="middle-container">
              <!--...........Start Stories............. -->
              <?php require_once('../layout/News_Feeds/main_section/main_middle/stories.php'); ?>
              <!--...........End Stories............. -->

              <!-- .........Start Post Input.......... -->
              <?php require_once('../layout/News_Feeds/main_section/main_middle/post_input.php'); ?>
              <!-- .........End Post Input.......... -->
              <!--.............. Feed Aria Start............... -->
                 <?php require_once('../layout/News_Feeds/main_section/main_middle/feeds.php'); ?>
              <!--.............. Feed Aria End............... -->
              </div>
               <!--.............. Feeds Aria End............... -->

               <!--.............. Includes footer ............... -->
               <?php require_once('../layout/News_Feeds/main_section/main_middle/footer.php'); ?>
          </div>
          <!--================== Main Middle End==================  -->

          <!--==================  Main Right Start==================  -->
          <div class="main-right">
              <!-- ..............Start Message............ -->
                <?php require_once('../layout/News_Feeds/main_section/main_right/messages.php'); ?>
              <!-- ..............End Message............ -->

              <!-- ..............Start Firend Request............ -->
              <?php require_once('../layout/News_Feeds/main_section/main_right/friend_requests.php'); ?>
              <!-- ..............End Firend Request............ -->
          </div>
          <!--==================  Main Right End================== -->
      </div>
  </main>
    <!-- ...................Start Main Section................... -->

    <!-- ...................Start PopUps Aria................... -->

    <!-- ................Start Add Post Popup............ -->
    <?php require_once('../layout/News_Feeds/popup/add_post.php'); ?>
    <!-- ................End  Add Post Popup............ -->

    <!-- ................Start Theme Customize Popup............ -->
    <?php require_once('../layout/News_Feeds/popup/customize_theme.php'); ?>
    <!-- ................End   Theme Customize Popup............ -->

    <!-- ...................End PopUps Aria................... -->

    <!-- .................Custom JS Link.................. -->
    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="../../assets/js/user_page.js"></script>
    <script src="../../assets/js/story.js"></script>
</body>
</html>
