
<?php $page_id         = '';
      $page_ver        = '';
      $page_path       = '';
      $page_type       = '';
      $page_class      = '';

      $page_notices    = false;

      $page_title      = 'Bootstrap Theme Preview';
      $page_desc       = '';

      require '../assets/inc/pages_config.php';

      $page_prefetch   = '';
      $page_csp        = '';
      $page_cache      = '';
      $page_robots     = '';
      $page_autoformat = '';
      $page_canonical  = '';
      $page_head_attr  = '';
      $page_body_attr  = '';

      ?>

<!DOCTYPE HTML>

<html <?php echo $page_html_attr; ?>>
  <head <?php echo $page_head_attr; ?>>
    <base <?php echo $page_base_attr; ?>>

    <?php include $inc_path . 'pages_head-meta.php';
          include $inc_path . 'pages_head-resources.php';
          include $inc_path . 'pages_head-noscript.php';

          ?>

  </head>

  <body <?php echo $page_body_attr; ?>>

    <?php include $inc_path . 'pages_body-menu.php'; ?>
    
    <div class="container py-5 mt-5">
      <div class="bs-docs-section clearfix">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="navbars">Navbars</h1>
            </div>
            <div class="bs-component">
              <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a> <button aria-controls="navbarColor01"
                  aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                  data-bs-target="#navbarColor01" data-bs-toggle="collapse" type="button"><span class=
                  "navbar-toggler-icon"></span></button>
                  <div class="collapse navbar-collapse" id="navbarColor01">
                    <ul class="navbar-nav me-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Home <span class=
                        "visually-hidden">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown" href="#" role="button">Dropdown</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href=
                          "#">Another action</a> <a class="dropdown-item" href="#">Something else
                          here</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item" href=
                          "#">Separated link</a>
                        </div>
                      </li>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-sm-2" placeholder="Search" type="search">
                      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
            </div>
            <div class="bs-component">
              <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a> <button aria-controls="navbarColor02"
                  aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                  data-bs-target="#navbarColor02" data-bs-toggle="collapse" type="button"><span class=
                  "navbar-toggler-icon"></span></button>
                  <div class="collapse navbar-collapse" id="navbarColor02">
                    <ul class="navbar-nav me-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Home <span class=
                        "visually-hidden">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown" href="#" role="button">Dropdown</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href=
                          "#">Another action</a> <a class="dropdown-item" href="#">Something else
                          here</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item" href=
                          "#">Separated link</a>
                        </div>
                      </li>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-sm-2" placeholder="Search" type="search">
                      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
            </div>
            <div class="bs-component">
              <nav class="navbar navbar-expand-lg bg-light" data-bs-theme="light">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a> <button aria-controls="navbarColor03"
                  aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                  data-bs-target="#navbarColor03" data-bs-toggle="collapse" type="button"><span class=
                  "navbar-toggler-icon"></span></button>
                  <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav me-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Home <span class=
                        "visually-hidden">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown" href="#" role="button">Dropdown</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href=
                          "#">Another action</a> <a class="dropdown-item" href="#">Something else
                          here</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item" href=
                          "#">Separated link</a>
                        </div>
                      </li>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-sm-2" placeholder="Search" type="search">
                      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
            </div>
            <div class="bs-component">
              <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">Navbar</a> <button aria-controls="navbarColor04"
                  aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                  data-bs-target="#navbarColor04" data-bs-toggle="collapse" type="button"><span class=
                  "navbar-toggler-icon"></span></button>
                  <div class="collapse navbar-collapse" id="navbarColor04">
                    <ul class="navbar-nav me-auto">
                      <li class="nav-item">
                        <a class="nav-link active" href="#">Home <span class=
                        "visually-hidden">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown" href="#" role="button">Dropdown</a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href=
                          "#">Another action</a> <a class="dropdown-item" href="#">Something else
                          here</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item" href=
                          "#">Separated link</a>
                        </div>
                      </li>
                    </ul>
                    <form class="d-flex">
                      <input class="form-control me-sm-2" placeholder="Search" type="search">
                      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
      <div class="bs-docs-section">
        <div class="page-header">
          <div class="row">
            <div class="col-lg-12">
              <h1 id="buttons">Buttons</h1>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7">
            <p class="bs-component"><button class="btn btn-primary" type="button">Primary</button>
            <button class="btn btn-secondary" type="button">Secondary</button> <button class=
            "btn btn-success" type="button">Success</button> <button class="btn btn-info" type=
            "button">Info</button> <button class="btn btn-warning" type="button">Warning</button>
            <button class="btn btn-danger" type="button">Danger</button> <button class="btn btn-light"
            type="button">Light</button> <button class="btn btn-dark" type="button">Dark</button>
            <button class="btn btn-link" type="button">Link</button></p>
            <p class="bs-component"><button class="btn btn-primary disabled" type=
            "button">Primary</button> <button class="btn btn-secondary disabled" type=
            "button">Secondary</button> <button class="btn btn-success disabled" type=
            "button">Success</button> <button class="btn btn-info disabled" type="button">Info</button>
            <button class="btn btn-warning disabled" type="button">Warning</button> <button class=
            "btn btn-danger disabled" type="button">Danger</button> <button class=
            "btn btn-light disabled" type="button">Light</button> <button class="btn btn-dark disabled"
            type="button">Dark</button> <button class="btn btn-link disabled" type=
            "button">Link</button></p>
            <p class="bs-component"><button class="btn btn-outline-primary" type=
            "button">Primary</button> <button class="btn btn-outline-secondary" type=
            "button">Secondary</button> <button class="btn btn-outline-success" type=
            "button">Success</button> <button class="btn btn-outline-info" type="button">Info</button>
            <button class="btn btn-outline-warning" type="button">Warning</button> <button class=
            "btn btn-outline-danger" type="button">Danger</button> <button class=
            "btn btn-outline-light" type="button">Light</button> <button class="btn btn-outline-dark"
            type="button">Dark</button></p>
            <div class="bs-component">
              <div aria-label="Button group with nested dropdown" class="btn-group" role="group">
                <button class="btn btn-primary" type="button">Primary</button>
                <div class="btn-group" role="group">
                  <button aria-expanded="false" aria-haspopup="true" class=
                  "btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" id="btnGroupDrop1" type=
                  "button"></button>
                  <div aria-labelledby="btnGroupDrop1" class="dropdown-menu">
                    <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href=
                    "#">Dropdown link</a>
                  </div>
                </div>
              </div>
              <div aria-label="Button group with nested dropdown" class="btn-group" role="group">
                <button class="btn btn-success" type="button">Success</button>
                <div class="btn-group" role="group">
                  <button aria-expanded="false" aria-haspopup="true" class=
                  "btn btn-success dropdown-toggle" data-bs-toggle="dropdown" id="btnGroupDrop2" type=
                  "button"></button>
                  <div aria-labelledby="btnGroupDrop2" class="dropdown-menu">
                    <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href=
                    "#">Dropdown link</a>
                  </div>
                </div>
              </div>
              <div aria-label="Button group with nested dropdown" class="btn-group" role="group">
                <button class="btn btn-info" type="button">Info</button>
                <div class="btn-group" role="group">
                  <button aria-expanded="false" aria-haspopup="true" class=
                  "btn btn-info dropdown-toggle" data-bs-toggle="dropdown" id="btnGroupDrop3" type=
                  "button"></button>
                  <div aria-labelledby="btnGroupDrop3" class="dropdown-menu">
                    <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href=
                    "#">Dropdown link</a>
                  </div>
                </div>
              </div>
              <div aria-label="Button group with nested dropdown" class="btn-group" role="group">
                <button class="btn btn-danger" type="button">Danger</button>
                <div class="btn-group" role="group">
                  <button aria-expanded="false" aria-haspopup="true" class=
                  "btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" id="btnGroupDrop4" type=
                  "button"></button>
                  <div aria-labelledby="btnGroupDrop4" class="dropdown-menu">
                    <a class="dropdown-item" href="#">Dropdown link</a> <a class="dropdown-item" href=
                    "#">Dropdown link</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="bs-component">
              <button class="btn btn-primary btn-lg" type="button">Large button</button> <button class=
              "btn btn-primary" type="button">Default button</button> <button class=
              "btn btn-primary btn-sm" type="button">Small button</button>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="bs-component">
              <div class="d-grid gap-2">
                <button class="btn btn-lg btn-primary" type="button">Block button</button>
                <button class="btn btn-lg btn-primary" type="button">Block button</button>
              </div>
            </div>
            <div class="bs-component mb-3">
              <div aria-label="Basic checkbox toggle button group" class="btn-group" role="group">
                <input autocomplete="off" checked class="btn-check" id="btncheck1" type="checkbox">
                <label class="btn btn-primary" for="btncheck1">Checkbox 1</label> <input autocomplete=
                "off" class="btn-check" id="btncheck2" type="checkbox"> <label class="btn btn-primary"
                for="btncheck2">Checkbox 2</label> <input autocomplete="off" class="btn-check" id=
                "btncheck3" type="checkbox"> <label class="btn btn-primary" for="btncheck3">Checkbox
                3</label>
              </div>
            </div>
            <div class="bs-component mb-3">
              <div aria-label="Basic radio toggle button group" class="btn-group" role="group">
                <input autocomplete="off" checked class="btn-check" id="btnradio1" name="btnradio"
                type="radio"> <label class="btn btn-outline-primary" for="btnradio1">Radio 1</label>
                <input autocomplete="off" checked class="btn-check" id="btnradio2" name="btnradio"
                type="radio"> <label class="btn btn-outline-primary" for="btnradio2">Radio 2</label>
                <input autocomplete="off" checked class="btn-check" id="btnradio3" name="btnradio"
                type="radio"> <label class="btn btn-outline-primary" for="btnradio3">Radio 3</label>
              </div>
            </div>
            <div class="bs-component">
              <div class="btn-group-vertical">
                <button class="btn btn-primary" type="button">Button</button> <button class=
                "btn btn-primary" type="button">Button</button> <button class="btn btn-primary" type=
                "button">Button</button> <button class="btn btn-primary" type="button">Button</button>
                <button class="btn btn-primary" type="button">Button</button> <button class=
                "btn btn-primary" type="button">Button</button>
              </div>
            </div>
            <div class="bs-component mb-3">
              <div aria-label="Basic example" class="btn-group" role="group">
                <button class="btn btn-secondary" type="button">Left</button> <button class=
                "btn btn-secondary" type="button">Middle</button> <button class="btn btn-secondary"
                type="button">Right</button>
              </div>
            </div>
            <div class="bs-component mb-3">
              <div aria-label="Toolbar with button groups" class="btn-toolbar" role="toolbar">
                <div aria-label="First group" class="btn-group me-2" role="group">
                  <button class="btn btn-secondary" type="button">1</button> <button class=
                  "btn btn-secondary" type="button">2</button> <button class="btn btn-secondary" type=
                  "button">3</button> <button class="btn btn-secondary" type="button">4</button>
                </div>
                <div aria-label="Second group" class="btn-group me-2" role="group">
                  <button class="btn btn-secondary" type="button">5</button> <button class=
                  "btn btn-secondary" type="button">6</button> <button class="btn btn-secondary" type=
                  "button">7</button>
                </div>
                <div aria-label="Third group" class="btn-group" role="group">
                  <button class="btn btn-secondary" type="button">8</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="typography">Typography</h1>
            </div>
          </div>
        </div><!-- Headings -->
        <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
              <h1>Heading 1</h1>
              <h2>Heading 2</h2>
              <h3>Heading 3</h3>
              <h4>Heading 4</h4>
              <h5>Heading 5</h5>
              <h6>Heading 6</h6>
              <h3>Heading <small class="text-body-secondary">with faded secondary text</small></h3>
              <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor
              auctor.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <h2>Example body text</h2>
              <p>Nullam quis risus eget <a href="#">urna mollis ornare</a> vel eu leo. Cum sociis
              natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id
              dolor id nibh ultricies vehicula.</p>
              <p><small>This line of text is meant to be treated as fine print.</small></p>
              <p>The following is <strong>rendered as bold text</strong>.</p>
              <p>The following is <em>rendered as italicized text</em>.</p>
              <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <h2>Emphasis classes</h2>
              <p class="text-primary">.text-primary</p>
              <p class="text-primary-emphasis">.text-primary-emphasis</p>
              <p class="text-secondary">.text-secondary</p>
              <p class="text-secondary-emphasis">.text-secondary-emphasis</p>
              <p class="text-success">.text-success</p>
              <p class="text-success-emphasis">.text-success-emphasis</p>
              <p class="text-danger">.text-danger</p>
              <p class="text-danger-emphasis">.text-danger-emphasis</p>
              <p class="text-warning">.text-warning</p>
              <p class="text-warning-emphasis">.text-warning-emphasis</p>
              <p class="text-info">.text-info</p>
              <p class="text-info">.text-info-emphasis</p>
              <p class="text-light">.text-light</p>
              <p class="text-light">.text-light-emphasis</p>
              <p class="text-dark">.text-dark</p>
              <p class="text-dark">.text-dark-emphasis</p>
              <p class="text-body">.text-body</p>
              <p class="text-body">.text-body-emphasis</p>
              <p class="text-body-secondary">.text-body-secondary</p>
              <p class="text-body-tertiary">.text-body-tertiary</p>
            </div>
          </div>
        </div><!-- Blockquotes -->
        <div class="row">
          <div class="col-lg-12">
            <h2 id="type-blockquotes">Blockquotes</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
              <figure>
                <blockquote class="blockquote">
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                  posuere erat a ante.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  Someone famous in <cite title="Source Title">Source Title</cite>
                </figcaption>
              </figure>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <figure class="text-center">
                <blockquote class="blockquote">
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                  posuere erat a ante.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  Someone famous in <cite title="Source Title">Source Title</cite>
                </figcaption>
              </figure>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <figure class="text-end">
                <blockquote class="blockquote">
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                  posuere erat a ante.</p>
                </blockquote>
                <figcaption class="blockquote-footer">
                  Someone famous in <cite title="Source Title">Source Title</cite>
                </figcaption>
              </figure>
            </div>
          </div>
        </div>
      </div>
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="tables">Tables</h1>
            </div>
            <div class="bs-component">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Type</th>
                    <th scope="col">Column heading</th>
                    <th scope="col">Column heading</th>
                    <th scope="col">Column heading</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-active">
                    <th scope="row">Active</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr>
                    <th scope="row">Default</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-primary">
                    <th scope="row">Primary</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-secondary">
                    <th scope="row">Secondary</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-success">
                    <th scope="row">Success</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-danger">
                    <th scope="row">Danger</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-warning">
                    <th scope="row">Warning</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-info">
                    <th scope="row">Info</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-light">
                    <th scope="row">Light</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                  <tr class="table-dark">
                    <th scope="row">Dark</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- /example -->
          </div>
        </div>
      </div>
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="forms">Forms</h1>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="bs-component">
              <form>
                <fieldset>
                  <legend>Legend</legend>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="staticEmail">Email</label>
                    <div class="col-sm-10">
                      <input class="form-control-plaintext" id="staticEmail" readonly type="text"
                      value="email@example.com">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="form-label mt-4" for="exampleInputEmail1">Email address</label>
                    <input aria-describedby="emailHelp" class="form-control" id="exampleInputEmail1"
                    placeholder="Enter email" type="email"> <small class="form-text text-muted" id=
                    "emailHelp">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label class="form-label mt-4" for="exampleInputPassword1">Password</label>
                    <input autocomplete="off" class="form-control" id="exampleInputPassword1"
                    placeholder="Password" type="password">
                  </div>
                  <div class="form-group">
                    <label class="form-label mt-4" for="exampleSelect1">Example select</label>
                    <select class="form-select" id="exampleSelect1">
                      <option>
                        1
                      </option>
                      <option>
                        2
                      </option>
                      <option>
                        3
                      </option>
                      <option>
                        4
                      </option>
                      <option>
                        5
                      </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-label mt-4" for="exampleSelect1">Example disabled select</label>
                    <select class="form-select" disabled id="exampleDisabledSelect1">
                      <option>
                        1
                      </option>
                      <option>
                        2
                      </option>
                      <option>
                        3
                      </option>
                      <option>
                        4
                      </option>
                      <option>
                        5
                      </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-label mt-4" for="exampleSelect2">Example multiple select</label>
                    <select class="form-select" id="exampleSelect2" multiple>
                      <option>
                        1
                      </option>
                      <option>
                        2
                      </option>
                      <option>
                        3
                      </option>
                      <option>
                        4
                      </option>
                      <option>
                        5
                      </option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label class="form-label mt-4" for="exampleTextarea">Example textarea</label> 
                    <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label class="form-label mt-4" for="formFile">Default file input example</label>
                    <input class="form-control" id="formFile" type="file">
                  </div>
                  <fieldset class="form-group">
                    <legend class="mt-4">Radio buttons</legend>
                    <div class="form-check">
                      <input checked class="form-check-input" id="optionsRadios1" name="optionsRadios"
                      type="radio" value="option1"> <label class="form-check-label" for=
                      "optionsRadios1">Option one is this and that—be sure to include why it's
                      great</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" id="optionsRadios2" name="optionsRadios" type=
                      "radio" value="option2"> <label class="form-check-label" for=
                      "optionsRadios2">Option two can be something else and selecting it will deselect
                      option one</label>
                    </div>
                    <div class="form-check disabled">
                      <input class="form-check-input" disabled id="optionsRadios3" name="optionsRadios"
                      type="radio" value="option3"> <label class="form-check-label" for=
                      "optionsRadios3">Option three is disabled</label>
                    </div>
                  </fieldset>
                  <fieldset class="form-group">
                    <legend class="mt-4">Checkboxes</legend>
                    <div class="form-check">
                      <input class="form-check-input" id="flexCheckDefault" type="checkbox" value="">
                      <label class="form-check-label" for="flexCheckDefault">Default checkbox</label>
                    </div>
                    <div class="form-check">
                      <input checked class="form-check-input" id="flexCheckChecked" type="checkbox"
                      value=""> <label class="form-check-label" for="flexCheckChecked">Checked
                      checkbox</label>
                    </div>
                  </fieldset>
                  <fieldset class="form-group">
                    <legend class="mt-4">Switches</legend>
                    <div class="form-check form-switch">
                      <input class="form-check-input" id="flexSwitchCheckDefault" type="checkbox">
                      <label class="form-check-label" for="flexSwitchCheckDefault">Default switch
                      checkbox input</label>
                    </div>
                    <div class="form-check form-switch">
                      <input checked class="form-check-input" id="flexSwitchCheckChecked" type=
                      "checkbox"> <label class="form-check-label" for="flexSwitchCheckChecked">Checked
                      switch checkbox input</label>
                    </div>
                  </fieldset>
                  <fieldset class="form-group">
                    <legend class="mt-4">Ranges</legend> <label class="form-label" for=
                    "customRange1">Example range</label> <input class="form-range" id="customRange1"
                    type="range"> <label class="form-label" for="disabledRange">Disabled range</label>
                    <input class="form-range" disabled id="disabledRange" type="range"> <label class=
                    "form-label" for="customRange3">Example range</label> <input class="form-range" id=
                    "customRange3" max="5" min="0" step="0.5" type="range">
                  </fieldset><button class="btn btn-primary" type="submit">Submit</button>
                </fieldset>
              </form>
            </div>
          </div>
          <div class="col-lg-4 offset-lg-1">
            <form class="bs-component">
              <div class="form-group">
                <fieldset disabled>
                  <label class="form-label" for="disabledInput">Disabled input</label> <input class=
                  "form-control" disabled id="disabledInput" placeholder="Disabled input here..." type=
                  "text">
                </fieldset>
              </div>
              <div class="form-group">
                <fieldset>
                  <label class="form-label mt-4" for="readOnlyInput">Readonly input</label>
                  <input class="form-control" id="readOnlyInput" placeholder="Readonly input here..."
                  readonly type="text">
                </fieldset>
              </div>
              <div class="form-group has-success">
                <label class="form-label mt-4" for="inputValid">Valid input</label> <input class=
                "form-control is-valid" id="inputValid" type="text" value="correct value">
                <div class="valid-feedback">
                  Success! You've done it.
                </div>
              </div>
              <div class="form-group has-danger">
                <label class="form-label mt-4" for="inputInvalid">Invalid input</label> <input class=
                "form-control is-invalid" id="inputInvalid" type="text" value="wrong value">
                <div class="invalid-feedback">
                  Sorry, that username's taken. Try another?
                </div>
              </div>
              <div class="form-group">
                <label class="col-form-label col-form-label-lg mt-4" for="inputLarge">Large
                input</label> <input class="form-control form-control-lg" id="inputLarge" placeholder=
                ".form-control-lg" type="text">
              </div>
              <div class="form-group">
                <label class="col-form-label mt-4" for="inputDefault">Default input</label>
                <input class="form-control" id="inputDefault" placeholder="Default input" type="text">
              </div>
              <div class="form-group">
                <label class="col-form-label col-form-label-sm mt-4" for="inputSmall">Small
                input</label> <input class="form-control form-control-sm" id="inputSmall" placeholder=
                ".form-control-sm" type="text">
              </div>
              <div class="form-group">
                <label class="form-label mt-4">Input addons</label>
                <div class="form-group">
                  <div class="input-group mb-3">
                    <span class="input-group-text">$</span> <input aria-label=
                    "Amount (to the nearest dollar)" class="form-control" type="text"> <span class=
                    "input-group-text">.00</span>
                  </div>
                  <div class="input-group mb-3">
                    <input aria-describedby="button-addon2" aria-label="Recipient's username" class=
                    "form-control" placeholder="Recipient's username" type="text"> <button class=
                    "btn btn-primary" id="button-addon2" type="button">Button</button>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label class="form-label mt-4">Floating labels</label>
                <div class="form-floating mb-3">
                  <input class="form-control" id="floatingInput" placeholder="name@example.com" type=
                  "email"> <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                  <input autocomplete="off" class="form-control" id="floatingPassword" placeholder=
                  "Password" type="password"> <label for="floatingPassword">Password</label>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="navs">Navs</h1>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-6">
            <h2 id="nav-tabs">Tabs</h2>
            <div class="bs-component">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <a aria-selected="true" class="nav-link active" data-bs-toggle="tab" href="#home"
                  role="tab">Home</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a aria-selected="false" class="nav-link" data-bs-toggle="tab" href="#profile" role=
                  "tab" tabindex="-1">Profile</a>
                </li>
                <li class="nav-item" role="presentation">
                  <a aria-selected="false" class="nav-link disabled" href="#" role="tab" tabindex=
                  "-1">Disabled</a>
                </li>
                <li class="nav-item dropdown">
                  <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown" href="#" role="button">Dropdown</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href=
                    "#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated
                    link</a>
                  </div>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel">
                  <p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu
                  stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg
                  carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.
                  Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia
                  cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi
                  qui.</p>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel">
                  <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee
                  squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes
                  anderson artisan four loko farm-to-table craft beer twee. Qui photo booth
                  letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl
                  cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus
                  mollit.</p>
                </div>
                <div class="tab-pane fade" id="dropdown1">
                  <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's
                  organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify
                  pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy
                  hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred
                  pitchfork.</p>
                </div>
                <div class="tab-pane fade" id="dropdown2">
                  <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before
                  they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny
                  pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin.
                  Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS
                  viral locavore cosby sweater.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <h2 id="nav-pills">Pills</h2>
            <div class="bs-component">
              <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item dropdown">
                  <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown" href="#" role="button">Dropdown</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href=
                    "#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated
                    link</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
            </div><br>
            <div class="bs-component">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item dropdown">
                  <a aria-expanded="false" aria-haspopup="true" class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown" href="#" role="button">Dropdown</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href=
                    "#">Another action</a> <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Separated
                    link</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <h2 id="nav-breadcrumbs">Breadcrumbs</h2>
            <div class="bs-component">
              <ol class="breadcrumb">
                <li class="breadcrumb-item active">Home</li>
              </ol>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active">Library</li>
              </ol>
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Library</a>
                </li>
                <li class="breadcrumb-item active">Data</li>
              </ol>
            </div>
          </div>
          <div class="col-lg-6">
            <h2 id="pagination">Pagination</h2>
            <div class="bs-component">
              <div>
                <ul class="pagination">
                  <li class="page-item disabled">
                    <a class="page-link" href="#">«</a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">5</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">»</a>
                  </li>
                </ul>
              </div>
              <div>
                <ul class="pagination pagination-lg">
                  <li class="page-item disabled">
                    <a class="page-link" href="#">«</a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">5</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">»</a>
                  </li>
                </ul>
              </div>
              <div>
                <ul class="pagination pagination-sm">
                  <li class="page-item disabled">
                    <a class="page-link" href="#">«</a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">5</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">»</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="indicators">Indicators</h1>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <h2>Alerts</h2>
            <div class="bs-component">
              <div class="alert alert-dismissible alert-warning">
                <button class="btn-close" data-bs-dismiss="alert" type="button"></button>
                <h4 class="alert-heading">Warning!</h4>
                <p class="mb-0">Best check yo self, you're not looking too good. Nulla vitae elit
                libero, a pharetra augue. Praesent commodo cursus magna, <a class="alert-link" href=
                "#">vel scelerisque nisl consectetur et</a>.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-danger">
                <button class="btn-close" data-bs-dismiss="alert" type="button"></button> <strong>Oh
                snap!</strong> <a class="alert-link" href="#">Change a few things up</a> and try
                submitting again.
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-success">
                <button class="btn-close" data-bs-dismiss="alert" type="button"></button> <strong>Well
                done!</strong> You successfully read <a class="alert-link" href="#">this important
                alert message</a>.
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-info">
                <button class="btn-close" data-bs-dismiss="alert" type="button"></button> <strong>Heads
                up!</strong> This <a class="alert-link" href="#">alert needs your attention</a>, but
                it's not super important.
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-primary">
                <button class="btn-close" data-bs-dismiss="alert" type="button"></button> <strong>Oh
                snap!</strong> <a class="alert-link" href="#">Change a few things up</a> and try
                submitting again.
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-secondary">
                <button class="btn-close" data-bs-dismiss="alert" type="button"></button> <strong>Well
                done!</strong> You successfully read <a class="alert-link" href="#">this important
                alert message</a>.
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="alert alert-dismissible alert-light">
                <button class="btn-close" data-bs-dismiss="alert" type="button"></button> <strong>Heads
                up!</strong> This <a class="alert-link" href="#">alert needs your attention</a>, but
                it's not super important.
              </div>
            </div>
          </div>
        </div>
        <div>
          <h2>Badges</h2>
          <div class="bs-component mb-4">
            <span class="badge bg-primary">Primary</span> <span class=
            "badge bg-secondary">Secondary</span> <span class="badge bg-success">Success</span>
            <span class="badge bg-danger">Danger</span> <span class="badge bg-warning">Warning</span>
            <span class="badge bg-info">Info</span> <span class="badge bg-light">Light</span>
            <span class="badge bg-dark">Dark</span>
          </div>
          <div class="bs-component">
            <span class="badge rounded-pill bg-primary">Primary</span> <span class=
            "badge rounded-pill bg-secondary">Secondary</span> <span class=
            "badge rounded-pill bg-success">Success</span> <span class=
            "badge rounded-pill bg-danger">Danger</span> <span class=
            "badge rounded-pill bg-warning">Warning</span> <span class=
            "badge rounded-pill bg-info">Info</span> <span class=
            "badge rounded-pill bg-light">Light</span> <span class=
            "badge rounded-pill bg-dark">Dark</span>
          </div>
        </div>
      </div>
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="progress">Progress</h1>
            </div>
            <h3 id="progress-basic">Basic</h3>
            <div class="bs-component">
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class="progress-bar"
                role="progressbar" style="width: 25%;"></div>
              </div>
            </div>
            <h3 id="progress-alternatives">Contextual alternatives</h3>
            <div class="bs-component">
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class=
                "progress-bar bg-success" role="progressbar" style="width: 25%;"></div>
              </div>
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class=
                "progress-bar bg-info" role="progressbar" style="width: 50%;"></div>
              </div>
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class=
                "progress-bar bg-warning" role="progressbar" style="width: 75%;"></div>
              </div>
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class=
                "progress-bar bg-danger" role="progressbar" style="width: 100%;"></div>
              </div>
            </div>
            <h3 id="progress-multiple">Multiple bars</h3>
            <div class="bs-component">
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="15" class="progress-bar"
                role="progressbar" style="width: 15%;"></div>
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="30" class=
                "progress-bar bg-success" role="progressbar" style="width: 30%;"></div>
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" class=
                "progress-bar bg-info" role="progressbar" style="width: 20%;"></div>
              </div>
            </div>
            <h3 id="progress-striped">Striped</h3>
            <div class="bs-component">
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class=
                "progress-bar progress-bar-striped" role="progressbar" style="width: 10%;"></div>
              </div>
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="25" class=
                "progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%;">
                </div>
              </div>
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class=
                "progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%;">
                </div>
              </div>
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class=
                "progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%;">
                </div>
              </div>
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="100" class=
                "progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%;">
                </div>
              </div>
            </div>
            <h3 id="progress-animated">Animated</h3>
            <div class="bs-component">
              <div class="progress">
                <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="75" class=
                "progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style=
                "width: 75%;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bs-docs-section">
        <div class="row">
          <div class="col-lg-12">
            <div class="page-header">
              <h1 id="containers">Containers</h1>
            </div>
            <div class="bs-component">
              <div class="jumbotron">
                <h1 class="display-3">Hello, world!</h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for
                calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the
                larger container.</p>
                <p class="lead"><a class="btn btn-primary btn-lg" href="#" role="button">Learn
                more</a></p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <h2>List groups</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
              <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">Cras
                justo odio <span class="badge bg-primary badge-pill">14</span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Dapibus
                ac facilisis in <span class="badge bg-primary badge-pill">2</span></li>
                <li class="list-group-item d-flex justify-content-between align-items-center">Morbi leo
                risus <span class="badge bg-primary badge-pill">1</span></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="list-group">
                <a class="list-group-item list-group-item-action active" href="#">Cras justo odio</a>
                <a class="list-group-item list-group-item-action" href="#">Dapibus ac facilisis in</a>
                <a class="list-group-item list-group-item-action disabled" href="#">Morbi leo risus</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="list-group">
                <a class="list-group-item list-group-item-action flex-column align-items-start active"
                href="#">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">List group item heading</h5><small>3 days ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                eget risus varius blandit.</p><small>Donec id elit non mi porta.</small></a> <a class=
                "list-group-item list-group-item-action flex-column align-items-start" href="#">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">List group item heading</h5><small class="text-muted">3 days
                  ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam
                eget risus varius blandit.</p><small class="text-muted">Donec id elit non mi
                porta.</small></a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <h2>Cards</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Primary card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card bg-secondary mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Secondary card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Success card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Danger card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Warning card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Info card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card bg-light mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Light card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card text-white bg-dark mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="card border-primary mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Primary card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card border-secondary mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Secondary card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card border-success mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Success card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card border-danger mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Danger card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card border-warning mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Warning card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card border-info mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Info card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card border-light mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Light card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
              <div class="card border-dark mb-3" style="max-width: 20rem;">
                <div class="card-header">
                  Header
                </div>
                <div class="card-body">
                  <h4 class="card-title">Dark card title</h4>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="card mb-3">
                <h3 class="card-header">Card header</h3>
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <h6 class="card-subtitle text-muted">Support card subtitle</h6>
                </div><svg aria-label="Placeholder: Image cap" class="d-block user-select-none"
                focusable="false" height="200" preserveaspectratio="xMidYMid slice" role="img" style=
                "font-size:1.125rem;text-anchor:middle" viewbox="0 0 318 180" width="100%" xmlns=
                "http://www.w3.org/2000/svg">
                <rect fill="#868e96" height="100%" width="100%"></rect>
                <text dy=".3em" fill="#dee2e6" x="50%" y="50%">
                  Image cap
                </text></svg>
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Dapibus ac facilisis in</li>
                  <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                  <a class="card-link" href="#">Card link</a> <a class="card-link" href="#">Another
                  link</a>
                </div>
                <div class="card-footer text-muted">
                  2 days ago
                </div>
              </div>
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Card title</h4>
                  <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                  <p class="card-text">Some quick example text to build on the card title and make up
                  the bulk of the card's content.</p><a class="card-link" href="#">Card link</a>
                  <a class="card-link" href="#">Another link</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-12">
            <h2>Accordions</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <div class="bs-component">
              <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne"><button aria-controls="collapseOne"
                  aria-expanded="true" class="accordion-button" data-bs-target="#collapseOne"
                  data-bs-toggle="collapse" type="button">Accordion Item #1</button></h2>
                  <div aria-labelledby="headingOne" class="accordion-collapse collapse show"
                  data-bs-parent="#accordionExample" id="collapseOne">
                    <div class="accordion-body">
                      <strong>This is the first item's accordion body.</strong> It is shown by default,
                      until the collapse plugin adds the appropriate classes that we use to style each
                      element. These classes control the overall appearance, as well as the showing and
                      hiding via CSS transitions. You can modify any of this with custom CSS or
                      overriding our default variables. It's also worth noting that just about any HTML
                      can go within the <code>.accordion-body</code>, though the transition does limit
                      overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo"><button aria-controls="collapseTwo"
                  aria-expanded="false" class="accordion-button collapsed" data-bs-target=
                  "#collapseTwo" data-bs-toggle="collapse" type="button">Accordion Item
                  #2</button></h2>
                  <div aria-labelledby="headingTwo" class="accordion-collapse collapse" data-bs-parent=
                  "#accordionExample" id="collapseTwo">
                    <div class="accordion-body">
                      <strong>This is the second item's accordion body.</strong> It is hidden by
                      default, until the collapse plugin adds the appropriate classes that we use to
                      style each element. These classes control the overall appearance, as well as the
                      showing and hiding via CSS transitions. You can modify any of this with custom
                      CSS or overriding our default variables. It's also worth noting that just about
                      any HTML can go within the <code>.accordion-body</code>, though the transition
                      does limit overflow.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree"><button aria-controls="collapseThree"
                  aria-expanded="false" class="accordion-button collapsed" data-bs-target=
                  "#collapseThree" data-bs-toggle="collapse" type="button">Accordion Item
                  #3</button></h2>
                  <div aria-labelledby="headingThree" class="accordion-collapse collapse"
                  data-bs-parent="#accordionExample" id="collapseThree">
                    <div class="accordion-body">
                      <strong>This is the third item's accordion body.</strong> It is hidden by
                      default, until the collapse plugin adds the appropriate classes that we use to
                      style each element. These classes control the overall appearance, as well as the
                      showing and hiding via CSS transitions. You can modify any of this with custom
                      CSS or overriding our default variables. It's also worth noting that just about
                      any HTML can go within the <code>.accordion-body</code>, though the transition
                      does limit overflow.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include $inc_path . 'pages_body-notices.php';
          include $inc_path . 'pages_body-scripts.php'; ?>

  </body>
</html>
