//.............. ...Start Swiper Story ................
let swiper = new Swiper(".mySwiper",{
    slidesPerView: 5,
    spaceBetween : 4,
})


// ..................Window Scroll.................
window.addEventListener('scroll',()=>{
    // document.querySelector('.profile-popup').style.display='none'
    // //document.querySelector('.add-post-popup').style.display='none'
    // document.querySelector('.theme-customize').style.display='none'
    // document.querySelector('.notification-box').style.display='none'
})


// .......................Start Aside...................
let menuItem = document.querySelectorAll('.menu-item');

// Active remove..
const removeActive = ()=>{
    menuItem.forEach(item=>{
        item.classList.remove('active')
    })
}

menuItem.forEach(item=>{
    item.addEventListener('click',()=>{
        removeActive();
        item.classList.add('active');
        document.querySelector('.notification-box').style.display='none'
    })
})

// ........................Notifcation................
document.querySelector('#Notify-box').addEventListener('click',()=>{
    document.querySelector('.notification-box').style.display='block'
    document.querySelector('#ntCounter1').style.display='none'
})

// search chat
let message = document.querySelectorAll('.message');
let messageSearch = document.querySelector('#message-search');

const searchMessage = () => {
  let val = messageSearch.value.toLowerCase();
  message.forEach(user => {
    let name = user.querySelector('h5').textContent.toLowerCase();
    if (name.indexOf(val) !== -1) {
      user.style.display = 'flex';
    } else {
      user.style.display = 'none';
    }
  });
};

messageSearch.addEventListener('keyup', searchMessage);

// .....................Message...................
document.querySelector('#messageMenu').addEventListener('click',()=>{
    document.querySelector('#notfyCoutner2').style.display='none';
    document.querySelector('.messages').classList.toggle('boxshadow1');
    setTimeout(() => {
        document.querySelector('.messages').classList.remove('boxshadow1');
    }, 3000);
})


// ...............Start..Firend Rquestt...............
let Accept = document.querySelectorAll('#Accept');
let Dlete = document.querySelectorAll('#Delete');

Accept.forEach(accept=>{
    accept.addEventListener('click',()=>{
        accept.parentElement.style.display='none'
        accept.parentElement.parentElement.querySelector('.alert').style.display='block'
    })
});
Dlete.forEach(deletee=>{
    deletee.addEventListener('click',()=>{
        deletee.parentElement.parentElement.style.display='none'
    })
});


//.............. ...Start Profile Popup................

document.querySelectorAll('#my-profile-picture').forEach(AllProfile => {
    AllProfile.addEventListener('click',()=>{
        document.querySelector('.profile-popup').style.display='flex'
    })
});

document.querySelectorAll('.close').forEach(AllCloser=>{
    AllCloser.addEventListener('click',()=>{
        document.querySelector('.profile-popup').style.display='none'
        document.querySelector('.add-post-popup').style.display='none'
        document.querySelector('.theme-customize').style.display='none'
    })
});

document.querySelector('#profile-upload').addEventListener('change',()=> {
  document.querySelector('img.preview').src = URL.createObjectURL(document.querySelector('#profile-upload').files[0])
})

document.querySelector('#save-picture').addEventListener('click',()=>{
    document.querySelectorAll('#my-profile-picture img').forEach(AllMyProfileImg=>{
        AllMyProfileImg.src = URL.createObjectURL(document.querySelector('#profile-upload').files[0])
    })
});

//.................Start Add post Popup................
let inputPost = document.querySelector('#add-post');

inputPost.addEventListener('click',()=>{

  if (event.target === inputPost && inputPost.value === '') {
   document.querySelector('.add-post-popup').style.display='flex';
 }

});

document.querySelector('#feed-pic-upload').addEventListener('change',()=>{
    document.querySelector('#postIMg').src = URL.createObjectURL(document.querySelector('#feed-pic-upload').files[0]);
});

//.................Start Add story................

document.querySelector('#add-story').addEventListener('change',()=>{
    document.querySelector('#hidden .img').src = URL.createObjectURL(document.querySelector('#add-story').files[0]);
    document.querySelector('#hidden').style.display='block';
});

// ................Mini Button input................
document.querySelector('.mini-button').addEventListener('click',()=>{
    document.querySelector('.input-post').classList.toggle('boxshadow1');
    setTimeout(() => {
        document.querySelector('.input-post').classList.remove('boxshadow1');
    }, 3000);
});

document.querySelector('.mini-button').addEventListener('dblclick',()=>{
    document.querySelector('.add-post-popup').style.display='flex'
});

// ..............Liked button.............


document.querySelectorAll('.action-button span:first-child i').forEach(liked=>{
    liked.addEventListener('click',()=>{
        liked.classList.toggle('liked');
    })
})


// ......................Theme CustoMize........................
// remove active class frome all menu items
let menuItems = document.querySelectorAll('.menu-items');

