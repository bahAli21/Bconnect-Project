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

     <div class="storie">
       <?php $allStories = $story->getAllStories(); ?>
       <div class="stories" data-stories="<?= htmlspecialchars(json_encode($allStories)) ?>"></div>

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

       <div class="bloc-img-story">

         <img src="images/3.jpg" class="img-post" alt="" />
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
