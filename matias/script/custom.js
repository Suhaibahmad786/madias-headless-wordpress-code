document.addEventListener("DOMContentLoaded", function () {

  // alert("Hello I am Custom");

  const headcontainer = document.getElementById("my-header");

  if (!headcontainer) return; // safety guard

  window.addEventListener("scroll", function () {
    if (window.scrollY > 80) {
      headcontainer.classList.add("active");
    } else {
      headcontainer.classList.remove("active");
    }
  });

});



// Contact Form Submission
document.addEventListener("submit", function(e){
  if(!e.target.matches("#contcform")) return;

  e.preventDefault();

  const conmesage = document.getElementById("contact-msg");
  const confromdata = new FormData(e.target);

  fetch("/madias/matias/action/contactform.php", {
    method: "POST",
    body: confromdata
  })
  .then(res => res.json())
  .then(data => {
    conmesage.innerText = data.msg;
    setTimeout(() => {
      location.reload();
}, 3000);
  })
  .catch(err => console.log(err));
});









fetch("http://localhost/madias/wp-json/wp/v2/posts?_embed")
.then(response => response.json())
.then(posts => {

  let output = "";

  posts.forEach(post => {
   let imageURL = '';
        if(post._embedded && post._embedded['wp:featuredmedia']){
            imageURL = post._embedded['wp:featuredmedia'][0].source_url;
        }
         let postURL = post.link;
    output += `
      <div class="post-wrapper">
      <img src="${imageURL}" alt="">
      <div class="post-info">
      <h2>${post.title.rendered}</h2>
      <a href="${postURL}">Learn More</a>
        </div>
      </div>
    `;

  });

  document.getElementById("posts").innerHTML = output;

})
.catch(error => console.log("Error:", error));






fetch("http://localhost/madias/wp-json/wp/v2/testimonials?_embed")
.then(res=> res.json())
.then(testidata =>{
  let output ='';
  testidata.forEach(post =>{
    let imageurl=''
    if(post._embedded && post._embedded['wp:featuredmedia'] && post._embedded['wp:featuredmedia'][0]){
      imageurl = post._embedded['wp:featuredmedia'][0].source_url;
    }
    let posturl = post.link;
    let testititle ='';
    testititle = post.acf.name;

    let testdescription =''
    testdescription = post.acf.testides
    let position = post.acf.position
output += `
<div class="testi-wrapper">

<h4>${testititle}</h4>
<p>${testdescription}</p>
<div class="testi-info">
<p>${position}</p>
<a href="${posturl}">Learn More</a>
</div>
</div>

`
  })
  document.getElementById("ourtesti").innerHTML = output;
})





//<img src="${imageurl}"></img>






    fetch("http://localhost/madias/wp-json/wp/v2/service?_embed")
.then(seres => seres.json())
.then(serdata => {
  let seroutput='';
  serdata.forEach(post=>{
    let imageurll=''
    if(post._embedded && post._embedded['wp:featuredmedia'] && post._embedded['wp:featuredmedia'][0]){
      imageurll = post._embedded['wp:featuredmedia'][0].source_url;
    }
let sertitle = post.acf.service_title
let serurl = post.link
    seroutput += `
    <div class="ser-box">
    <img src="${imageurll}"></img>
    <div class="ser-info">
    <h4>${sertitle}</h4>
    <a href="${serurl}">Book Now</a>
    </div>
    </div>
    `
  })
  document.getElementById("ourservice").innerHTML = seroutput;
})




let addform = document.getElementById("formadd");  //button jis se form open  hoga
let testiformbox = document.getElementById("testimonialForm"); //form ka box
let testiformclose = document.getElementById("closetestiform"); //form ka close btn jis se form close hoga
addform.addEventListener('click', function() {
    testiformbox.classList.add("formadd");
});

// close
testiformclose.addEventListener('click', function() {
    testiformbox.classList.remove("formadd");
});