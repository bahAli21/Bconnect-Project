<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCONNECT</title>
    <!-- .................CUSTOM CSS LINK................. -->
    <link rel="stylesheet" href="../../assets/css/user_page.css">
    <link rel="stylesheet" href="../../assets/css/story.css">
    <!-- ...............Font Awesome Link................. -->
    <link rel="stylesheet" href="../../assets/fontawesome-free-6.3.0-web/css/all.css">

</head>

<body>
        <!-- ...................Start Navbar................... -->
        <nav>
            <div class="container nav-container">
                <div class="logo">
                    <h3><span>BCONNECT</span></h3>
                </div>
                <div class="serch-bar">
                    <i class="fa fa-search"></i>
                    <input type="search"  class="search-input" placeholder="Serch For Creators">
                </div>
                <div class="add-post">
                    <label for="add-post" class="btn btn-primary mini-button add-post-1" >Add Post</label>
                    <label for="add-post" class="btn mini-button add-post-2" > <i class="fa fa-add"></i> </label>

                    <div class="profile-picture" id="my-profile-picture">
                        <img src="../../assets/images/icons/default-user.png" alt="">
                    </div>
                </div>
            </div>
        </nav>
        <!-- ...................Start Navbar................... -->

        <!-- ...................Start Main Section................... -->
        <main>
            <div class="container main-container">


                <!--================== Main Left Start ==================  -->
                <div class="main-left">
                    <!-- .......Profile.Start........ -->
                    <a  class="profile">
                        <div class="profile-picture" id="my-profile-picture">
                            <img src="../../assets/images/icons/default-user.png" alt="">
                        </div>
                        <div class="profile-handle">
                            <h4>Mohamed Fora</h4>
                        </div>
                    </a>
                     <!-- .......Profile.End........ -->

                    <!-- .........Start Aside Bar.......... -->
                    <aside>

                        <a  class="menu-item active">
                            <span><img src="../../assets/images/icons/house-door.svg" alt=""></span> <h3>Home</h3>
                        </a>

                        <a  class="menu-item" id="Notify-box">
                            <span><img src="../../assets/images/icons/bell.svg" alt=""></span>
                            <small class="notfy-counter nt" id="ntCounter1">7+</small>
                             <h3>Notifications</h3>

                            <!-- ...........Notification Box Start.......... -->
                            <div class="notification-box">
                                <div>
                                    <div class="profile-picture">
                                        <img src="../../assets/images/img/3.jpg" alt="">
                                    </div>
                                    <div class="notification-body">
                                        <b>Golden</b> commented on your post
                                        <small class="text-gry">2 HOUR AGO</small>
                                    </div>
                                </div>
                                <div>
                                    <div class="profile-picture">
                                        <img src="../../assets/images/img/said.JPG" alt="">
                                    </div>
                                    <div class="notification-body">
                                        <b>Said Balde</b> liked on your post
                                        <small class="text-gry">JUST NOW</small>
                                    </div>
                                </div>
                                <div>
                                    <div class="profile-picture">
                                        <img src="../../assets/images/img/13.jpg" alt="">
                                    </div>
                                    <div class="notification-body">
                                        <b>Leo Messi</b> and <b>5 other</b> commented on your post
                                        <small class="text-gry">3 DAYS AGO</small>
                                    </div>
                                </div>
                            </div>
                            <!-- ...........Notification Box End.......... -->

                        </a>

                        <a  class="menu-item" id="messageMenu">
                            <span><img src="../../assets/images/icons/chat-left-dots.svg" alt=""></span>
                            <small class="notfy-counter" id="notfyCoutner2">3</small>
                            <h3>Message</h3>
                        </a>

                        <a  class="menu-item" >
                            <span><img src="../../assets/images/icons/video.png" alt=""></span> <h3>Video</h3>
                        </a>

                        <a  class="menu-item">
                            <span><img src="../../assets/images/icons/user.png" alt=""></span> <h3>Profil</h3>
                        </a>

                        <a  class="menu-item theme">
                            <span><img src="../../assets/images/icons/palette.svg" alt=""></span> <h3>Theme</h3>
                        </a>

                        <a  class="menu-item">
                            <span><img src="../../assets/images/icons/gear.svg" alt=""></span> <h3>Settings</h3>
                        </a>

                    </aside>
                    <!-- ..........End Aside Bar........... -->
                </div>
                <!--==================  Main Left End =================== -->
                <!--================== Main Middle Start================== -->
                <div class="main-middle">
                    <div class="middle-container">
                    <!--...........Start Stories............. -->

                    <div class="stories-container">
                     <div class="content">
                       <div class="previous-btn">
                         <svg
                           xmlns="http://www.w3.org/2000/svg"
                           fill="none"
                           viewBox="0 0 24 24"
                           stroke-width="1.5"
                           stroke="currentColor"
                           class="w-6 h-6"
                         >
                           <path
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             d="M15.75 19.5L8.25 12l7.5-7.5"
                           />
                         </svg>
                       </div>

                       <div class="stories">
                         <div class="story">
                            <label for="file-input" class="icon-add">
                                <img src="../../assets/images/icons/plus-icon.png" alt="">
                            </label>
                            <input type="file" accept="image/jpg, image/png, image/jpeg" id="file-input">
                            <div class="bloc-create-story">
                                <p class="txt">Créer une story</p>
                            </div>
                         </div>

                        <!-- added by JavaScript -->
                       </div>

                       <div class="next-btn active">
                         <svg
                           xmlns="http://www.w3.org/2000/svg"
                           fill="none"
                           viewBox="0 0 24 24"
                           stroke-width="1.5"
                           stroke="currentColor"
                           class="w-6 h-6"
                         >
                           <path
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             d="M8.25 4.5l7.5 7.5-7.5 7.5"
                           />
                         </svg>
                       </div>
                     </div>
                   </div>

                   <div class="stories-full-view">

                     <div class="content">
                       <div class="previous-btn">
                         <svg
                           xmlns="http://www.w3.org/2000/svg"
                           fill="none"
                           viewBox="0 0 24 24"
                           stroke-width="1.5"
                           stroke="currentColor"
                           class="w-6 h-6"
                         >
                           <path
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             d="M15.75 19.5L8.25 12l7.5-7.5"
                           />
                         </svg>
                       </div>

                       <div class="story">
                         <img src="images/3.jpg" class="img-post" alt="" />
                         <div class="story-full-head">
                           <div class="profile-picture" id="my-profile-picture">
                               <img src="../../assets/images/icons/default-user.png" alt="">
                           </div>
                          <p class="txt author"></p>
                          <div class="three-dots">
                            <img src="../../assets/images/icons/three-dots.svg" alt="">
                          </div>
                          <div class="close-btn">
                            <svg
                              xmlns="http://www.w3.org/2000/svg"
                              fill="none"
                              viewBox="0 0 24 24"
                              stroke-width="1.5"
                              stroke="currentColor"
                              class="w-6 h-6"
                            >
                              <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M6 18L18 6M6 6l12 12"
                              />
                            </svg>
                          </div>
                         </div>
                       </div>

                       <div class="next-btn">
                         <svg
                           xmlns="http://www.w3.org/2000/svg"
                           fill="none"
                           viewBox="0 0 24 24"
                           stroke-width="1.5"
                           stroke="currentColor"
                           class="w-6 h-6"
                         >
                           <path
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             d="M8.25 4.5l7.5 7.5-7.5 7.5"
                           />
                         </svg>
                       </div>
                       <div class="story-footer">
                         <div class="input-message">
                           <input type="text" name="" placeholder="Envoyer un message">
                         </div>
                         <div class="btn-action-story">
                           <span><i class="fa fa-heart"></i></span>
                           <span ><i class="fa-regular fa-paper-plane"></i></span>
                         </div>

                       </div>
                     </div>
                   </div>


                    <!-- .........Post Input.......... -->
                    <form class="add-post input-post">
                        <div class="profile-picture" id="my-profile-picture">
                            <img src="../../assets/images/icons/default-user.png" alt="">
                        </div>
                        <input type="text" placeholder="What's on your mind ?" id="add-post">
                        <input type="submit" value="post" class="btn btn-primary">
                    </form>

                       <!--.............. Feed Aria Start............... -->
                       <div class="feeds">

                        <div class="feed">
                            <!-- ....Feed Top.... -->
                            <div class="feed-top">
                                <div class="user">
                                    <div class="profile-picture">
                                        <img src="../../assets/images/img/13.jpg" alt="">
                                    </div>
                                    <div class="info">
                                        <h3>Leo Messi</h3>
                                        <div class="time text-gry">
                                            <small> QATAR, <span>1 MONTH AGO</span> </small>
                                        </div>
                                    </div>
                                </div>
                                <span class="edit">
                                    <img src="../../assets/images/icons/three-dots.svg" >
                                </span>
                            </div>
                            <!-- ...Feed Img.... -->
                            <div class="feed-img">
                                <img src="../../assets/images/img/13.jpg" alt="">
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
                                <span><img src="../../assets/images/img/2.jpg" alt=""></span>
                                <span><img src="../../assets/images/img/1.png" alt=""></span>
                                <span><img src="../../assets/images/img/said.jpg" alt=""></span>
                                <p>Liked by <b>Said Balde</b> and <b>77 comments other</b></p>
                            </div>


                            <!-- ......Caption...... -->
                            <div class="caption">
                                <div class="title">Coupe du monde 2022 </div>
                                <p><b>Leo Messi </b> I'm de greatest of all history.
                                <span class="hars-tag">#Cristiano Ronaldo</span></p>
                            </div>

                            <!-- ........Comments...... -->
                            <div class="comments text-gry">
                                View all comments
                            </div>

                        </div>

                        <div class="feed ">
                            <!-- ....Feed Top.... -->
                            <div class="feed-top">
                                <div class="user">
                                    <div class="profile-picture">
                                        <img src="../../assets/images/img/4.jpg" alt="">
                                    </div>
                                    <div class="info">
                                        <h3>
                                            Ali BAH
                                        </h3>
                                        <div class="time text-gry">
                                            <small>America, <span>JUST NOW</span> </small>
                                        </div>
                                    </div>
                                </div>
                                <span class="edit">
                                    <img src="../../assets/images/icons/three-dots.svg" >
                                </span>
                            </div>
                            <!-- ...Feed Img.... -->
                            <div class="feed-img">
                                <img src="../../assets/images/img/10.jpg" alt="">
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
                                <span><img src="../../assets/images/img/said.jpg" alt=""></span>
                                <span><img src="../../assets/images/img/2.jpg" alt=""></span>
                                <p>Liked by <b>David mark</b> and <b>40 comments other</b></p>
                            </div>


                            <!-- ......Caption...... -->
                            <div class="caption">
                                <div class="title">Le rêve</div>
                                <p><b>Ali BAH </b>inchallah je vais y arrivé.
                                <span class="hars-tag">#Armée</span></p>
                            </div>

                            <!-- ........Comments...... -->
                            <div class="comments text-gry">
                                View all comments
                            </div>
                        </div>

                       </div>
                       <!--.............. Feed Aria End............... -->
                    </div>
                     <!--.............. Feeds Aria End............... -->

                     <!--.............. Includes footer ............... -->

                     <footer class="footer" id="footerPage">
                           <a  class="menu-item active">
                               <span><img src="../../assets/images/icons/house-door.svg" alt=""></span> <h6>Home</h6>
                           </a>

                           <a  class="menu-item" id="Notify-box">
                               <span><img src="../../assets/images/icons/bell.svg" alt=""></span>
                               <small class="notfy-counter" id="ntCounter1">3</small>
                                <h6>Notifications</h6>
                           </a>

                           <a  class="menu-item" >
                               <span><img src="../../assets/images/icons/video.png" alt=""></span> <h6>Video</h6>
                           </a>

                           <a  class="menu-item">
                               <span><img src="../../assets/images/icons/user.png" alt=""></span> <h6>Profil</h6>
                           </a>

                           <a  class="menu-item theme">
                               <span><img src="../../assets/images/icons/palette.svg" alt=""></span> <h6>Theme</h6>
                           </a>

                           <a  class="menu-item" id="footer-messageMenu">
                               <span><img src="../../assets/images/icons/chat-left-dots.svg" alt=""></span>
                               <small class="notfy-counter" id="footer-notfyCoutner2">5</small>
                               <h6>Messages</h6>
                           </a>

                           <a  class="menu-item settings">
                               <span><img src="../../assets/images/icons/gear.svg" alt=""></span> <h6>Settings</h6>
                           </a>

                     </footer>

                </div>
                <!--================== Main Middle End==================  -->



                <!--==================  Main Right Start==================  -->
                <div class="main-right">
                    <!-- ..............Start Message............ -->

                    <div class="messages">
                        <!-- ....Message top..... -->
                        <div class="message-top">
                            <h4>Message</h4> <i class="fa fa-edit"></i>
                        </div>
                        <!-- ....Searchbar... -->
                        <div class="messge-serch-bar">
                            <i class="fa fa-search"></i>
                            <input type="search"  class="search-input" placeholder="Search message" id="message-search">
                        </div>
                        <!-- ......Message Categories..... -->
                        <div class="message-categories">
                            <h6 class="active">Primary</h6>
                            <h6 >General</h6>
                            <h6 class="message-request">Request(2)</h6>
                        </div>
                        <!-- ......Message..... -->
                        <div class="message">
                            <div class="profile-picture">
                                <img src="../../assets/images/img/13.jpg" alt="">
                                <div class="green-active"></div>
                            </div>
                            <div class="message-body">
                                <h5>Leo Messi</h5>
                                <p class="text-gry">
                                   Hi, I'm Leo your goat.
                                </p>
                            </div>
                        </div>
                        <div class="message">
                            <div class="profile-picture">
                                <img src="../../assets/images/img/3.jpg" alt="">
                                <div class="green-active"></div>
                            </div>
                            <div class="message-body">
                                <h5>Golden</h5>
                                <p class="text-bold">
                                   Salut bro
                                </p>
                            </div>
                        </div>
                        <div class="message">
                            <div class="profile-picture">
                                <img src="../../assets/images/img/said.jpg" alt="">
                                <div class="green-active"></div>
                            </div>
                            <div class="message-body">
                                <h5>Said Balde</h5>
                                <p class="text-gry">
                                   co-admin
                                </p>
                            </div>
                        </div>

                        <div class="message">
                            <div class="profile-picture">
                                <img src="../../assets/images/img/4.jpg" alt="">

                            </div>
                            <div class="message-body">
                                <h5>Ali BAH</h5>
                                <p class="text-bold">
                                   file moi le planning
                                </p>
                            </div>
                        </div>
                        <div class="message">
                            <div class="profile-picture">
                                <img src="../../assets/images/img/8.jpg" alt="">
                                <div class="green-noActive"></div>
                            </div>
                            <div class="message-body">
                                <h5>BAH Leo</h5>
                                <p class="text-gry">
                                   Messi is the goat
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- ..............End Message............ -->


                    <!-- ..............Start Firend Request............ -->
                    <div class="friend-rquest">
                        <h4>Request</h4>
                        <div class="request">
                            <div class="info">
                                <div class="profile-picture">
                                    <img src="../../assets/images/img/12.jpg" alt="">
                                </div>
                                <div>
                                    <h5>Steve Jobs</h5>
                                    <p class="text-gry">
                                        4 mutual firend
                                    </p>
                                    <small class="text-gry alert" >You have accepted request</small>
                                </div>
                            </div>
                            <div class="action">
                                <div class="btn btn-primary" id="Accept">
                                    Accept
                                </div>
                                <div class="btn btn-danger" id="Delete">
                                    Delete
                                </div>
                            </div>
                        </div>

                        <div class="request">
                            <div class="info">
                                <div class="profile-picture">
                                    <img src="../../assets/images/img/1.jpg" alt="">
                                </div>
                                <div>
                                    <h5>BAH Leo</h5>
                                    <p class="text-gry">
                                        2 mutual firend
                                    </p>
                                    <small class="text-gry alert" >You have accepted request</small>
                                </div>
                            </div>
                            <div class="action">
                                <div class="btn btn-primary" id="Accept">
                                    Accept
                                </div>
                                <div class="btn btn-danger" id="Delete">
                                    Delete
                                </div>
                            </div>
                        </div>
                        <div class="request">
                            <div class="info">
                                <div class="profile-picture">
                                    <img src="../../assets/images/img/7.jpg" alt="">
                                </div>
                                <div>
                                    <h5>Ali BAH</h5>
                                    <p class="text-gry">
                                        4 mutual firend
                                    </p>
                                    <small class="text-gry alert" >You have accepted request</small>
                                </div>
                            </div>
                            <div class="action">
                                <div class="btn btn-primary" id="Accept">
                                    Accept
                                </div>
                                <div class="btn btn-danger" id="Delete">
                                    Delete
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ..............End Firend Request............ -->

                </div>
                <!--==================  Main Right End================== -->
            </div>
        </main>
        <!-- ...................Start Main Section................... -->




        <!-- ...................Start PopUps Aria................... -->
        <!-- ................Start Profile-Popup............ -->
        <div class="popup profile-popup">
            <div>
                <div class="popup-box profile-popup-box">
                    <h1>Fora Mohamed</h1>
                    <div id="my-profile-picture">
                      <div class="edit-profile">
                        <label for="profile-upload"><i class="fa fa-edit"></i></label>
                        <input type="file" accept="image/jpg, image/png, image/jpeg" id="profile-upload">
                      </div>
                      <img src="../.../../assets/images/img/default-user.jpg" class="preview">
                    </div>
                    <button class="btn btn-primary btn-lg" id="save-picture">save</button>
                    <i class="fa-solid fa-xmark"></i>
                    <button class="logout btn-lg"><img src="../../assets/images/icons/logout.png" ></button>
                </div>
                <span class="close"><i class="fa fa-close"></i></span>
            </div>
        </div>
        <!-- ................End Profile-Popup............ -->


        <!-- ................Start Add Post Popup............ -->
        <div class="popup add-post-popup">
            <div>
                <form class="popup-box add-post-popup">
                    <h1>Add New Post</h1>
                    <div class="row post-title">
                        <input type="text" placeholder="What's on your mind ?" id="title-input">
                    </div>
                    <div class="row post-img">
                        <img src="" id="postIMg">
                        <label for="feed-pic-upload" class="feed-upload-button">
                            <span><i class="fa fa-add"></i></span>
                            Upload A Picture
                        </label>
                        <input type="file" accept="image/jpg, image/png, image/jpeg" id="feed-pic-upload">
                        <input type="submit" class="btn btn-primary btn-lg bbb" value="Add Post">
                    </div>
                </form>
                <span class="close"><i class="fa fa-close"></i></span>
            </div>
        </div>
        <!-- ................End  Add Post Popup............ -->


        <!-- ................Start Theme Customize Popup............ -->
        <div class="popup theme-customize">
            <div>
                <div class="popup-box theme-customize-popup-box">
                    <p>Manege Your Color and Background</p>
                    <!-- ..........Primary Colors........ -->
                    <div class="colors">
                        <h4>Color</h4>
                        <div class="choose-color">
                            <span class="color-1 active"></span>
                            <span class="color-2 "></span>
                            <span class="color-3 "></span>
                            <span class="color-4 "></span>
                            <span class="color-5 "></span>
                        </div>
                    </div>
                    <!-- ...........Background Colors.......... -->
                    <div class="background">
                        <h4>Dark mode</h4>
                        <div id="dark-btn">
                          <span></span>
                        </div>
                    </div>
                </div>
                <span class="close"><i class="fa fa-close"></i></span>
            </div>
        </div>
        <!-- ................End   Theme Customize Popup............ -->

        <!-- ...................End PopUps Aria................... -->

    <!-- .................Custom JS Link.................. -->
    <script src="../../assets/js/user_page.js"></script>
    <script src="../../assets/js/story.js"></script>


</body>


</html>
