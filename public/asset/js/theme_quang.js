
 
   window.addEventListener("load", (event) => {
      function toggleSubMenu(subMenuId) {
         var subMenu = document.getElementById(subMenuId);
         if (subMenu.classList.contains('show')) {
            subMenu.classList.remove('show');
         } else {
            subMenu.classList.add('show');
         }
      }
    });