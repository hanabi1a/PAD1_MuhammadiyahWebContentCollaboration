document.addEventListener("DOMContentLoaded", function () {
    // Get the dropdown button and menu
    var dropdownButton = document.querySelector(".btn-login");
    var dropdownMenu = document.querySelector(".dropdown-menu");
  
    // Add a click event listener to the dropdown button
    dropdownButton.addEventListener("click", function () {
      // Toggle the 'show' class on the dropdown menu
      dropdownMenu.classList.toggle("show");
    });
  
    // Close the dropdown menu if the user clicks outside of it
    window.addEventListener("click", function (event) {
      if (!event.target.matches(".btn-login")) {
        var dropdowns = document.getElementsByClassName("dropdown-menu");
        for (var i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains("show")) {
            openDropdown.classList.remove("show");
          }
        }
      }
    });
  });
  