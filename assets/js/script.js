const headers = document.querySelector('header');

// Function to add/remove sticky class based on scroll position
function handleScroll() {
  if (window.scrollY > 0) {
    headers.classList.add('sticky-header');
  } else {
    headers.classList.remove('sticky-header');
  }
}

// Listen for the scroll event
window.addEventListener('scroll', handleScroll);

//  sticky-header-end


let searchIcon = document.querySelector('.search-icon-flex');
let searchForm = document.querySelector('.search-form');
let svg1 = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M7.333 12.667A5.333 5.333 0 1 0 7.333 2a5.333 5.333 0 0 0 0 10.667ZM14 14l-2.9-2.9" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>';

let svg2 = '<svg fill="#000" xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 384 512"><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>';
let isSvg1 = true;
if (searchIcon) { // Check if searchIcon exists before adding event listener
    searchIcon.addEventListener('click', function() {
        searchIcon.innerHTML = isSvg1 ? svg2 : svg1;
        isSvg1 = !isSvg1;
        if (searchForm) { // Check if searchForm exists before toggling class
            searchForm.classList.toggle('search-bar-show');
        }
    });
}
const header = document.querySelector('header');

// Set the initial background to linear gradient
header.style.background = 'linear-gradient(to left, #fff5da, #fff5da)';

function handleScroll() {
    if (header) { // Check if header exists before proceeding
        if (window.scrollY > 200) {
            header.style.background = '#fff'; // Solid white background for scroll greater than 200px
            header.style.boxShadow = '1px 0px 9px -5px rgba(0, 0, 0, 0.75)'; // Add box shadow

        } else {
            header.style.background = 'linear-gradient(to left, #fff5da, #fff5da)'; // Restore the gradient if less than or equal to 200px
            header.style.boxShadow="none"
        }
    }
}

window.addEventListener('scroll', handleScroll);


const detailsElements = document.querySelectorAll("details");
const summaryElements = document.querySelectorAll("summary");

summaryElements.forEach((summary, index) => {
	summary.addEventListener("click", () => {
		// Close other open details elements and remove 'active' class
		detailsElements.forEach((details, i) => {
			if (i !== index) {
				details.removeAttribute("open");
			}
		});
		summaryElements.forEach((s, i) => {
			if (i !== index) {
				s.classList.remove("actives");
			}
		});
		// Toggle 'active' class on the clicked summary
		summary.classList.toggle("actives");
	});
});
document.addEventListener("DOMContentLoaded", function() {
    // Initially hide all tab contents except for the "All" category
    var tabcontent = document.getElementsByClassName("tabcontent");
    for (var i = 0; i < tabcontent.length; i++) {
        if (tabcontent[i].id !== "All") {
            tabcontent[i].style.display = "none";
        }
    }
});

function openCity(evt, jobs) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none"; // Hide all tab content
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].classList.remove("actives"); // Remove "active" class from all buttons
        tablinks[i].style.backgroundColor = ""; // Reset background color
        tablinks[i].style.color = ""; // Reset text color
    }
    document.getElementById(jobs).style.display = "block"; // Display the selected tab content
    evt.currentTarget.classList.add("actives"); // Add "active" class to the clicked button
    evt.currentTarget.style.backgroundColor = "#f37f27"; // Set the background color to red
    evt.currentTarget.style.color = "#fff"; // Set text color to white
}

const dropdowns = document.querySelectorAll(".dropdown");

function toggleDropdown(e) {
    const svgicon = e.target;
    const parentOfTarget = svgicon.parentNode; // li

    dropdowns.forEach((dropdown) => {
        if (dropdown !== parentOfTarget && !dropdown.contains(parentOfTarget)) {
            dropdown.classList.remove("show-dropdown");
        }
    });

    if (parentOfTarget) {
        parentOfTarget.classList.toggle("show-dropdown");
    }
}

dropdowns.forEach((dropdown) => {
    const svg = dropdown.querySelector('svg');
    if (svg) { // Check if svg exists before adding event listener
        svg.addEventListener("click", toggleDropdown);
    }
});

// Add a click event listener to the document to close dropdowns when clicking outside
document.addEventListener("click", (e) => {
    if (![...dropdowns].some((dropdown) => dropdown.contains(e.target))) {
        dropdowns.forEach((dropdown) => {
            dropdown.classList.remove("show-dropdown");
        });
    }
});

function toggleButtons() {
    const toggleBtn = document.querySelector('.toggle-slide-btn');
    const cancelBtn = document.querySelector('.cancel-btn');
    const headerUl = document.querySelector('header ul');
    if (toggleBtn && cancelBtn && headerUl) { // Check if elements exist before performing actions
        headerUl.classList.toggle("show-ul");
        toggleBtn.style.display = toggleBtn.style.display === "none" ? "flex" : "none";
        cancelBtn.style.display = cancelBtn.style.display === "flex" ? "none" : "flex";
    }
}

document.addEventListener("DOMContentLoaded", function() {
    const btns = document.querySelectorAll('.ps-btn');
    const contents = document.querySelectorAll('.pros-content, .cons-content');

    // Hide all contents except .pros-content by default
    contents.forEach((content, index) => {
        if (index !== 0) {
            content.style.display = 'none';
        }
    });

    // Add click event listener to buttons
    btns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            btns.forEach(btn => btn.classList.remove('active-btn-flex'));
            // Hide all contents
            contents.forEach(content => content.style.display = 'none');

            // Add active class to clicked button
            btn.classList.add('active-btn-flex');
            // Show corresponding content
            contents[index].style.display = 'block';
        });
    });
});

let calcScrollValue = () => {
	let scrollProgress = document.getElementById("progress");
	let progressValue = document.getElementById("progress-value");
	let pos = document.documentElement.scrollTop;
	let calcHeight =
		document.documentElement.scrollHeight -
		document.documentElement.clientHeight;
	let scrollValue = Math.round((pos * 100) / calcHeight);
	if (pos > 100) {
		scrollProgress.style.display = "grid";
	} else {
		scrollProgress.style.display = "none";
	}
	scrollProgress.addEventListener("click", () => {
		document.documentElement.scrollTop = 0;
	});
	scrollProgress.style.background = `conic-gradient(#f37f27 ${scrollValue}%, #ebf3ff ${scrollValue}%)`;
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;
