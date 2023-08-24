<!-- ...................Start Navbar................... -->
  <?php require_once('News_Feeds/main_section/nav/navbar.php'); ?>
<!-- ...................End Navbar................... -->

<!-- ...................Start Main Section................... -->
  <main>
      <div class="container main-container">

          <!--================== Main Left Start ==================  -->
          <div class="main-left">
              <!-- .......Profile.Start........ -->
              <?php require_once('News_Feeds/main_section/main_left/profile_start.php'); ?>
               <!-- .......Profile.End........ -->

              <!-- .........Start Aside Bar.......... -->
              <?php require_once('News_Feeds/main_section/main_left/aside.php'); ?>
              <!-- ..........End Aside Bar........... -->
          </div>
          <!--==================  Main Left End =================== -->
          <!--================== Main Middle Start================== -->
          <div class="main-middle">
              <div class="middle-container">
              <!--...........Start Stories............. -->
              <?php require_once('News_Feeds/main_section/main_middle/stories.php'); ?>
              <!--...........End Stories............. -->

              <!-- .........Start Post Input.......... -->
              <?php require_once('News_Feeds/main_section/main_middle/post_input.php'); ?>
              <!-- .........End Post Input.......... -->
              <!--.............. Feed Aria Start............... -->
                 <?php require_once('News_Feeds/main_section/main_middle/feeds.php'); ?>
              <!--.............. Feed Aria End............... -->
              </div>
               <!--.............. Feeds Aria End............... -->

               <!--.............. Includes footer ............... -->
               <?php require_once('News_Feeds/main_section/main_middle/footer.php'); ?>
          </div>
          <!--================== Main Middle End==================  -->

          <!--==================  Main Right Start==================  -->
          <div class="main-right">
              <!-- ..............Start Message............ -->
                <?php require_once('News_Feeds/main_section/main_right/messages.php'); ?>
              <!-- ..............End Message............ -->

              <!-- ..............Start Firend Request............ -->
              <?php require_once('News_Feeds/main_section/main_right/friend_requests.php'); ?>
              <!-- ..............End Firend Request............ -->
          </div>
          <!--==================  Main Right End================== -->
      </div>
  </main>
    <!-- ...................Start Main Section................... -->

    <!-- ...................Start PopUps Aria................... -->

    <!-- ................Start Add Post Popup............ -->
    <?php require_once('News_Feeds/popup/add_post.php'); ?>
    <!-- ................End  Add Post Popup............ -->

    <!-- ................Start Theme Customize Popup............ -->
    <?php require_once('News_Feeds/popup/customize_theme.php'); ?>
    <!-- ................End   Theme Customize Popup............ -->

    <!-- ...................End PopUps Aria................... -->
