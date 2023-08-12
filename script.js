document.addEventListener("DOMContentLoaded", function() {
  var slider = document.getElementById("slider");
  var sliderImages = slider.getElementsByClassName("slider-image");
  var currentImageIndex = 0;

  function showImage(index) {
    for (var i = 0; i < sliderImages.length; i++) {
      sliderImages[i].style.display = "none";
    }
    sliderImages[index].style.display = "block";
  }

  function nextImage() {
    currentImageIndex++;
    if (currentImageIndex >= sliderImages.length) {
      currentImageIndex = 0;
    }
    showImage(currentImageIndex);
  }

  setInterval(nextImage, 3000); 
});

document.addEventListener("DOMContentLoaded", function() {
  var toggleButton = document.getElementById("toggleButton");
  var additionalInfo = document.getElementById("additionalInfo");

  toggleButton.addEventListener("click", function() {
    if (additionalInfo.style.display === "none") {
      additionalInfo.style.display = "block";
      toggleButton.textContent = "Hide";
    } else {
      additionalInfo.style.display = "none";
      toggleButton.textContent = "Show More";
    }
  });
});

document.addEventListener("DOMContentLoaded", function() {

  var navLinks = document.querySelectorAll("nav ul li a");
  for (var i = 0; i < navLinks.length; i++) {
    navLinks[i].addEventListener("click", function(event) {
      event.preventDefault();
      var targetSectionId = this.getAttribute("href");
      var targetSection = document.querySelector(targetSectionId);
      var targetOffsetTop = targetSection.offsetTop;

      window.scrollTo({
        top: targetOffsetTop,
        behavior: "smooth"
      });
    });
  }
});

document.addEventListener("DOMContentLoaded", function() {

  var portfolioItems = document.querySelectorAll(".portfolio-image");
  for (var i = 0; i < portfolioItems.length; i++) {
    portfolioItems[i].addEventListener("mouseover", function() {
      this.style.opacity = "1";
    });
    portfolioItems[i].addEventListener("mouseout", function() {
      this.style.opacity = "1";
    });
  }
});

document.addEventListener("DOMContentLoaded", function() {
  var fadeElements = document.querySelectorAll(".fade-in");
  var threshold = 0.5;

  function handleIntersection(entries, observer) {
    entries.forEach(function(entry) {
      if (entry.intersectionRatio > threshold) {
        entry.target.classList.add("fade-in-show");
        observer.unobserve(entry.target);
      }
    });
  }

  var options = {
    root: null,
    rootMargin: "0px",
    threshold: threshold
  };

  var observer = new IntersectionObserver(handleIntersection, options);
  fadeElements.forEach(function(element) {
    observer.observe(element);
  });
});