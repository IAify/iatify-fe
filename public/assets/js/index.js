const items = document.querySelectorAll('.accordion button');
function toggleAccordion() {
  const itemToggle = this.getAttribute('aria-expanded');
  for (i = 0; i < items.length; i++) {
    items[i].setAttribute('aria-expanded', 'false');
  }
  if (itemToggle == 'false') {
    this.setAttribute('aria-expanded', 'true');
  }
}
items.forEach((item) => item.addEventListener('click', toggleAccordion));


// menu bar toggler 
$(document).on("click", '.open-btn', function () {
    $('.mob-bar').addClass('active');
});

$(document).on("click", '.cross-btn-main', function () {
    $('.mob-bar').removeClass('active');
});

$(document).on("click", '.theme-icon-main', function () {
  $('.theme-icon-main').addClass('active');
});

$(document).on("click", '.theme-icon-main.active', function () {
  $('.theme-icon-main').removeClass('active');
});




// dropdown 
window.onclick = function(event) {
  if (!event.target.matches('.dropdown-btn')) {
      var dropdowns = document.getElementsByClassName("dropdown-content");
      var i;
      for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.style.display === "block") {
              openDropdown.style.display = "none";
          }
      }
  }
}



function dropdowns() {
  let element = document.querySelector('.dropdown-content');
  let arrow = document.querySelector('#change');
  if (element.style.display === 'none' || element.style.display === '') {
      element.style.display = 'block';
      arrow.classList.remove('fa-solid', 'fa-angle-down');
      arrow.classList.add('fa-solid', 'fa-chevron-up');
  } else {
      element.style.display = 'none';
      arrow.classList.remove('fa-solid', 'fa-chevron-up');
      arrow.classList.add('fa-solid', 'fa-angle-down');
  }

}




function MobileDropdown(event) {
  event.preventDefault();
  const parentLi = event.target.closest("li");
  const dropdown = parentLi.querySelector(".mobile_dropdown");
  const icon = parentLi.querySelector(".arrow_icon i");

  dropdown.classList.toggle("show");
  icon.classList.toggle("rotate");
}

function innerDropdown(event) {
  const parentDiv = event.target.closest(".dropdown_links");
  const innerDropdown = parentDiv.nextElementSibling;
  const icon = parentDiv.querySelector("i");

  // Close all inner dropdowns and reset icons
  document.querySelectorAll('.inner_dropdown').forEach(dropdown => {
    if (dropdown !== innerDropdown) {
      dropdown.classList.remove('show');
    }
  });

  document.querySelectorAll('.dropdown_links i').forEach(arrow => {
    if (arrow !== icon) {
      arrow.classList.remove('rotate');
    }
  });

  // Toggle the clicked inner dropdown and icon
  innerDropdown.classList.toggle("show");
  icon.classList.toggle("rotate");
}





function ToggleMenu() {
  let SideMenu = document.querySelector('.mobile_menu');
    SideMenu.classList.add('show'); 

  }
  function CloseMenu() {
    let SideMenu = document.querySelector('.mobile_menu');
    SideMenu.classList.remove('show'); 
    window.screen.SideMenu.classList.remove('show');
  }