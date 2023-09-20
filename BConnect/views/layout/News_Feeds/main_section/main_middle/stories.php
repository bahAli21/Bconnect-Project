<!--...........Start Stories............. -->
<?php require_once('../../models/storyModel/Story.php');
 ?>
 <form id="story-form" action="" method="post" enctype="multipart/form-data">
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

     <div class="storie">
       <?php
       $story = new Story();
       $allStories = $story->getAllStories(); ?>
       <div class="stories" data-stories="<?= htmlspecialchars(json_encode($allStories)) ?>"></div>

       <div class="story">
          <label for="file-input" class="icon-add">
              <img src="../../assets/images/icons/plus-icon.png" alt="">
          </label>
          <input type="file" accept="image/jpg, image/png, image/jpeg" id="file-input" name="imageOrVideo-post-story">
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

 <!-- Create story bloc full view -->
   <div class="create-stories-full-view" method="post" >

     <div class="content">

       <div class="create-story">

         <!-- Start Create Story Header -->
          <div class="header">
              <div class="previous-btn-create">
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
              <div class="select-font" title="police d'ecriture">
                <img src="../../assets/images/icons/chevron-down-outline.svg" class="chevron-down">
                <img src="../../assets/images/icons/chevron-up-outline.svg" class="hidden chevron-up">
              </div>

              <div class="write-text" id="write-txt">
                   <p title="write something">aA</p>
              </div>
              <div class="palette">
               <img src="../../assets/images/icons/menu.png" alt="">
              </div>
          </div>
          <!-- End Create Story Header -->
          <!-- <div class="text-editor hidden">
            <textarea id="text-input" placeholder=""></textarea>
          </div> -->

          <div id="editor-container" class="hidden" name="content-text">
              <input type="text" name="content-text" value="" placeholder="Que voulez-vous dire ? <?=$allData['lastName'] ?>">
          </div>

          <div class="font-family-container hidden">
            <span class=" times-new active">Times New Roman</span>
            <span class="calibri">Calibri</span>
            <span class="courier-new">Courier New</span>
            <span class="georgia">Georgia</span>
            <span class="Roboto">Roboto</span>
            <span class="comic-sans-ms">Comic Sans MS</span>
          </div>

          <div class="body">
            <!-- Genere with JavaScript -->
          </div>

          <div class="footer">
              <div class="left">
                <img src="../../assets/images/uploadImg/<?= $allData['profilePicture'] ?>" alt="">
                <p class="text">Votre story</p>
              </div>

             <div class="right">
               <div class="icone-start">
                 <img src="../../assets/images/icons/backrebel.png" alt="">
               </div>
               <p class="text">Amis proches</p>
             </div>
             <div class="music">
               <img src="../../assets/images/icons/music.png" alt="" title="add music on your story">
             </div>
          </div>
      </div>
    </div>
   </div>
 </form>

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
       <div class="content-txt"> </div>
       <div class="bloc-img-story">
         <video src="" autoplay loop width="100%" height="100%"></video>
         <img src="" class="img-post" alt="" />
       </div>
       <div class="story-full-head">
         <div class="profile-picture" id="my-profile-picture">
             <img src="" alt="" class="profileFull">
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

   </div>
 </div>
