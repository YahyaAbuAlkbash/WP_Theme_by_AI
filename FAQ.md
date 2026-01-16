# AI Premium Theme - Frequently Asked Questions (FAQ)

## Installation & Setup

### How do I install the theme?
1. Download the theme ZIP file
2. Go to WordPress Admin > Appearance > Themes > Add New
3. Click "Upload Theme" and select the ZIP file
4. Click "Install Now" and then "Activate"

### What are the minimum requirements?
- WordPress 6.0 or higher
- PHP 7.4 or higher
- MySQL 5.7 or higher
- Modern browser (Chrome, Firefox, Safari, Edge)

### Do I need to install any plugins?
No! The theme works perfectly without any plugins. However, for extended functionality:
- **WooCommerce** - For eCommerce features
- **Contact Form 7** - For contact forms
- **Yoast SEO or Rank Math** - For advanced SEO (optional, theme has built-in SEO)

---

## Customization

### How do I change colors?
1. Go to Appearance > Customize
2. Navigate to Colors section
3. Choose from the predefined color palette or add custom colors
4. Click "Publish" to save

### How do I add a logo?
1. Go to Appearance > Customize > Site Identity
2. Click "Select Logo" button
3. Upload or choose an existing image
4. Adjust the logo size if needed
5. Click "Publish"

### How do I create custom menus?
1. Go to Appearance > Menus
2. Create a new menu or edit existing one
3. Add pages, posts, or custom links
4. Assign menu to "Primary Menu" or "Footer Menu" location
5. Save the menu

### Can I use custom fonts?
Yes! You can:
1. Use system fonts (already included)
2. Upload custom fonts to `/assets/fonts/` directory
3. Use a plugin like "Easy Google Fonts"
4. Add custom CSS in Appearance > Customize > Additional CSS

### How do I add widgets?
1. Go to Appearance > Widgets
2. Choose from available widget areas:
   - Primary Sidebar
   - Footer 1, 2, 3
3. Drag and drop widgets to desired area
4. Configure widget settings
5. Save

---

## Block Editor & Patterns

### How do I use block patterns?
1. Edit a page or post
2. Click the "+" button to add a block
3. Click "Patterns" tab
4. Browse and select a pattern:
   - Hero Section
   - Call to Action
   - Features Grid
   - Testimonials
   - Pricing Table
   - Header/Footer patterns
5. Click to insert and customize

### Can I create my own patterns?
Yes! You can:
1. Create your own patterns in `/patterns/` directory
2. Use the block editor to design layouts
3. Save as reusable blocks
4. Export and share with others

### Is the theme compatible with page builders?
The theme is built with native WordPress block editor (Gutenberg). While it may work with page builders like Elementor or WPBakery, we recommend using the block editor for best performance and compatibility.

---

## WooCommerce

### Does the theme support WooCommerce?
Yes! Full WooCommerce support including:
- Product gallery with zoom, lightbox, and slider
- Custom styled shop and product pages
- Cart icon in header with live count
- Responsive product layouts
- Custom breadcrumbs

### How do I set up WooCommerce?
1. Install and activate WooCommerce plugin
2. Run the WooCommerce setup wizard
3. Theme automatically applies custom styling
4. Cart icon appears in header navigation

### Can I customize WooCommerce styles?
Yes! Edit these files:
- `/inc/woocommerce.php` - WooCommerce functions
- `/assets/css/woocommerce.css` - WooCommerce styles

---

## SEO & Performance

### Is the theme SEO-friendly?
Yes! The theme includes:
- Schema.org structured data
- Open Graph meta tags
- Twitter Card meta tags
- Automatic meta descriptions
- Breadcrumbs
- Clean semantic HTML5

### Do I need an SEO plugin?
Not necessarily. The theme has built-in SEO features. However, plugins like Yoast SEO or Rank Math can provide additional features like XML sitemaps and advanced optimization.

### How can I improve page speed?
The theme is already optimized, but you can:
1. Use a caching plugin (WP Super Cache, W3 Total Cache)
2. Optimize images before uploading
3. Use a CDN for static assets
4. Enable lazy loading (already built-in)
5. Minimize plugins

### Does the theme support lazy loading?
Yes! Images are automatically lazy-loaded using IntersectionObserver API for better performance.

---

## Accessibility

### Is the theme accessible?
Yes! The theme is WCAG 2.1 AA compliant with:
- Semantic HTML5 markup
- Proper heading hierarchy
- ARIA landmarks and labels
- Keyboard navigation support
- Skip to content link
- Screen reader compatibility

