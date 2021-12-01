jQuery(document).ready(() => {
    const menu = document.querySelector(".menu");
    const menuMain = menu.querySelector(".menu-main");
    const goBack = menu.querySelector(".go-back");
    const menuTrigger = document.querySelector(".mobile-menu-trigger");
    const closeMenu = menu.querySelector(".mobile-menu-close");
    let subMenu;
    menuMain.addEventListener("click", (e) => {
        if (!menu.classList.contains("active")) {
            return;
        }
        if (e.target.closest(".menu-item-has-children")) {
            const hasChildren = e.target.closest(".menu-item-has-children");
            showSubMenu(hasChildren);
        }
    });
    goBack.addEventListener("click", () => {
        hideSubMenu();
    })
    menuTrigger.addEventListener("click", () => {
        toggleMenu();
    })
    closeMenu.addEventListener("click", () => {
        toggleMenu();
    })
    document.querySelector(".menu-overlay").addEventListener("click", () => {
        toggleMenu();
    })

    function toggleMenu() {
        menu.classList.toggle("active");
        document.querySelector(".menu-overlay").classList.toggle("active");
    }

    function showSubMenu(hasChildren) {
        subMenu = hasChildren.querySelector(".sub-menu");
        subMenu.classList.add("active");
        subMenu.style.animation = "slideLeft 0.5s ease forwards";
        const menuTitle = hasChildren.querySelector("i").parentNode.childNodes[0].textContent;
        menu.querySelector(".current-menu-title").innerHTML = menuTitle;
        menu.querySelector(".mobile-menu-head").classList.add("active");
    }

    function hideSubMenu() {
        subMenu.style.animation = "slideRight 0.5s ease forwards";
        setTimeout(() => {
            subMenu.classList.remove("active");
        }, 300);
        menu.querySelector(".current-menu-title").innerHTML = "";
        menu.querySelector(".mobile-menu-head").classList.remove("active");
    }

    window.onresize = function () {
        if (this.innerWidth > 991) {
            if (menu.classList.contains("active")) {
                toggleMenu();
            }

        }
    }


// Get the modal
    var modal = document.getElementById("myModal");

// Get the button that opens the modal
    var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
    btn.onclick = function () {
        modal.style.display = "block";
    }

// When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    }

// Get the modal
    var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
    var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
    var span1 = document.getElementsByClassName("close1")[0];

// When the user clicks the button, open the modal
    btn1.onclick = function () {
        modal1.style.display = "block";
    }

// When the user clicks on <span> (x), close the modal
    span1.onclick = function () {
        modal1.style.display = "none";
    }

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal1) {
            modal1.style.display = "none";
        }
    }

// Get the modal
    var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
    var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
    var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks the button, open the modal
    btn2.onclick = function () {
        modal2.style.display = "block";
    }

// When the user clicks on <span> (x), close the modal
    span2.onclick = function () {
        modal2.style.display = "none";
    }

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target === modal2) {
            modal2.style.display = "none";
        }
    }

    const popup = document.querySelector('.popup');
    const close = document.querySelector('.close-modal');

    window.onload = function() {
        setTimeout(function (){
            popup.style.display = "block";

            //
        }, 1000)
    }
    close.addEventListener('click', () => {
        popup.style.display = "none";
    });
});

