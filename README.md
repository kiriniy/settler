<p align="center">
  <a href="https://kiriniy.github.io/settler/">
    <picture>
      <source media="(prefers-color-scheme: dark)" srcset="https://kiriniy.github.io/settler/assets/img/settler-repo-logo_darkmode.png">
      <source media="(prefers-color-scheme: light)" srcset="https://kiriniy.github.io/settler/assets/img/settler-repo-logo.png">
      <img src="https://kiriniy.github.io/settler/assets/img/settler-repo-logo.png" alt="Settler Logotype" width="200" height="200">
    </picture>
  </a>
</p>

# Settler v2 (beta)

A blank PHP-based project template for not-quite-developers — when your future website is too complex for static HTML, but not complicated enough for a CMS and database.

If you're looking for **Lite** version: [https://github.com/kiriniy/settler-lite](https://github.com/kiriniy/settler-lite)

## Requirements
 - Local (MAMP, WAMP, XAMPP etc) or remote HTTP server with PHP.
### Optional
 - Code or Text editor.
 - JS bundler for js-source files.
 - SASS compiler for css-source files.
 - Graphic editor for icons, thumbnails etc.

## Getting started
 - Download [latest release](https://github.com/kiriniy/settler/releases/latest) and unzip it on your local or remote server.
 - Open 'site.php' at root and edit the default variables.
 - Done! You're ready to write some code...

## Under the hood

Are optional set of stylesheets, font files, and scripts.

  - [Bootstrap](https://getbootstrap.com) 5.x — is a popular mobile first CSS/JS framework.
  - [Bootstrap Icons](https://icons.getbootstrap.com) 1.x — free, high quality, open source icon library.
  - [Animate.css (without class prefix)](https://animate.style) 4.x — is a library of ready-to-use, cross-browser animations.

**Template structure:**

  ```text
dist/
├─ assets/
│  ├─ css/           — stylesheets and source files
│  ├─ errors/        — errors response layouts 
│  ├─ fonts/         — icon libraries files 
│  ├─ img/           — images and icons
│  ├─ inc/           — php includes
│  └─ js/            — javascript files
├─ extras/
│  ├─ blank.html     — blank html-template
│  ├─ blank.php      — blank php-template
│  ├─ bs-grid.php    — bootstrap grid cheatsheet
│  ├─ bs-theming.php – bootstrap components preview
│  └─ info.php       – php's information
│
├─ favicon.ico       - legacy browsers icon
├─ htaccess.txt      - inactive example config for apache
├─ humans.txt        - example file of site info
├─ index.php         - main site page
├─ make.php          - static site generator
├─ robots.txt        - example config file for crawlers
├─ site.php          - main config file for site
├─ site.webmanifest  - example config for pwa
└─ sitemap.xml       - example sitemap 
  ```

## License

Released by [Kirill Nikitin](https://github.com/Kiriniy) under [MIT](https://github.com/kiriniy/settler/blob/master/LICENSE), 2020-2025