// window.onload = function() {
  addLoadEvent(function() {
    // Select either the current year or the year of the latest event, whichever comes earlier
    var latest_year = Math.min(new Date().getFullYear(), Math.round(event[0].date / 10000));
  
    for (let i = 0; i < event.length; i++) {
      // Only show events for the latest applicable year
      if (Math.round(event[i].date / 10000) == latest_year) {
        // Create event
        var eventElement = createEvent(i);
  
        // Divider 5
        var hr5 = document.createElement("hr");
        hr5.classList.add("mb5");
  
        // Divider 10
        var hr10 = document.createElement("hr");
        hr10.classList.add("mb10");
  
        // Add event to month
        // Create month if doesn't exist
        var month_lower = date_month.toLowerCase();
        var monthDiv = document.getElementById(month_lower);
        if (!monthDiv) {
          var monthTitleText = document.createTextNode(date_month);
          var monthTitle = document.createElement("h2");
          monthTitle.classList.add("mb10");
          monthTitle.appendChild(monthTitleText);
          monthDiv = document.createElement("div");
          monthDiv.id = month_lower;
          monthDiv.appendChild(hr10);
          monthDiv.appendChild(monthTitle);
          monthDiv.appendChild(hr5);
        }
        monthDiv.appendChild(hr5);
        monthDiv.appendChild(eventElement);
  
        // Calendar
        var calendar = document.getElementById("main-content-container");
        calendar.appendChild(monthDiv);
      }
    }
  
    // Down arrow
    document.getElementById("down-arrow").addEventListener("click", function() {
      document.getElementById("main-content-container").scrollIntoView({ behavior: "smooth" });
    });
  });