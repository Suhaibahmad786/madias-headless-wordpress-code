// console.log("HEADER JS LOADED");

// console.log("register btn:", document.getElementById("register-btn"));
// console.log("popup:", document.getElementById("register-popup"));


let mobilesidemenu = document.querySelector('.side-nav');
let menuwraper = document.getElementById('sidemenu');
let closeBtn = document.getElementById('menu-close');

mobilesidemenu.addEventListener('click', function () {
    menuwraper.classList.add('active');
});

closeBtn.addEventListener('click', function () {
    menuwraper.classList.remove('active');
});



let mobilesidemenus = document.querySelector('.side-nav');
let mobmenuwraper = document.getElementById('movbilemenu');
let mobilecloseBtn = document.getElementById('mobile-menu-close');

mobilesidemenus.addEventListener('click', function () {
   mobmenuwraper.classList.add('active');
});

mobilecloseBtn.addEventListener('click', function () {
    mobmenuwraper.classList.remove('active');
});


document.addEventListener('click', function (e) {

  // open popup from HEADER button
  if (e.target.id === 'headregbtn') {
    e.preventDefault();
    document.getElementById('regitor-section')?.classList.add('active');
  }

  // close popup
  if (e.target.id === 'popupclose') {
    document.getElementById('regitor-section')?.classList.remove('active');
  }

});


