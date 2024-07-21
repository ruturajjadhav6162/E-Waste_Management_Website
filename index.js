const slider = document.querySelector(".slider");

function activate(e) {
  const items = document.querySelectorAll(".item");
  e.target.matches(".next") && slider.append(items[0]);
  e.target.matches(".prev") && slider.prepend(items[items.length - 1]);
}


var coll = document.getElementsByClassName("collapsible");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


const title = document.querySelector('.title')
const leaf1 = document.querySelector('.leaf1')
const leaf2 = document.querySelector('.leaf2')
const bush2 = document.querySelector('.bush2')
const mount1 = document.querySelector('.mount1')
const mount2 = document.querySelector('.mount2')
document.addEventListener('scroll', function() {
    let value = window.scrollY

    title.style.marginTop = value * 1.1 + 'px'

    leaf1.style.marginLeft = -value + 'px'
    leaf2.style.marginLeft = value + 'px'

    bush2.style.marginBottom = -value + 'px'

    mount1.style.marginBottom = -value * 1.1 + 'px'
    mount2.style.marginBottom = -value * 1.2 + 'px'
})

window.onload = function() {
  const cards = document.querySelectorAll('.card');
  let currentIndex = 0;
  function showCard(index) {
    cards.forEach((card, i) => {
      if (i === index) {
        card.style.transform = 'translateX(0)';
      } else {
        card.style.transform = 'translateX(100%)';
      }
    });
  }
  function swapCards() {
    currentIndex = (currentIndex + 1) % cards.length;
    showCard(currentIndex);
  }
  showCard(currentIndex);
  setInterval(swapCards, 2000);
}

let currentIndex = 0;
const thumbnails = [
  'MQLadfsvfLo',
  'ApdkhWd7SfQ',
  '-uyIzKIw0xY',
  '131WJUdNJ2Q',
  'eT34ypRodB0'
];
function prevVideo() {
  currentIndex = (currentIndex - 1 + thumbnails.length) % thumbnails.length;
  updateThumbnails();
}
function nextVideo() {
  currentIndex = (currentIndex + 1) % thumbnails.length;
  updateThumbnails();
}
function updateThumbnails() {
  const container = document.querySelector('.container');
  container.innerHTML = ''; // Clear container
  const prevBtn = document.getElementById('prevBtn');
  const nextBtn = document.getElementById('nextBtn');
  thumbnails.forEach((videoId, index) => {
    const thumbnail = document.createElement('a');
    thumbnail.href = `https://www.youtube.com/watch?v=${videoId}`;
    thumbnail.target = '_blank';
    thumbnail.innerHTML = `<img class="thumbnail" src="https://img.youtube.com/vi/${videoId}/hqdefault.jpg">`;
    if (index === currentIndex) {
      thumbnail.classList.add('active');
    }
    container.appendChild(thumbnail);
  });
  prevBtn.style.display = currentIndex === 0 ? 'none' : 'inline-block';
  nextBtn.style.display = currentIndex === thumbnails.length - 1 ? 'none' : 'inline-block';
}
updateThumbnails();

