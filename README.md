<p align="center">
  <a href="https://kiriniy.github.io/settler/">
    <picture>
      <source media="(prefers-color-scheme: dark)" srcset="https://kiriniy.github.io/settler/assets/img/settler-repo-logo_darkmode.png">
      <source media="(prefers-color-scheme: light)" srcset="https://kiriniy.github.io/settler/assets/img/settler-repo-logo.png">
      <img src="https://kiriniy.github.io/settler/assets/img/settler-repo-logo.png" alt="Settler Logotype" width="200" height="200">
    </picture>
  </a>
</p>

<p align="center">
  <a href="LICENSE"><img src="https://img.shields.io/badge/License-MIT-success" alt="MIT License"></a>
  <a href="https://www.php.net/"><img src="https://img.shields.io/badge/PHP-7.0%2B-777BB4?logo=php" alt="PHP 7.0+"></a>
  <img src="https://img.shields.io/badge/No--Packages-555" alt="No Package Manager">
  <img src="https://img.shields.io/badge/Production--Ready-555" alt="Production Ready">
  <img src="https://img.shields.io/badge/Static--Site--Generation-555" alt="Static Site Generation">
</p>

# Settler

A blank PHP-based project template for not-quite-developers — when your future website is too complex for static HTML, but not complicated enough for a CMS and database.