let changeActiveItem = () => {
  menuItems.forEach(item  => {
    item.classList.remove('active')
  })
}

//Theme
let theme = document.querySelector('#theme');
let themeModal = document.querySelector('.theme-customize');

// opens Modal
let openThemeModal = () => {
  themeModal.style.display = 'grid';
}

// close Modal
let closeThemeModal = (e) => {
  if (e.target.classList.contains('theme-customize')) {
    themeModal.style.display = 'none';
    changeActiveItem();
    themeModal.classList.remove('active');
  }
}

theme.addEventListener('click', openThemeModal);
document.addEventListener('click', closeThemeModal);


//................... Font Size..................
let fontSize = document.querySelectorAll('.choose-size span');

const removeActiveSelector = ()=>{
    fontSize.forEach(size=>{
        size.classList.remove('active')
    })
}


fontSize.forEach(size=>{
    size.addEventListener('click',()=>{
        let fontSize;
        removeActiveSelector();
        size.classList.toggle('active');


        if(size.classList.contains('font-size-1')){
            fontSize = '10px';
        }else if(size.classList.contains('font-size-2')){
            fontSize = '13px';
        }else if(size.classList.contains('font-size-3')){
            fontSize = '16px';
        }
        // Html root fontsize change...
        document.querySelector('html').style.fontSize = fontSize;
    })
})


//................... Primary Color..................

let colorpallete = document.querySelectorAll('.choose-color span');
var root = document.querySelector(':root');


// remove coloractive........
const removeActiveColor = ()=>{
    colorpallete.forEach(color=>{
        color.classList.remove('active')
    })
}

colorpallete.forEach(color => {
    color.addEventListener('click',()=>{
        let primaryHue;
        removeActiveColor();
        color.classList.add('active');

        if(color.classList.contains('color-1')){
            Hue = 252;
        }else if(color.classList.contains('color-2')){
            Hue = 52;
        }else if(color.classList.contains('color-3')){
            Hue = 352;
        }else if(color.classList.contains('color-4')){
            Hue = 152;
        }else if(color.classList.contains('color-5')){
            Hue = 202;
        }
        root.style.setProperty('--primary-color-hue',Hue);
    })
});



//...................Background Change..................

let bg1 = document.querySelector('.bg1');
let bg2 = document.querySelector('.bg2');

// Theme Background value.....
let darkColorLightTheme;
let lightColorLightTheme;
let whiteColorLightTheme;

bg1.classList.add('active');

const changBg = ()=>{
    root.style.setProperty('--color-dark-light-theme', darkColorLightTheme);
    root.style.setProperty('--color-light-light-theme',lightColorLightTheme);
    root.style.setProperty('--color-white-light-theme', whiteColorLightTheme);
}

bg2.addEventListener('click',()=>{
    darkColorLightTheme = '95%';
    lightColorLightTheme = '5%';
    whiteColorLightTheme = '12%';

    //Add active class
    bg2.classList.add('active');
    bg1.classList.remove('active');

    bgicon();
    changBg();
});

bg1.addEventListener('click',()=>{
    darkColorLightTheme = '35%';
    lightColorLightTheme = '92%';
    whiteColorLightTheme = '100%';
    //Add active class
    bg1.classList.add('active');
    bg2.classList.remove('active');

    bgicon();
    changBg();
    //window.location.reload();
});

// Dark Theme Aside Icon.....
let menuItemImg = document.querySelectorAll('.menu-item span img');
const bgicon = ()=>{
    menuItemImg.forEach(icon=>{
        icon.classList.add('icon-bg');
    })
}

// footer

/**
  The setupScrollBehavior function takes an element (in this case, the footer element) as a parameter.
  It creates a scroll event listener that compares the current scroll position with the previous position.
  If the current position is smaller (the user is scrolling upwards), the footer is hidden by moving its content downwards (100% out of view).
  If the current position is larger (the user is scrolling downwards), the footer is displayed by placing its content back to its normal position.
*/

/**
 * Scroll behavior to show/hide the footer based on user scroll direction.
 * @param {HTMLElement} footer - The footer element to control.
 */
function setupScrollBehavior(footer) {

    //the previous position.
    let prevScrollPos = window.pageYOffset;

    /**
     * Event listener for the scroll event to control footer visibility.
     * @param {Event} event - The scroll event.
     */
    function handleScroll(event) {

        //the current position.
        const currentScrollPos = window.pageYOffset;

        if (prevScrollPos > currentScrollPos) {
            // User is scrolling down, show the footer.
            footer.style.transform = 'translateY(0)';
        } else {
            // User is scrolling up, hide the footer.
            footer.style.transform = 'translateY(100%)';
        }

        prevScrollPos = currentScrollPos;
    }

    // Attach the scroll event listener to the window.
    window.addEventListener('scroll', handleScroll);
}

// Example usage:
const footerElement = document.getElementById('footerPage');
setupScrollBehavior(footerElement);