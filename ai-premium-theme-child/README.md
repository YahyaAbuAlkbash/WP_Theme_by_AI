# AI Premium Theme - Child Theme

## What is a Child Theme?

A child theme is a theme that inherits the functionality and styling of another theme (the parent theme). Child themes are the recommended way to modify an existing theme without losing your customizations when the parent theme is updated.

## Features

- **Safe Customization**: Modify the theme without touching the parent theme files
- **Update-Proof**: Your changes won't be lost when updating the parent theme
- **Easy to Use**: Simply add your custom code to the child theme files

## Installation

### Method 1: WordPress Admin
1. Go to Appearance > Themes > Add New
2. Click "Upload Theme"
3. Choose the `ai-premium-theme-child.zip` file
4. Click "Install Now"
5. Click "Activate"

### Method 2: FTP/SFTP
1. Upload the `ai-premium-theme-child` folder to `/wp-content/themes/`
2. Go to Appearance > Themes in WordPress admin
3. Find "AI Premium Theme Child" and click "Activate"

**Important**: The parent theme (AI Premium Theme) must be installed for the child theme to work.

## Customization

### Adding Custom CSS
Add your custom CSS to the `style.css` file in the child theme directory.

### Adding Custom PHP Functions
Add your custom functions to the `functions.php` file in the child theme directory.

### Overriding Template Files
To override a parent theme template file:
1. Copy the template file from the parent theme
2. Paste it into the child theme directory (maintaining the same folder structure)
3. Modify as needed

## Example Customizations

### Custom CSS
```css
/* Change primary color */
body {
    --color-primary: #ff6b6b;
}

/* Customize header */
.site-header {
    background-color: #000000;
}
```

### Custom Functions
```php
/* Add custom footer text */
function ai_premium_child_custom_footer() {
    echo '<p>My Custom Footer Text</p>';
}
add_action('wp_footer', 'ai_premium_child_custom_footer');
```

## Support

For support with the child theme or parent theme:
- Documentation: See parent theme documentation
- GitHub: https://github.com/YahyaAbuAlkbash/WP_Theme_by_AI

## License

GNU General Public License v2 or later
http://www.gnu.org/licenses/gpl-2.0.html
