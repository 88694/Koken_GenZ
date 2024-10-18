'use strict'

// Select all pagination links
const paginationLinks = document.querySelectorAll('nav[aria-label="Pagination"] a');

// Add click event listeners to each pagination link
paginationLinks.forEach(link => {
  link.addEventListener('click', function(event) {
    // Prevent default link behavior (if needed)
    event.preventDefault();

    // Remove the 'aria-current' attribute from all links
    paginationLinks.forEach(item => {
      item.removeAttribute('aria-current');
      // Optionally, you can also remove 'bg-indigo-600' and 'text-white' classes to reset styles
      item.classList.remove('bg-indigo-600', 'text-white');
    });

    // Add 'aria-current' to the clicked link
    this.setAttribute('aria-current', 'page');

    // Update classes for active styling
    this.classList.add('bg-indigo-600', 'text-white');

    // Optionally, here you can handle page loading or content update
    console.log(`Navigated to ${this.textContent}`);
  });
});


//script to make rating interactable
document.addEventListener("DOMContentLoaded", function() {
  const ratingContainers = document.querySelectorAll(".rating-container");

  ratingContainers.forEach(container => {
      const stars = container.querySelectorAll(".rating .fa-star");
      const heart = container.querySelector(".rating .fa-heart");
      const ratingValue = container.querySelector(".rating-value");
      const likeStatus = container.querySelector(".like-status");
      let currentRating = 0; // Initial rating
      let liked = false;

      // Update star rating based on click
      stars.forEach(star => {
          star.addEventListener("click", function() {
              currentRating = this.getAttribute("data-value");
              updateStars(currentRating, stars);
          });

          star.addEventListener("mouseover", function() {
              const hoverValue = this.getAttribute("data-value");
              updateStars(hoverValue, stars);
          });

          star.addEventListener("mouseout", function() {
              updateStars(currentRating, stars);
          });
      });

      // Update like status based on heart click
      heart.addEventListener("click", function() {
          liked = !liked;
          heart.classList.toggle("fas", liked);
          heart.classList.toggle("far", !liked);
      });

      // Function to update star visuals
      function updateStars(rating, stars) {
          stars.forEach(star => {
              const starValue = star.getAttribute("data-value");
              if (starValue <= rating) {
                  star.classList.add("fas");
                  star.classList.remove("far");
              } else {
                  star.classList.add("far");
                  star.classList.remove("fas");
              }
          });
      }

      // Initialize the stars display
      updateStars(currentRating, stars);
  });
});
