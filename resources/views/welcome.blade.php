<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css"/>
    </head>
    <body>
        <section class="section">
            <div class="container">
              <h1 class="title">Section</h1>
              <h2 class="subtitle">
                A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
              </h2>
            </div>
        </section>

        <section class="section">
            <nav class="level">
              <p class="level-item has-text-centered">
                <a class="link is-info">Home</a>
              </p>
              <p class="level-item has-text-centered">
                <a class="link is-info">Menu</a>
              </p>
              <p class="level-item has-text-centered">
                <img src="https://bulma.io/images/bulma-type.png" alt="" style="height: 30px;">
              </p>
              <p class="level-item has-text-centered">
                <a class="link is-info">Reservations</a>
              </p>
              <p class="level-item has-text-centered">
                <a class="link is-info">Contact</a>
              </p>
            </nav>
        </section>


        <section class="section">
            <div class="field">
              <div class="file is-centered is-boxed is-success has-name">
                <label class="file-label">
                  <input class="file-input" type="file" name="resume">
                  <span class="file-cta">
                    <span class="file-icon">
                      <i class="fas fa-upload"></i>
                    </span>
                    <span class="file-label">
                      Centered file…
                    </span>
                  </span>
                  <span class="file-name">
                    Screen Shot 2017-07-29 at 15.54.25.png
                  </span>
                </label>
              </div>
            </div>
        </section>


        <section class="section">
            <div class="field">
          <label class="label">Name</label>
          <div class="control">
            <input class="input" type="text" placeholder="Text input">
          </div>
        </div>

        <div class="field">
          <label class="label">Username</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-success" type="text" placeholder="Text input" value="bulma">
            <span class="icon is-small is-left">
              <i class="fas fa-user"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fas fa-check"></i>
            </span>
          </div>
          <p class="help is-success">This username is available</p>
        </div>

        <div class="field">
          <label class="label">Email</label>
          <div class="control has-icons-left has-icons-right">
            <input class="input is-danger" type="email" placeholder="Email input" value="hello@">
            <span class="icon is-small is-left">
              <i class="fas fa-envelope"></i>
            </span>
            <span class="icon is-small is-right">
              <i class="fas fa-exclamation-triangle"></i>
            </span>
          </div>
          <p class="help is-danger">This email is invalid</p>
        </div>

        <div class="field">
          <label class="label">Subject</label>
          <div class="control">
            <div class="select">
              <select>
                <option>Select dropdown</option>
                <option>With options</option>
              </select>
            </div>
          </div>
        </div>

        <div class="field">
          <label class="label">Message</label>
          <div class="control">
            <textarea class="textarea" placeholder="Textarea"></textarea>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <label class="checkbox">
              <input type="checkbox">
              I agree to the <a href="#">terms and conditions</a>
            </label>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <label class="radio">
              <input type="radio" name="question">
              Yes
            </label>
            <label class="radio">
              <input type="radio" name="question">
              No
            </label>
          </div>
        </div>

        <div class="field is-grouped">
          <div class="control">
            <button class="button is-link">Submit</button>
          </div>
          <div class="control">
            <button class="button is-primary">Cancel</button>
          </div>
        </div>
        </section>



        <section class="section">
            <nav class="level">
              <div class="level-item has-text-centered">
                <div>
                  <p class="heading">Tweets</p>
                  <p class="title">3,456</p>
                </div>
              </div>
              <div class="level-item has-text-centered">
                <div>
                  <p class="heading">Following</p>
                  <p class="title">123</p>
                </div>
              </div>
              <div class="level-item has-text-centered">
                <div>
                  <p class="heading">Followers</p>
                  <p class="title">456K</p>
                </div>
              </div>
              <div class="level-item has-text-centered">
                <div>
                  <p class="heading">Likes</p>
                  <p class="title">789</p>
                </div>
              </div>
            </nav>
        </section>


        <section class="hero is-primary">
          <div class="hero-body">
            <div class="container">
              <h1 class="title">
                Primary title
              </h1>
              <h2 class="subtitle">
                Primary subtitle
              </h2>
            </div>
          </div>
        </section>


        <section class="section">
            <div class="tile is-ancestor">

              <div class="tile is-vertical is-3">
                <div class="tile">
                  <div class="tile is-parent is-vertical">
                    <article class="tile is-child notification is-primary">
                      <p class="title">Vertical...</p>
                      <p class="subtitle">Top tile</p>
                    </article>
                    <article class="tile is-child notification is-warning">
                      <p class="title">...tiles</p>
                      <p class="subtitle">Bottom tile</p>
                    </article>
                  </div>
                  <div class="tile is-parent">
                    <article class="tile is-child notification is-info">
                      <p class="title">Middle tile</p>
                      <p class="subtitle">With an image</p>
                      <figure class="image is-4by3">
                        <img src="https://bulma.io/images/placeholders/640x480.png">
                      </figure>
                    </article>
                  </div>
                </div>
                <div class="tile is-parent">
                  <article class="tile is-child notification is-danger">
                    <p class="title">Wide tile</p>
                    <p class="subtitle">Aligned with the right tile</p>
                    <div class="content">
                      <!-- Content -->
                    </div>
                  </article>
                </div>
              </div>

              <div class="tile is-parent">
                <article class="tile is-child notification is-success">
                  <div class="content">
                    <p class="title">Tall tile</p>
                    <p class="subtitle">With even more content</p>
                    <div class="content">
                      <!-- Content -->
                    </div>
                  </div>
                </article>
              </div>
            </div>
        </section>

        <section>
            <footer class="footer">
                <div class="content has-text-centered">
                    <p>
                        <strong>Bulma</strong> by <a href="https://jgthms.com">Jeremy Thomas</a>. The source code is licensed
                        <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                        is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
                    </p>
                </div>
            </footer>
        </section>
    </body>
</html>
