addLoadEvent(function() {
  var archiveHeader = document.getElementById("archive-header");
  var archiveYear = document.getElementById("archive-year");
  var years = [];

  function loadYear(year) {
    // Change title
    archiveHeader.innerHTML = year;

    // Adjust back url
    document.getElementById("back").href = ".";

    // Remove years
    while (archiveYear.lastElementChild) {
      archiveYear.removeChild(archiveYear.lastElementChild);
    }

    // Populate events by year
    for (let i = 0; i < event.length; i++) {
      var date_year = Math.round(event[i].date / 10000);

      // Divider
      var hr5 = document.createElement("hr");
      hr5.classList.add("mb5");
      
      if (date_year == year) {
        archiveYear.appendChild(createEvent(i));
        archiveYear.appendChild(hr5);
      }
    }
  }

  for (let i = 0; i < event.length; i++) {
    var date_year = Math.round(event[i].date / 10000);
    if (!years.includes(date_year)) {
      // Add year to list
      years.push(date_year);

      // Divider
      var hr5 = document.createElement("hr");
      hr5.classList.add("mb5");

      // Year
      var h2Text = document.createTextNode(date_year.toString());
      var h2 = document.createElement("h2");
      h2.appendChild(h2Text);
      h2.id = date_year;
      h2.addEventListener("click", function() { loadYear(this.id); });

      // Add to DOM
      archiveYear.appendChild(h2);
      archiveYear.appendChild(hr5);
    }
  }
});