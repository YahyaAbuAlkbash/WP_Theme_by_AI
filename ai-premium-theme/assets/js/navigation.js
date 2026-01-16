/**
 * Navigation JavaScript for AI Premium Theme
 */

(function() {
    'use strict';

    const siteNavigation = document.getElementById('site-navigation');
    
    if (!siteNavigation) {
        return;
    }

    const menuToggle = siteNavigation.getElementsByTagName('button')[0];

    // Return early if the menu toggle is not found
    if (!menuToggle) {
        return;
    }

    const menu = siteNavigation.getElementsByTagName('ul')[0];

    // Hide menu toggle button if menu is empty and return early
    if (!menu || !menu.childNodes.length) {
        menuToggle.style.display = 'none';
        return;
    }

    // Set initial aria-expanded attribute
    if (!menu.classList.contains('nav-menu')) {
        menu.classList.add('nav-menu');
    }

    // Toggle menu on button click
    menuToggle.addEventListener('click', function() {
        siteNavigation.classList.toggle('toggled');
        
        if (siteNavigation.classList.contains('toggled')) {
            menuToggle.setAttribute('aria-expanded', 'true');
        } else {
            menuToggle.setAttribute('aria-expanded', 'false');
        }
    });

    // Close menu on Escape key press
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape' && siteNavigation.classList.contains('toggled')) {
            siteNavigation.classList.remove('toggled');
            menuToggle.setAttribute('aria-expanded', 'false');
            menuToggle.focus();
        }
    });

    // Handle submenu accessibility
    const menuItems = menu.querySelectorAll('.menu-item-has-children > a');
    
    menuItems.forEach(function(item) {
        item.addEventListener('click', function(e) {
            const parentItem = this.parentNode;
            const submenu = parentItem.querySelector('ul');
            
            if (submenu && window.innerWidth < 768) {
                e.preventDefault();
                parentItem.classList.toggle('toggled');
            }
        });
    });

    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
        const isClickInside = siteNavigation.contains(event.target);
        
        if (!isClickInside && siteNavigation.classList.contains('toggled')) {
            siteNavigation.classList.remove('toggled');
            menuToggle.setAttribute('aria-expanded', 'false');
        }
    });

})();
