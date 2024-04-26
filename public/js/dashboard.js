// const toggle = document.getElementById('toggle');

// toggle.addEventListener('click', function () {
//     console.log("toggle")
// });

// This line selects the <aside> element in the HTML document and assigns it to a variable called 'aside'
const aside = document.querySelector('aside');

// This line selects an element with an id of 'headerbox' and assigns it to a variable called 'headerbox'
const headerbox = document.getElementById("headerbox");

// This line selects an element with an id of 'notificationbox' and assigns it to a variable called 'notificationbox'
const notificationbox = document.getElementById("notificationbox");

// This checks if there is a value in the 'pinned' key in the localStorage object, and if it is 'true', adds a 'pinned' class to the 'aside' element
if(localStorage.getItem("pinned") == "true") {
    aside.classList.add('pinned');
}

// This function toggles the 'pinned' class on the 'aside' element and updates the 'pinned' key in the localStorage object
function togglePinnedSidebar() {
    aside.classList.toggle("pinned");
    if(aside.classList.contains('pinned')) {
        localStorage.setItem("pinned", "true");
    } else {
        localStorage.setItem("pinned", "false");
    }
    console.log(localStorage.getItem("pinned"));
}

// This function toggles the 'd-none' class on the 'headerbox' element
function toggleheaderbox() {
    headerbox.classList.toggle("d-none");
}

// This function toggles the 'd-none' class on the 'notificationbox' element
function toggleNotificationBox() {
    notificationbox.classList.toggle("d-none");
}

// This function toggles between a 'light' and 'dark' theme and updates the 'theme' key in the localStorage object
function toggleMode() {
    var theme = localStorage.getItem("theme");
    document.body.classList.remove(theme);
    if (theme == 'light') {
        theme = "dark";
    } else {
        theme = "light";
    }
    localStorage.setItem("theme", theme);
    document.body.classList.add(theme);
}

// This function toggles the 'show' class on the 'aside' element
function toggleSidebar() {
    aside.classList.toggle("show")
}
