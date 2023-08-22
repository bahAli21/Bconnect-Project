const allStories = [
  [
    {
      id: 0,
      author: "The Assassin",
      imageUrl: "../../assets/images/img/1.jpg",
    },

    {
      id: 1,
      author: "The Assassin",
      imageUrl: "../../assets/images/img/2.jpg",
    },

    {
      id: 2,
      author: "The Assassin",
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
      id: 10,
      author: "Golden",
      imageUrl: "../../assets/images/img/11.jpg",
    },

    {
      id: 11,
      author: "Golden",
      imageUrl: "../../assets/images/img/12.jpg",
    },

    {
      id: 12,
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

const updateFullView = () => {
  if (
    currentActive >= 0 &&
    currentActive < allStories.length &&
    currentActiveSubStory >= 0 &&
    currentActiveSubStory < allStories[currentActive].length
  ) {
    storyImageFull.src = allStories[currentActive][currentActiveSubStory].imageUrl;
    storyAuthorFull.innerHTML = allStories[currentActive][currentActiveSubStory].author;
    displayFooter(allStories[currentActive][currentActiveSubStory].id);
    createIndicators(currentActive, currentActiveSubStory);
  }
};

const displayFooter = (i) => {
  document.querySelectorAll('.story-footer').forEach((footer, index) => {
      if (i === index) {
          footer.style.display = 'flex';
      } else {
          footer.style.display = 'none';
      }
  });
}

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

  // Supprimer les anciens indicateurs s'ils existent
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
