'use strict'

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

function toggleMobileNav() {
    var mobileNav = document.getElementById("mobileNav");
    if (mobileNav.style.display === "flex") {
        mobileNav.style.display = "none";
    } else {
        mobileNav.style.display = "flex";
    }
}
