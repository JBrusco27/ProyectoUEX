document.addEventListener('DOMContentLoaded', function() {
    let active = true;
  
    const preferencesDropdownContent = document.querySelector("#preferences-dropdown-content");
    const preferencesDropdownContentView = document.querySelector("#preferences-dropdown-content-view");
    const preferencesDropdownContentAction = document.getElementById("preferences-dropdown-content-action");
    
    preferencesDropdownContentView.addEventListener('click', function(event) {
      event.stopPropagation();
      if (active) {
        preferencesDropdownContentAction.style.display = "inline-block";
        preferencesDropdownContent.style.width = "13rem";
        document.querySelector(".arrow-icon").style.transform = "rotate(90deg)";
        active = false;
      } else {
        preferencesDropdownContentAction.style.display = "none";
        preferencesDropdownContent.style.width = "";
        document.querySelector(".arrow-icon").style.transform = "rotate(0deg)";
        active = true;
      }
    });
    
    const handleClickOutside = function(event) {
      if (!preferencesDropdownContent.contains(event.target)) {
        preferencesDropdownContentAction.style.display = "none";
        preferencesDropdownContent.style.width = "";
        document.querySelector(".arrow-icon").style.transform = "rotate(0deg)";
        active = true;
      }
    };
    
    document.addEventListener('click', handleClickOutside);
    
    let active2 = true;
    document.querySelector(".menu-icon").addEventListener('click', function() {
        if (active2) {
        document.querySelector("#wrap-container").classList.add("wrap-container-active");
        document.querySelector(".container").style.borderRadius = "50px";
        active2 = false;
        } else {
            document.querySelector(".container").style.borderRadius = "";
            document.querySelector("#wrap-container").classList.remove("wrap-container-active");
            active2 = true;
        }
    });  
    document.querySelector("#nav-close-icon").addEventListener('click', function() {
        if (active2) {
        document.querySelector("#wrap-container").classList.add("wrap-container-active");
        document.querySelector(".container").style.borderRadius = "50px";
        active2 = false;
        } else {
            document.querySelector(".container").style.borderRadius = "";
            document.querySelector("#wrap-container").classList.remove("wrap-container-active");
            active2 = true;
        }
    });  

  });   
