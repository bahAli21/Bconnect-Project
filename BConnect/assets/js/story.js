const stories = document.querySelector(".stories");
const allStoriesJSON = stories.dataset.stories; // Récupèration des données JSON depuis l'attribut data-stories
const allStories = JSON.parse(allStoriesJSON); // Parse les données JSON

const storie = document.querySelector(".storie");
const storiesFullView = document.querySelector(".stories-full-view");
const createStoriesFullView = document.querySelector(".create-stories-full-view");
const closeBtn = document.querySelector(".close-btn");
const storyImageFull = document.querySelector(".stories-full-view .story img");
const storyAuthorFull = document.querySelector(
  ".stories-full-view .story .author"
);
const nextBtn = document.querySelector(".stories-container .next-btn");
const previousBtn = document.querySelector(".stories-container .previous-btn");
const storiesContent = document.querySelector(".stories-container .content");
const nextBtnFull = document.querySelector(".stories-full-view .next-btn");
const previousBtnFull = document.querySelector(
  ".stories-full-view .previous-btn"
);

const updateFullView = () => {

  if (
    currentActive >= 0 &&
    currentActive < allStories.length &&
    currentActiveSubStory >= 0 &&
    currentActiveSubStory < allStories[currentActive].length
  ) {
    storyImageFull.src = allStories[currentActive][currentActiveSubStory].postContent;
    storyAuthorFull.innerHTML = allStories[currentActive][currentActiveSubStory].author;
    const profileFullImage = document.querySelector(".profileFull");
    profileFullImage.src = "../../assets/images/uploadImg/" + allStories[currentActive][currentActiveSubStory].AuthorImgUrl;
    displayFooter(allStories[currentActive][currentActiveSubStory].id);
    createIndicators(currentActive, currentActiveSubStory);
  }
};

const displayFooter = (i) => {
  document.querySelectorAll('.story-footer').forEach((footer) => {
    const storyId = footer.getAttribute('data-story-id');
    if (storyId === i) {
      footer.style.display = 'flex';
    } else {
      footer.style.display = 'none';
    }
  });
};


const showFullView = (index) => {
  currentActive = index;
  displayFooter(allStories[currentActive][currentActiveSubStory].id);
  updateFullView();
  storiesFullView.classList.add("active");
};

let currentActive = 0;
let currentActiveSubStory = 0;

const createStoryFooter = () => {
  allStories.forEach((subStory) => {
    subStory.forEach((story) => {
      const storyFullViewContent = document.querySelector('.stories-full-view .content');
      const footerStory = document.createElement('div');
      footerStory.classList.add('story-footer');
       footerStory.setAttribute('data-story-id', story.id);

      const messageInput = document.createElement('div');
      messageInput.classList.add('input-message');

      const inputElement = document.createElement("input");
      inputElement.type = "text";
      inputElement.placeholder = "Envoyer un message";

      messageInput.appendChild(inputElement);

      const btnActionStory = document.createElement('div');
      btnActionStory.classList.add('btn-action-story');

      const spanHeart = createHeartButton(story.id);
      const spanSend = document.createElement('span');
      spanSend.innerHTML = '<i class="fa-regular fa-paper-plane"></i>';

      btnActionStory.appendChild(spanHeart);
      btnActionStory.appendChild(spanSend);

      footerStory.appendChild(messageInput);
      footerStory.appendChild(btnActionStory);

      storyFullViewContent.appendChild(footerStory);
    });
  });
};

const createHeartButton = (storyId) => {
  const spanHeart = document.createElement('span');
  spanHeart.innerHTML = '<i class="fa fa-heart"></i>';
  spanHeart.classList.add('bouton-j-aime');
  spanHeart.dataset.contentId = storyId;
  const isLiked = localStorage.getItem(`liked_${storyId}`);
  if (isLiked === 'true') {
    spanHeart.classList.add('liked');
  }

  spanHeart.addEventListener('click', () => {
    spanHeart.classList.toggle('liked');

    if (spanHeart.classList.contains('liked')) {
      localStorage.setItem(`liked_${storyId}`, 'true');
    } else {
      localStorage.removeItem(`liked_${storyId}`);
    }
  });

  return spanHeart;
};


const createIndicators = (activeStory, activeIndicators) => {
  const divIndicators = document.createElement('div');
  divIndicators.classList.add('indicators');

  // Supprime les anciens indicateurs s'ils existent
  const oldIndicators = document.querySelector('.bloc-img-story .indicators');
  if (oldIndicators) {
    oldIndicators.remove();
  }

  const spans = [];

  for (let i = 0; i < allStories[activeStory].length; i++) {
    const span = document.createElement('span');
    divIndicators.appendChild(span);
    spans.push(span);
  }

  for (let i = 0; i < spans.length; i++) {
    if(i === activeIndicators) {
      spans[i].classList.add('active');
    }
  }

  const activeIndicator = divIndicators.querySelector('.active');
  activeIndicator.addEventListener('animationend', () => {
    //On passe au suivant , haha
    next();
  });

  document.querySelector('.bloc-img-story').appendChild(divIndicators);
}

