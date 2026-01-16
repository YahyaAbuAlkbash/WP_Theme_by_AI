/**
 * Accessibility enhancements for AI Premium Theme
 */

(function() {
    'use strict';

    // Focus visible polyfill for better keyboard navigation
    function handleKeyboardFocus() {
        let hadKeyboardEvent = true;
        const keyboardModalityWhitelist = [
            'input:not([type])',
            'input[type="text"]',
            'input[type="email"]',
            'input[type="url"]',
            'input[type="password"]',
            'input[type="search"]',
            'input[type="number"]',
            'input[type="tel"]',
            'textarea',
            '[role="textbox"]'
        ].join(',');

        function updateFocusVisible() {
            if (hadKeyboardEvent) {
                document.body.classList.add('keyboard-navigation');
            } else {
                document.body.classList.remove('keyboard-navigation');
            }
        }

        document.addEventListener('keydown', function(e) {
            hadKeyboardEvent = true;
            updateFocusVisible();
        });

        document.addEventListener('mousedown', function(e) {
            hadKeyboardEvent = false;
            updateFocusVisible();
        });

        document.addEventListener('focus', function(e) {
            if (hadKeyboardEvent || e.target.matches(keyboardModalityWhitelist)) {
                document.body.classList.add('keyboard-navigation');
            }
        }, true);
    }

    // Skip to content link functionality
    function initSkipLink() {
        const skipLink = document.querySelector('.skip-link');
        
        if (skipLink) {
            skipLink.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                
                if (target) {
                    target.setAttribute('tabindex', '-1');
                    target.focus();
                    target.scrollIntoView({ behavior: 'smooth' });
                }
            });
        }
    }

    // Add ARIA labels to social media links
    function enhanceSocialLinks() {
        const socialLinks = document.querySelectorAll('a[href*="facebook.com"], a[href*="twitter.com"], a[href*="instagram.com"], a[href*="linkedin.com"]');
        
        socialLinks.forEach(function(link) {
            if (!link.getAttribute('aria-label')) {
                const url = link.getAttribute('href');
                let label = '';
                
                if (url.includes('facebook.com')) {
                    label = 'Visit our Facebook page';
                } else if (url.includes('twitter.com')) {
                    label = 'Visit our Twitter page';
                } else if (url.includes('instagram.com')) {
                    label = 'Visit our Instagram page';
                } else if (url.includes('linkedin.com')) {
                    label = 'Visit our LinkedIn page';
                }
                
                if (label) {
                    link.setAttribute('aria-label', label);
                }
            }
        });
    }

    // Ensure all images have alt text
    function checkImageAltText() {
        const images = document.querySelectorAll('img');
        
        images.forEach(function(img) {
            if (!img.getAttribute('alt')) {
                console.warn('Image missing alt text:', img.src);
                img.setAttribute('alt', '');
            }
        });
    }

    // Add role="navigation" to nav elements without it
    function enhanceNavigationRoles() {
        const navElements = document.querySelectorAll('nav:not([role])');
        
        navElements.forEach(function(nav) {
            nav.setAttribute('role', 'navigation');
        });
    }

    // Initialize all accessibility enhancements
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', function() {
            handleKeyboardFocus();
            initSkipLink();
            enhanceSocialLinks();
            checkImageAltText();
            enhanceNavigationRoles();
        });
    } else {
        handleKeyboardFocus();
        initSkipLink();
        enhanceSocialLinks();
        checkImageAltText();
        enhanceNavigationRoles();
    }

})();
