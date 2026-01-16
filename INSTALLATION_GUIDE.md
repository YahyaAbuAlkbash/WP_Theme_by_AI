# AI Premium Theme - Installation Guide

## Table of Contents
1. [System Requirements](#system-requirements)
2. [Pre-Installation Checklist](#pre-installation-checklist)
3. [Installation Methods](#installation-methods)
4. [Post-Installation Setup](#post-installation-setup)
5. [Recommended Plugins](#recommended-plugins)
6. [Initial Configuration](#initial-configuration)
7. [Troubleshooting](#troubleshooting)

---

## System Requirements

### Minimum Requirements
- **WordPress**: 6.0 or higher
- **PHP**: 7.4 or higher
- **MySQL**: 5.7 or MariaDB 10.2 or higher
- **HTTPS**: Recommended for security

### Recommended Server Configuration
- **PHP**: 8.0 or higher
- **Memory Limit**: 256MB or higher
- **Max Upload Size**: 64MB or higher
- **Max Execution Time**: 300 seconds
- **SSL Certificate**: For HTTPS

### Browser Support
- Chrome (last 2 versions)
- Firefox (last 2 versions)
- Safari (last 2 versions)
- Edge (last 2 versions)
- Opera (last 2 versions)

---

## Pre-Installation Checklist

Before installing the theme, ensure:

1. ✅ **Backup Your Site**
   - Backup database
   - Backup files
   - Export content if needed

2. ✅ **Check WordPress Version**
   - Update to WordPress 6.0+
   - Update all plugins
   - Clear cache

3. ✅ **Check PHP Version**
   - Verify PHP 7.4+ in hosting control panel
   - Update if necessary

4. ✅ **Prepare Content**
   - Have logo ready (400x100px recommended)
   - Prepare images (1200x675px for featured images)
   - Write initial content

---

## Installation Methods

### Method 1: WordPress Admin (Recommended)

**Step 1: Download Theme**
- Download `ai-premium-theme.zip` from the repository

**Step 2: Upload via WordPress**
1. Log in to WordPress Admin
2. Navigate to **Appearance > Themes**
3. Click **Add New** button
4. Click **Upload Theme**
5. Click **Choose File** and select the ZIP file
6. Click **Install Now**
7. Wait for upload and installation
8. Click **Activate** once installed

**Installation Time**: 2-5 minutes

---

### Method 2: FTP/SFTP Upload

**Step 1: Extract Theme**
1. Download theme ZIP file
2. Extract to your computer
3. Locate `ai-premium-theme` folder

**Step 2: Upload via FTP**
1. Connect to your server via FTP client (FileZilla, Cyberduck, etc.)
2. Navigate to `/wp-content/themes/`
3. Upload the entire `ai-premium-theme` folder
4. Wait for upload to complete

**Step 3: Activate Theme**
1. Log in to WordPress Admin
2. Go to **Appearance > Themes**
3. Find "AI Premium Theme"
4. Click **Activate**

**Installation Time**: 5-10 minutes

---

### Method 3: WordPress CLI (For Developers)

```bash
# Navigate to WordPress directory
cd /path/to/wordpress

# Install theme from local ZIP
wp theme install /path/to/ai-premium-theme.zip

# Or from extracted folder
wp theme install /path/to/ai-premium-theme

# Activate theme
wp theme activate ai-premium-theme

# Verify installation
wp theme list
```

**Installation Time**: 1-2 minutes

---

## Post-Installation Setup

### Step 1: Site Identity (5 minutes)

1. Go to **Appearance > Customize > Site Identity**
2. Upload **Logo**
   - Recommended size: 400x100px
   - Format: PNG with transparency or SVG
3. Set **Site Title** and **Tagline**
4. Upload **Site Icon** (favicon)
   - Size: 512x512px
   - Format: PNG
5. Click **Publish**

---

### Step 2: Create Menus (10 minutes)

1. Go to **Appearance > Menus**
2. Create **Primary Menu**:
   - Click "Create a new menu"
   - Name it "Primary Menu"
   - Add pages: Home, About, Services, Blog, Contact
   - Check "Primary Menu" location
   - Save menu
3. Create **Footer Menu** (optional):
   - Create another menu
   - Add links: Privacy Policy, Terms, Sitemap
   - Check "Footer Menu" location
   - Save menu

---

### Step 3: Configure Widgets (10 minutes)

1. Go to **Appearance > Widgets**
2. **Primary Sidebar**:
   - Add: Search widget
   - Add: Recent Posts
   - Add: Categories
   - Add: Tag Cloud
3. **Footer Widget Areas**:
   - Footer 1: About text widget
   - Footer 2: Recent posts or custom menu
   - Footer 3: Contact info or social links

---

### Step 4: Set Homepage (5 minutes)

1. Go to **Settings > Reading**
2. Choose homepage display:
   - **Latest Posts**: Blog-style homepage
   - **Static Page**: Choose a page as homepage
3. Select posts page if using static homepage
4. Set blog pages to show (10 recommended)
5. Save changes

---

### Step 5: Permalink Settings (2 minutes)

1. Go to **Settings > Permalinks**
2. Choose structure:
   - **Post name** (Recommended): `/%postname%/`
   - Or custom structure
3. Click **Save Changes**

---

## Recommended Plugins

### Essential Plugins

**For Contact Forms:**
- Contact Form 7 (Free)
- WPForms Lite (Free)
- Gravity Forms (Premium)

**For SEO:**
- Yoast SEO (Free) - Optional, theme has built-in SEO
- Rank Math (Free) - Optional
- All in One SEO (Free) - Optional

**For Performance:**
- WP Super Cache (Free)
- W3 Total Cache (Free)
- WP Rocket (Premium)

**For Security:**
- Wordfence Security (Free)
- Sucuri Security (Free)
- iThemes Security (Free)

**For Backup:**
- UpdraftPlus (Free)
- BackupBuddy (Premium)
- VaultPress (Premium)

**For eCommerce:**
- WooCommerce (Free) - Theme has built-in support

---

## Initial Configuration

### Customize Colors (5 minutes)

1. Go to **Appearance > Customize > Colors**
2. Adjust theme colors:
   - Primary: #2563eb (Blue)
   - Secondary: #7c3aed (Purple)
   - Accent: #f59e0b (Amber)
   - Dark: #1e293b
   - Light: #f8fafc
3. Click **Publish**

---

### Typography Settings (5 minutes)

Theme uses system fonts by default for performance. To customize:

1. Go to **Appearance > Customize > Typography** (if available)
2. Or add custom CSS in **Additional CSS**:

```css
body {
    font-family: 'Your Font', sans-serif;
}

h1, h2, h3, h4, h5, h6 {
    font-family: 'Your Heading Font', sans-serif;
}
```

---

### Add Content (Variable time)

1. **Create Essential Pages**:
   - Homepage
   - About
   - Services/Products
   - Blog
   - Contact

2. **Write First Blog Post**:
   - Add featured image (1200x675px)
   - Write compelling content
   - Add categories and tags
   - Publish

3. **Use Block Patterns**:
   - Edit page
   - Click "+" to add block
   - Choose from patterns:
     - Hero Section
     - Features Grid
     - Testimonials
     - Pricing Table
     - CTA Section

---

## WooCommerce Setup (If Using eCommerce)

### Install WooCommerce (15 minutes)

1. Go to **Plugins > Add New**
2. Search "WooCommerce"
3. Install and activate
4. Run WooCommerce setup wizard:
   - Store details
   - Industry
   - Product types
   - Business details
   - Theme (select "Continue with my active theme")
   - Enhanced features
5. Add products
6. Configure payment methods
7. Set up shipping
8. Theme automatically applies custom styling

---

## Troubleshooting

### Theme Not Appearing in Admin

**Solution:**
1. Check folder structure: `/wp-content/themes/ai-premium-theme/`
2. Ensure `style.css` has proper header
3. Check file permissions (755 for folders, 644 for files)

### Upload Failed

**Problem**: File size too large

**Solution:**
1. Increase PHP upload limit in `php.ini`:
   ```
   upload_max_filesize = 64M
   post_max_size = 64M
   ```
2. Or contact hosting support

### White Screen After Activation

**Solution:**
1. Check error logs
2. Increase PHP memory limit in `wp-config.php`:
   ```php
   define('WP_MEMORY_LIMIT', '256M');
   ```
3. Deactivate plugins via FTP
4. Switch to default theme via database

### Styles Not Loading

**Solution:**
1. Clear browser cache (Ctrl+Shift+Delete)
2. Clear WordPress cache
3. Regenerate permalinks: **Settings > Permalinks > Save**
4. Check file permissions

### Images Not Displaying

**Solution:**
1. Regenerate thumbnails (use plugin)
2. Check image file paths
3. Verify file permissions
4. Clear cache

---

## Verification Checklist

After installation, verify:

- ✅ Theme activated successfully
- ✅ Logo displays correctly
- ✅ Navigation menus working
- ✅ Widgets showing in sidebars
- ✅ Homepage displays properly
- ✅ Blog page loads
- ✅ Mobile responsive
- ✅ Search functionality works
- ✅ Comments enabled (if desired)
- ✅ Forms submitting (if installed)
- ✅ SSL certificate active (if applicable)

---

## Next Steps

After successful installation:

1. **Content Creation**:
   - Add pages
   - Write blog posts
   - Upload media

2. **SEO Setup**:
   - Install SEO plugin (optional)
   - Submit sitemap to Google
   - Set up Google Analytics
   - Configure meta descriptions

3. **Performance Optimization**:
   - Install caching plugin
   - Optimize images
   - Enable GZIP compression
   - Set up CDN (optional)

4. **Security**:
   - Install security plugin
   - Configure backups
   - Enable SSL
   - Update regularly

5. **Marketing**:
   - Set up email marketing
   - Configure social media
   - Add sharing buttons
   - Create lead magnets

---

## Getting Help

If you encounter issues:

1. **Check Documentation**:
   - THEME_DOCUMENTATION.md
   - FAQ.md
   - This installation guide

2. **WordPress Resources**:
   - WordPress Codex
   - WordPress Support Forums
   - Theme Handbook

3. **Theme Support**:
   - GitHub repository
   - Create an issue with details

4. **Hosting Support**:
   - Contact for server issues
   - PHP version updates
   - File permission problems

---

## Congratulations! 🎉

Your AI Premium Theme is now installed and ready to use. Start creating amazing content and building your website!

---

**Installation Guide Version**: 1.0.2  
**Last Updated**: January 16, 2026  
**Estimated Total Time**: 1-2 hours for complete setup