const createStories = () => {
  allStories.forEach((subStory, i) => {
    const story = document.createElement("div");
    document.querySelector(".profileFull").src = "../../assets/images/uploadImg/${subStory[0].AuthorImgUrl}"
    story.classList.add("story");
    story.innerHTML = `
        <img src="${subStory[0].postContent}" alt="">
        <div class="bloc-profile-author">
            <div class="profile-picture">
                <img src="../../assets/images/uploadImg/${subStory[0].AuthorImgUrl}" alt="">
            </div>
            <div class="author">${subStory[0].author}</div>
        </div>
    `;

    storie.appendChild(story);
    story.addEventListener("click", () => {
      showFullView(i);

    });
  });
};

createStories();
createStoryFooter();


closeBtn.addEventListener("click", () => {
  storiesFullView.classList.remove("active");
  currentActiveSubStory = 0;
  currentActive = 0;
});

nextBtn.addEventListener("click", () => {
  storiesContent.scrollLeft += 300;
});

previousBtn.addEventListener("click", () => {
  storiesContent.scrollLeft -= 300;
});

storiesContent.addEventListener("scroll", () => {
  if (storiesContent.scrollLeft <= 24) {
    previousBtn.classList.remove("active");
  } else {
    previousBtn.classList.add("active");
  }

  let maxScrollValue =
    storiesContent.scrollWidth - storiesContent.clientWidth - 24;

  if (storiesContent.scrollLeft >= maxScrollValue) {
    nextBtn.classList.remove("active");
  } else {
    nextBtn.classList.add("active");
  }
});

const next = () => {
  if (currentActive < allStories.length - 1 || currentActiveSubStory < allStories[currentActive].length - 1) {
    if (currentActiveSubStory >= allStories[currentActive].length - 1) {
      currentActive++;
      currentActiveSubStory = 0;
    } else {
      currentActiveSubStory++;
    }
  }
  updateFullView();
}

const previous = () => {
  if (currentActive > 0 || currentActiveSubStory > 0) {
    if (currentActiveSubStory > 0) {
      currentActiveSubStory--;
    } else {
      currentActive--;
      currentActiveSubStory = allStories[currentActive].length - 1;
    }
  }
  updateFullView();
}

// Gestionnaire d'événement pour la détection du défilement
window.addEventListener("scroll", () => {
  if (window.scrollX > 0) {
    // Faire l'action du bouton "Précédent"
    previous();
  } else if (window.scrollX < 0) {
    // Faire l'action du bouton "Suivant"
    next();
  }
});

document.querySelector('.bloc-img-story').addEventListener('click', function(event) {
    const storyBlock = document.querySelector('.bloc-img-story');
    const storyBlockWidth = storyBlock.clientWidth;
    const clickX = event.clientX - storyBlock.getBoundingClientRect().left;

    if (clickX < storyBlockWidth / 3) {
        previous();
    } else if (clickX > storyBlockWidth - (storyBlockWidth / 3)) {
        next();
    }
});

nextBtnFull.addEventListener("click", () => {
  next();
});

previousBtnFull.addEventListener("click", () => {
  previous();
});




//Create story full view JS CODE
const fileInput = document.getElementById("file-input");

fileInput.addEventListener("change", function(event) {
  const selectedFile = event.target.files[0];
  if (selectedFile) {
    const fileType = selectedFile.type;

    if (fileType.includes("image")) {
      // C'est une image
      const imgUrl = URL.createObjectURL(selectedFile);
      const bodyDiv = document.querySelector(".body");
      bodyDiv.innerHTML = `<img src="${imgUrl}" alt="Image">`;
      const createStoriesView = document.querySelector(".create-stories-full-view");
      createStoriesView.classList.add('active');
    } else if (fileType.includes("video")) {
      // C'est une vidéo
      const videoUrl = URL.createObjectURL(selectedFile);
      const bodyDiv = document.querySelector(".body");
      bodyDiv.innerHTML = `<video src="${videoUrl}" controls></video>`;
      const createStoriesView = document.querySelector(".create-stories-full-view");
      createStoriesView.classList.add('active');
    }
  }
});

//grabbing drag testaria in creating fullStories
//I Love JavaScript ,haha

const textEditor = document.querySelector(".text-editor");
const writeText = document.querySelector('.write-text');
const textInput = document.getElementById("text-input");

let isDragging = false;
let offsetX, offsetY;

textEditor.addEventListener("mousedown", function(e) {
  isDragging = true;
  offsetX = e.clientX - textEditor.getBoundingClientRect().left;
  offsetY = e.clientY - textEditor.getBoundingClientRect().top;
  textEditor.classList.add("dragging");
});

document.addEventListener("mousemove", function(e) {
  if (!isDragging) return;
  const newX = e.clientX - offsetX;
  const newY = e.clientY - offsetY;

  textEditor.style.left = newX + "px";
  textEditor.style.top = newY + "px";

  console.log("Left:", newX, "Top:", newY);
});

document.addEventListener("mouseup", function() {
  isDragging = false;
  textEditor.classList.remove("dragging");
});

writeText.addEventListener('click', function() {
  textEditor.classList.remove('hidden');
  textInput.focus();
});
