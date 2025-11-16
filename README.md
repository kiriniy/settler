<p align="center">
  <a href="https://kiriniy.github.io/settler/">
    <picture>
      <source media="(prefers-color-scheme: dark)" srcset="https://kiriniy.github.io/settler/assets/img/settler-repo-logo_darkmode.png">
      <source media="(prefers-color-scheme: light)" srcset="https://kiriniy.github.io/settler/assets/img/settler-repo-logo.png">
      <img src="https://kiriniy.github.io/settler/assets/img/settler-repo-logo.png" alt="Settler Logotype" width="200" height="200">
    </picture>
  </a>
</p>

# Settler

A blank PHP-based project template for not-quite-developers — when your future website is too complex for static HTML, but not complicated enough for a CMS and database.

If you're looking for **Lite** version: [https://github.com/kiriniy/settler-lite](https://github.com/kiriniy/settler-lite)

## Philosophy
At some point, we were overwhelmed by frameworks, building tools, and dependency trees. However, most websites don't need React, Node.js, Docker, Webpack, or dozens of dependencies in json-configs to get the job done. Web development has become overly complicated due to the assumption that everyone needs the same tools as large corporations, even for a simple five-page website.

### For whom?
 - **Novice devs** who wants to learn PHP without getting lost in Laravel.
 - **Old-school devs** who still use `include()` as a design pattern.
 - **Small businesses** that just need a simple website, not a tech stack.
 - **Freelancers** who are looking for a way to quickly build client websites.
 - **Anyone** who wants to control every page and every line on it.

## Requirements
 - Local (MAMP, WAMP, XAMPP etc) or remote HTTP server with PHP.

### Optional
 - Code or Text editor.
 - JS bundler for js-source files.
 - SASS compiler for css-source files.
 - Graphic editor for icons, thumbnails etc.

### Minimal knowledge

<table>
  <thead>
    <tr>
      <th><p>Technology</p></th>
      <th><p>Level</p></th>
      <th><p>Comment</p></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><strong>HTML</strong></td>
      <td align="center"><code>10 / 1</code>0</td>
      <td>Well enough to edit a page, tags, and structure content.</td>
    </tr>
    <tr>
      <td><strong>PHP</strong></td>
      <td align="center"><code>2 / 10</code></td>
      <td>To know what a variable is and how <code>include()</code> works.</td>
    </tr>
    <tr>
      <td><strong>CSS</strong></td>
      <td align="center"><code>2 / 10</code></td>
      <td>To know how class names work — Bootstrap does the rest.</td>
    </tr>
    <tr>
      <td><strong>JS</strong></td>
      <td align="center"><code>1 / 10</code></td>
      <td>The included scripts are self-contained.</td>
    </tr>
  </tbody>
</table>

## Getting started
 - Download [latest release](https://github.com/kiriniy/settler/releases/latest) and unzip it on your local or remote server.
 - Open 'site.php' at root and edit the default variables.
 - Done! You're ready to write some code...

## Under the hood

 - All files of the standard website with examples.
 - Meta tags and markup for the `head` section.
 - Default icons and sharing images include their size or format to see where each is used.
 - Print/NO-print/NO-scripts styles for various website use cases.
 - JS detectors templates for various website use cases.
 - CSP (Content Security Policy) ready via `<meta>` tag.  
 - PWA (Progressive Web App) ready via `site.webmanifest` file.
 - Dark/light mode toggle build-in with auto-detects and remembers of choice.
 - Cookie-based alerts build-in. All controlled via HTML attributes.
 - The `addTime()` cache-busting function for static files.
 - Static site generation. Deploy your php website to a non-php hosting.

**Are optional set of stylesheets, font files, and scripts:**

 - [Bootstrap](https://getbootstrap.com) 5.x — is a popular mobile first CSS/JS framework.
 - [Bootstrap Icons](https://icons.getbootstrap.com) 1.x — is a free, high quality, open source icon library.
 - [Animate.css](https://animate.style) 4.x — is a library of ready-to-use, cross-browser animations.

**Template structure:**

  ```text
settler/
├─ assets/
│  ├─ css/             — stylesheets and source files
│  ├─ errors/          — server errors pages
│  ├─ fonts/           — icon library files
│  ├─ img/             — images and icons
│  ├─ inc/             — php include files
│  └─ js/              — scripts and source files
├─ extras/
│  ├─ blank.html       — blank html-template
│  ├─ blank.php        — blank php-template
│  ├─ bs-grid.php      — bootstrap grid cheatsheet
│  ├─ bs-theming.php   – bootstrap components preview
│  └─ info.php         – php's information
│
├─ favicon.ico         - legacy browsers icon
├─ htaccess.txt        - inactive apache example config
├─ humans.txt          - site credits, team and information
├─ index.php           - main entry point for the website
├─ make.php            - static site generation script
├─ robots.txt          - directives for web crawlers
├─ site.php            - main website config
├─ site.webmanifest    - pwa metadata
└─ sitemap.xml         - website indexing map
  ```

## License

Released by [Kirill Nikitin](https://github.com/Kiriniy) under [MIT](https://github.com/kiriniy/settler/blob/master/LICENSE), 2020-2025