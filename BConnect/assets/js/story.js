const allStories = [
  [
    {
      id: 0,
      author: "The Assasin",
      imageUrl: "../../assets/images/img/1.jpg",
    },

    {
      id: 1,
      author: "The Assasin",
      imageUrl: "../../assets/images/img/2.jpg",
    },

    {
      id: 2,
      author: "The Assasin",
      imageUrl: "../../assets/images/img/3.jpg",
    },
  ],
  [
    {
      id: 3,
      author: "BAH Leo",
      imageUrl: "../../assets/images/img/9.jpg",
    },

    {
      id: 4,
      author: "BAH Leo",
      imageUrl: "../../assets/images/img/5.jpg",
    },

    {
      id: 5,
      author: "BAH Leo",
      imageUrl: "../../assets/images/img/6.jpg",
    },
  ],
  [
    {
      id: 6,
      author: "M. Fora",
      imageUrl: "../../assets/images/img/7.jpg",
    },

    {
      id: 7,
      author: "Fora",
      imageUrl: "../../assets/images/img/8.jpg",
    },

    {
      id: 8,
      author: "Fora",
      imageUrl: "../../assets/images/img/9.jpg",
    },
  ],
  [
    {
      id: 9,
      author: "Golden",
      imageUrl: "../../assets/images/img/10.jpg",
    },

    {
      id: 9,
      author: "Golden",
      imageUrl: "../../assets/images/img/11.jpg",
    },

    {
      id: 9,
      author: "Golden",
      imageUrl: "../../assets/images/img/12.jpg",
    },

    {
      id: 9,
      author: "Golden",
      imageUrl: "../../assets/images/img/13.jpg",
    },
  ],

];

const stories = document.querySelector(".stories");
const storiesFullView = document.querySelector(".stories-full-view");
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

let currentActive = 0;
let currentActiveSubStory = 0;

const createStories = () => {
  allStories.forEach((subStory, i) => {
    const story = document.createElement("div");
    story.classList.add("story");
    const img = document.createElement("img");
    img.src = subStory[0].imageUrl;
    const blocProfile =  document.createElement("div");
    blocProfile.classList.add("bloc-profile-author");
    const profilePicture =  document.createElement("div");
    profilePicture.classList.add("profile-picture");
    const picture =  document.createElement("img");
    picture.src = subStory[2].imageUrl;
    const author = document.createElement("div");
    author.classList.add("author");
    author.innerHTML = subStory[0].author;

    profilePicture.appendChild(picture);
    blocProfile.appendChild(profilePicture);
    blocProfile.appendChild(author);


    story.appendChild(img);
    story.appendChild(blocProfile);

    stories.appendChild(story);

    story.addEventListener("click", () => {
      showFullView(i);
    });
  });
};

createStories();

const showFullView = (index) => {
  currentActive = index;
  updateFullView();
  storiesFullView.classList.add("active");
};

closeBtn.addEventListener("click", () => {
  storiesFullView.classList.remove("active");
  currentActiveSubStory = 0;
  currentActive = 0;
});

const updateFullView = () => {
  if (
    currentActive >= 0 &&
    currentActive < allStories.length &&
    currentActiveSubStory >= 0 &&
    currentActiveSubStory < allStories[currentActive].length
  ) {
    storyImageFull.src = allStories[currentActive][currentActiveSubStory].imageUrl;
    storyAuthorFull.innerHTML = allStories[currentActive][currentActiveSubStory].author;
  }
};

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

// Gestionnaire d'événement pour la détection du défilement
window.addEventListener("scroll", () => {
  if (window.scrollX > 0) {
    // Faire l'action du bouton "Précédent"
    if (currentActive > 0 || currentActiveSubStory > 0) {
      if (currentActiveSubStory > 0) {
        currentActiveSubStory--;
      } else {
        currentActive--;
        currentActiveSubStory = allStories[currentActive].length - 1;
      }
    }
    updateFullView();
  } else if (window.scrollX < 0) {
    // Faire l'action du bouton "Suivant"
    if (currentActive < allStories.length - 1 || currentActiveSubStory < allStories[currentActive].length - 1) {
      if (currentActiveSubStory >= allStories[currentActive].length - 1) {
        currentActive++;
        currentActiveSubStory = 0;
      } else {
        currentActiveSubStory++;
      }
      updateFullView();
    }
  }
});


nextBtnFull.addEventListener("click", () => {
  if (currentActive < allStories.length - 1 || currentActiveSubStory < allStories[currentActive].length - 1) {
    if (currentActiveSubStory >= allStories[currentActive].length - 1) {
      currentActive++;
      currentActiveSubStory = 0;
    } else {
      currentActiveSubStory++;
    }
  }
  updateFullView();
});

previousBtnFull.addEventListener("click", () => {
  if (currentActive > 0 || currentActiveSubStory > 0) {
    if (currentActiveSubStory > 0) {
      currentActiveSubStory--;
    } else {
      currentActive--;
      currentActiveSubStory = allStories[currentActive].length - 1;
    }
  }
  updateFullView();
});