Prefer a completely empty template? Try the minimal **[Settler Lite](https://github.com/kiriniy/settler-lite)** version (~100 KB, no extras).  

## Philosophy

At some point, we became overwhelmed by frameworks, building tools, and dependency trees. However, most websites don't need React, Node.js, Docker, Webpack, or dozens of dependencies in json-configs to get the job done. Web development has become overly complicated due to the assumption that everyone needs the same tools as large corporations, even for a five-page website or landing page.

### Why PHP?

Settler uses PHP not because it’s the superior language, but due to its wide availability. PHP is compatible with nearly every budget hosting plan globally, allowing anyone to set up a proper website. Just upload and go.

### WordPress then?

WordPress, Joomla, and other content management systems (CMS) are powerful tools, but they can be overkill for many projects. A CMS really shines when you need multiple people to update content regularly or when users must interact with the site, for example, by creating accounts or leaving comments. However, CMS platforms come with added complexity. They rely on databases, plugins, and frequent core updates, all of which demand ongoing maintenance, security monitoring, and performance tuning. If your site does not require user interaction and only one person handles content updates, Settler may be a simpler, faster, and more secure fit.

### What about website builders?

Tools like Webflow, Wix, or Squarespace let you build sites fast without coding. But they lock your content and design into proprietary platforms. Moving elsewhere means rebuilding from scratch. You’re stuck with what they offer and what they charge. Settler gives you plain files you own, full control over design, and the freedom to host anywhere, even on free services like GitHub Pages.

### For whom?

 - **Novice devs** who need a dead-simple way to deploy to php-less hosting as pure HTML.
 - **Old-school devs** who still use `include()` as a design pattern and are fine with it.
 - **Not-quite devs** that just need a simple website, not a tech stack.
 - **Small businesses** that use shared hosting services with Apache and PHP.
 - **Freelancers** who are looking for a way to deliver a working site in hours, not days.
 - **Anyone** who wants to control every page and every line on it.

## Browser Support

Settler works in all modern browsers: Chrome, Firefox, Safari, Edge.

## Requirements

 - A local or remote web server with **PHP 7.0+** (e.g. MAMP, WAMP, XAMPP, or any shared hosting).
 - A code or text editor (to edit HTML/PHP files — VS Code, Sublime, Nova, etc.).

### Optional

 - JS bundler for js-source files.
 - SASS compiler for css-source files.
 - Graphic editor for icons, thumbnails etc.
 - FTP client for easy uploading to hosting.

Settler ships with precompiled, unminified `main.css` and `main.js` files. Free image editors are available online, and most hosting control panels have a built-in file manager through which you can upload your files. Some IDEs also have compilers and FTP-clients built-in or as downloadable extensions.

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
      <td align="center"><code>8&nbsp;/&nbsp;10</code></td>
      <td>Well enough to edit a page, tags, and structure content.</td>
    </tr>
    <tr>
      <td><strong>PHP</strong></td>
      <td align="center"><code>2&nbsp;/&nbsp;10</code></td>
      <td>To know what a variable is and how <code>include()</code> works.</td>
    </tr>
    <tr>
      <td><strong>CSS</strong></td>
      <td align="center"><code>2&nbsp;/&nbsp;10</code></td>
      <td>To know how class names work — Bootstrap does the rest.</td>
    </tr>
    <tr>
      <td><strong>JS</strong></td>
      <td align="center"><code>1&nbsp;/&nbsp;10</code></td>
      <td>The included scripts are self-contained.</td>
    </tr>
  </tbody>
</table>

## Getting started

 - Download [latest release](https://github.com/kiriniy/settler/releases/latest) and unzip it on your local or remote server.
 - Open 'site.php' at root and edit the default variables.
 - Done! You're ready to write some code...

## Features

 - All files of the standard website with examples.
 - Meta tags and markup for the `head` section.
 - Auto-generated SEO, sharing metadata, and canonical URL based on page variables.
 - Default icons and sharing images include their size or format to see where each is used.
 - Print/NO-print/NO-scripts styles for various website use cases.
 - JS detectors templates for various website use cases.
 - CSP (Content Security Policy) ready via `<meta>` tag.  
 - PWA (Progressive Web App) ready via `site.webmanifest` file.
 - Built-in dark/light mode toggle with auto-detection and user preference memory.
 - Built-in cookie-based alerts, all controlled via HTML attributes.
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
│  ├─ css/             - stylesheets and source files
│  ├─ errors/          - server errors pages
│  ├─ fonts/           - icon library files
│  ├─ img/             - images and icons
│  ├─ inc/             - php include files
│  └─ js/              - scripts and source files
├─ extras/
│  ├─ blank.html       - blank html-template
│  ├─ blank.php        - blank php-template
│  ├─ bs-grid.php      - bootstrap grid cheatsheet
│  ├─ bs-theming.php   - bootstrap components preview
│  └─ info.php         - php's information
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

## Versioning

Settler follows [Semantic Versioning](https://semver.org/).

## Updating

The Settler does not require updating on existing projects, but you can update individual elements at will. New versions are recommended for use in new projects.

## Changelog

See [Releases](https://github.com/kiriniy/settler/releases) for the changelog.

## Acknowledgements

**Philosophy**

 - [Resilient Web Design](https://resilientwebdesign.com) by Jeremy Keith. Free web book.
 - [The Great Divide](https://css-tricks.com/the-great-divide/) by Chris Coyier on CSS-Tricks.
 - [Web Development Is Getting Too Complex](https://www.smashingmagazine.com/2024/02/web-development-getting-too-complex/) by Juan Diego Rodríguez on Smashing Magazine.

**Also Philosophy**

 - [This is a motherf*g website](https://motherfuckingwebsite.com/)
 - [This is still a motherf*g website](http://bettermotherfuckingwebsite.com/)
 - [This is the final motherf*g website](https://perfectmotherfuckingwebsite.com/)

**Misc**

 - [Site Icons by Evil Martians](https://evilmartians.com/chronicles/how-to-favicon-in-2021-six-files-that-fit-most-needs)
 - [Open Graph: Twitter Card](https://developer.twitter.com/en/docs/twitter-for-websites/cards/overview/summary)
 - [Open Graph: Facebook Card](https://developers.facebook.com/docs/sharing/webmasters)

## Contributing

Contributions are welcome, especially for improving documentation, fixing typos or broken links, translations. Please open an Issue first to discuss your idea, so we can keep Settler focused on simplicity without dependencies or complex features (e.g. form handlers, routers, CMS-like logic).

## Security

Settler is a template with no database, user input, or authentication. The main security feature is optional CSP via `<meta>` tag. If you discover a vulnerability in the provided code, please submit a report through GitHub Issues.

## License

Released by [Kirill Nikitin](https://github.com/Kiriniy) under [MIT License](https://github.com/kiriniy/settler/blob/master/LICENSE), 2020—2025