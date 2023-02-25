const menu = document.querySelector('.navBar__menu');
menu.addEventListener('click', function () {
    const content2 = document.querySelector('.navBar__navList');
        content2.classList.toggle('responsive-navList');
});


// sticky nav bar
const stickyNav = () => {
    const header = document.querySelector('.navBar');
    
    window.addEventListener('scroll', () => {
        header.classList.toggle('sticky-header', window.scrollY > 0);
    });
}

stickyNav();

// for playing video 
setInterval(function(){
    if(document.activeElement instanceof HTMLIFrameElement){
        document.querySelector('.howToUse__right__play').style.opacity=0;
        document.querySelector('.howToUse__right__play').style.visibility='hidden';
        document.querySelector('.howToUse__right__youtube').style.opacity=1;
    }
} , 50)

// add a map
// Initialize and add the map
function initMap() {
    // The location of location
    const location = { lat: -25.344, lng: 131.031 };
    // The map, centered at location
    const map = new google.maps.Map(document.getElementById("map"), {
        zoom: 4,
        center: location,
    });
    // The marker, positioned at location
    const marker = new google.maps.Marker({
        position: location,
        map: map,
    });
}

window.initMap = initMap;


// add a back to top button
const backToTopButton = document.getElementById("backToTopButton");
window.addEventListener("scroll", function() {
    if (window.pageYOffset > 100) {
        backToTopButton.style.display = "flex";
    } else {
        backToTopButton.style.display = "none";
    }
});

backToTopButton.addEventListener("click", function() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});

// add translate to web page
window.gtranslateSettings = {
    "default_language":"en",
    "languages":["en","ar"],
    "wrapper_selector":".gtranslate_wrapper"
}