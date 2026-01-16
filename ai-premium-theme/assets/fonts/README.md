# Fonts Directory

This directory is for custom web fonts used by the theme.

## Current Font Stack

The theme uses system fonts by default for optimal performance:

**Body Font:**
```css
-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, 
Cantarell, "Helvetica Neue", sans-serif
```

**Heading Font (Optional):**
- Poppins (loaded from Google Fonts or local if added here)

**Monospace Font (Optional):**
- JetBrains Mono (loaded from Google Fonts or local if added here)

## Adding Custom Fonts

To add custom fonts:

1. **Add font files** (WOFF2 recommended for best performance)
   ```
   fonts/
   ├── poppins/
   │   ├── poppins-regular.woff2
   │   ├── poppins-bold.woff2
   │   └── poppins.css
   └── jetbrains-mono/
       ├── jetbrains-mono-regular.woff2
       └── jetbrains-mono.css
   ```

2. **Enqueue in functions.php**
   ```php
   wp_enqueue_style( 'custom-fonts', get_template_directory_uri() . '/assets/fonts/fonts.css' );
   ```

3. **Update theme.json** with font references

## Performance Note

System fonts are used by default to:
- Reduce HTTP requests
- Improve page load speed
- Respect user's OS preferences
- Reduce bandwidth usage

Only add custom fonts if they are essential to your design.

## Current Status

This directory is empty by default. The theme uses system fonts for optimal performance.
