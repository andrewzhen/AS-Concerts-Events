
  const week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
  const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

  var date_year;
  var date_month;
  var date_date;
  var date_day;

  function createEvent(index) {
    date_year  = Math.round(event[index].date / 10000);
    date_month = months[Math.round(event[index].date % 10000 / 100) - 1];
    date_date = Math.round(event[index].date % 100);
    date_day = week[new Date(date_month + " " + date_date + ", " + date_year).getDay()];
    
    // Date
    var date = document.createElement("p");
    var dateText = parseInt(date_date) < 10 ? document.createTextNode("0" + date_date): document.createTextNode(date_date);
    date.classList.add("event-date", "mb1");
    date.appendChild(dateText);
    
    // Day
    var day = document.createElement("p");
    var dayText = document.createTextNode(date_day);
    day.classList.add("event-day");
    day.appendChild(dayText);

    // When
    var when = document.createElement("div");
    when.appendChild(date);
    when.appendChild(day);

    // Image
    var img = document.createElement("img");
    img.src = event[index].image;

    // Image Link
    var linkImage = document.createElement("a");
    linkImage.classList.add("event-image");
    linkImage.href = event[index].url;
    linkImage.target = "_blank";
    linkImage.appendChild(img);

    // Banner
    var banner = document.createElement("div");
    banner.appendChild(linkImage);

    // Link
    var linkText = document.createTextNode(event[index].title);
    var link = document.createElement("a");
    link.appendChild(linkText);
    link.href = event[index].url;
    link.target = "_blank";
    
    // Title
    var title = document.createElement("h4");
    title.appendChild(link);
    title.classList.add("event-title", "mb2");

    // List Items
    var date_suffix = "";
    if ([1, 21, 31].includes(date_date)) {
      date_suffix = "st";
    } else if ([2, 22].includes(date_date)) {
      date_suffix = "nd";
    } else if ([3, 23].includes(date_date)) {
      date_suffix = "rd";
    } else {
      date_suffix = "th";
    }
    var listDate = document.createElement("li");
    listDate.appendChild(document.createTextNode(date_month + " " + date_date + date_suffix));

    var listTime = document.createElement("li");
    listTime.appendChild(document.createTextNode(event[index].time));

    var listLocation = document.createElement("li");
    listLocation.appendChild(document.createTextNode(event[index].location));

    // List
    var list = document.createElement("ul");
    list.appendChild(listDate);
    list.appendChild(listTime);
    list.appendChild(listLocation);

    // Details
    var details = document.createElement("div");
    details.appendChild(list);
    details.classList.add("event-details");

    // What
    var what = document.createElement("div");
    what.appendChild(title);
    what.appendChild(details);

    // Event
    var eventDiv = document.createElement("div");
    eventDiv.appendChild(when);
    eventDiv.appendChild(banner);
    eventDiv.appendChild(what);
    eventDiv.classList.add("event-container");

    return eventDiv;
  }



// Set windowHeight
function setWindowHeight() {
  let windowHeight = window.innerHeight * 0.01;
  document.documentElement.style.setProperty (
    "--windowHeight",
    `${windowHeight * 100}px`
  );
}



// Handle multiple window.onload functions
function addLoadEvent(func) {
  var oldonload = window.onload;
  if (typeof window.onload != 'function') {
    window.onload = func;
  } else {
    window.onload = function() {
      if (oldonload) {
        oldonload();
      }
      func();
    }
  }
}



addLoadEvent(function() {
  setWindowHeight();

  // Toggle hamburger menu
  toggleMenu = e => {
    // Check if menu open
    var open = document.getElementById("menu").style.transform == "translateX(0px)";
    
    // Menu slide in/out
    document.getElementById("menu-overlay").style.transform = 
    document.getElementById("menu").style.transform = open ? "translateX(-100%)" : "translateX(0px)";
    
    // Change hamburger menu icon
    if (document.getElementById("menu-icon-light")) {
      document.getElementById("menu-icon-light").src = open ? "../wp-content/themes/we-are-asce/images/menu-light.svg" : "../wp-content/themes/we-are-asce/images/exit.svg";  
    } else {
      document.getElementById("menu-icon").src = open ? "../wp-content/themes/we-are-asce/images/menu.svg" : "../wp-content/themes/we-are-asce/images/exit.svg";
    }

    // Prevent scrolling
    document.body.style.overflow = open ? "" : "hidden";
  }

  // Hamburger menu
  try {
    document.getElementById("menu-icon").addEventListener("click", toggleMenu);
  } catch (e) {}
  try {
    document.getElementById("menu-icon-light").addEventListener("click", toggleMenu);
  } catch (e) {}

  // Menu overlay
  document.getElementById("menu-overlay").addEventListener("click", toggleMenu);
});



window.onresize = function() {
  setWindowHeight();

  // Close hamburger menu on resize
  if (document.getElementById("menu").style.transform == "translateX(0px)") {
    toggleMenu();
  }
};