### How do I test accessibility?
1. Use keyboard only to navigate (Tab, Enter, Escape keys)
2. Test with screen reader (NVDA, JAWS, VoiceOver)
3. Check color contrast
4. Use accessibility testing tools (WAVE, axe)

---

## RTL & Translation

### Does the theme support RTL languages?
Yes! The theme includes full RTL (Right-to-Left) support for languages like Arabic, Hebrew, and Persian.

### How do I translate the theme?
1. Install a translation plugin (Loco Translate or WPML)
2. Or use POEdit with the included `.pot` file
3. Translate all strings
4. Save as `.mo` and `.po` files
5. Upload to `/wp-content/languages/themes/`

### What is the text domain?
The text domain is: `ai-premium-theme`

---

## Dark Mode

### Does the theme have dark mode?
Yes! Dark mode is automatically detected based on user's system preferences and can be toggled manually.

### How do I enable/disable dark mode?
Dark mode works automatically. To customize:
- Edit `/assets/css/dark-mode.css`
- Use media query: `@media (prefers-color-scheme: dark)`

---

## Troubleshooting

### The theme looks broken after installation
1. Clear browser cache
2. Clear WordPress cache (if using caching plugin)
3. Regenerate thumbnails
4. Check for plugin conflicts
5. Switch to default theme temporarily to isolate issue

### Menus are not displaying
1. Go to Appearance > Menus
2. Create a new menu
3. Assign to "Primary Menu" location
4. Save menu

### Widgets are not showing
1. Go to Appearance > Widgets
2. Add widgets to desired area
3. Make sure the widget area is active
4. Check if sidebar is enabled for current page

### Images are not loading
1. Check file permissions
2. Regenerate thumbnails
3. Clear cache
4. Check image URLs in browser inspector

### Site is slow
1. Disable plugins one by one to find culprit
2. Enable caching
3. Optimize images
4. Use a good hosting provider
5. Enable lazy loading (already enabled)

---

## Updates & Support

### How do I update the theme?
1. Download the latest version
2. Go to Appearance > Themes
3. Upload and install new version
4. Activate the updated theme

### Will updates break my customizations?
If you use a child theme, your customizations are safe. Otherwise:
- Use Additional CSS for style changes
- Create a child theme for major modifications
- Document all changes

### Where can I get support?
- Read the documentation in THEME_DOCUMENTATION.md
- Check this FAQ
- Review WordPress Theme Handbook
- Contact theme author via GitHub

### How do I report a bug?
1. Go to GitHub repository
2. Create a new issue
3. Describe the bug with details:
   - Steps to reproduce
   - Expected behavior
   - Actual behavior
   - Screenshots if applicable
   - WordPress version
   - PHP version

---

## License & Usage

### What license is the theme under?
GNU General Public License v2 or later. You can use it for personal or commercial projects.

### Can I use this theme for client projects?
Yes! The GPL license allows commercial use.

### Can I modify the theme?
Yes! You can modify anything. We recommend using a child theme for major changes.

### Can I redistribute the theme?
Yes, as long as you follow GPL license terms.

---

## Child Themes

### How do I create a child theme?
1. Create folder: `ai-premium-theme-child`
2. Create `style.css`:
```css
/*
Theme Name: AI Premium Theme Child
Template: ai-premium-theme
*/
```
3. Create `functions.php`:
```php
<?php
function ai_premium_child_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}
add_action('wp_enqueue_scripts', 'ai_premium_child_enqueue_styles');
```
4. Activate child theme

### Why use a child theme?
- Preserves customizations during updates
- Keeps parent theme intact
- Easier to maintain
- Best practice for modifications

---

## Advanced

### Can I use custom post types?
Yes, but create them in a plugin, not the theme. This follows WordPress best practices.

### Does the theme support multisite?
Yes! The theme works with WordPress multisite installations.

### Can I white-label the theme?
Yes, you can modify branding for client projects under GPL license terms.

### Where are theme files located?
Main theme files are in `/wp-content/themes/ai-premium-theme/`

---

## Still Have Questions?

If your question isn't answered here:
1. Check THEME_DOCUMENTATION.md for technical details
2. Review WordPress Theme Handbook
3. Contact via GitHub repository
4. Check WordPress.org forums

---

**Last Updated**: January 16, 2026  
**Theme Version**: 1.0.2
