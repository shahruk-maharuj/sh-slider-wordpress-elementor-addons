const bannerImage = document.getElementById("bannerImage");
const bannerLink = document.getElementById("bannerLink");
const tabButtons = document.querySelectorAll(".w-20 .sh-tab");
const banners = [
  {
    image: "https://www.coupons.de/images/sliders/teaser_4997.jpg",
    link: "https://example.com/banner1",
  },
  {
    image: "https://www.coupons.de/images/sliders/teaser_4962.jpg",
    link: "https://example.com/banner2",
  },
  {
    image: "https://www.coupons.de/images/sliders/teaser_5002.jpg",
    link: "https://example.com/banner3",
  },
  {
    image: "https://www.coupons.de/images/sliders/teaser_4998.jpg",
    link: "https://example.com/banner4",
  },
  {
    image: "https://www.coupons.de/images/sliders/teaser_4996.jpg",
    link: "https://example.com/banner5",
  },
];
let currentIndex = 0;
let intervalId;

function showBanner(index) {
  bannerImage.style.opacity = 0;
  setTimeout(() => {
    bannerImage.src = banners[index].image;
    bannerImage.style.opacity = 1;
    bannerLink.href = banners[index].link;
  }, 300);

  currentIndex = index;

  // Update active class
  tabButtons.forEach((button, i) => {
    if (i === index) {
      button.classList.add("active");
    } else {
      button.classList.remove("active");
    }
  });
}

function autoSlide() {
  currentIndex++;
  if (currentIndex >= banners.length) {
    currentIndex = 0;
  }
  showBanner(currentIndex);
}

function startAutoSlide() {
  intervalId = setInterval(autoSlide, 3000);
}

function stopAutoSlide() {
  clearInterval(intervalId);
}

tabButtons.forEach((button, index) => {
  button.addEventListener("mouseover", () => {
    showBanner(index);
    stopAutoSlide();
  });

  button.addEventListener("mouseout", () => {
    startAutoSlide();
  });
});

// Set first banner and tab as active by default
showBanner(0);

startAutoSlide();
