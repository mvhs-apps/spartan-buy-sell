<!DOCTYPE html>
<html>
<head>
    <title>Spartan Buy and Sell</title>
    <meta charset="utf-8">
    <!--MDL-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--Color Theme-->
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.amber-orange.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <!--CSS and Javascript links-->
    <link rel="stylesheet" href="SBS.css">
</head>
<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--no-drawer-button">
    <header class="mdl-layout__header">
        <div class="mdl-layout-icon"></div>
        <div class="mdl-layout__header-row">
            <span class="mdl-layout__title">Spartan Buy and Sell</span>
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="#">Home</a>
                <a class="mdl-navigation__link" href="#">Profile</a>
                <a class="mdl-navigation__link" href="#">Market Place</a>
            </nav>
            <div class="mdl-layout-spacer"></div>
            <!--If you know how to add buttons here can you? I think it would look better-->
            <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="#">Sign Up</a>
                <a class="mdl-navigation__link" href="#">Log In</a>
            </nav>
        </div>
    </header>
    <main class="mdl-content">
        <h3>Sign Up</h3>
        <form>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="user" pattern="[A-Z,a-z, ]*">
                <label class="mdl-textfield__label" id="user">User Name</label>
                <span class="mdl-textfield__error">Letters and Spaces Only</span>
            </div><br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="email" pattern="[A-Z,a-z, ]*" name="username">
                <label class="mdl-textfield__label" id="email">MVLA email</label>
                <span class="mdl-textfield__error">Must be a "mvla.net" email</span>
            </div><br>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" id="email" name="username">
                <label class="mdl-textfield__label" id="email">Password</label>
            </div><br>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" type="submit">
              Submit
            </button>
         </form>
    </main>
    <footer class="mdl-mini-footer">
      <div class="mdl-mini-footer__left-section">
        <div class="mdl-logo">Spartan Buy and Sell</div>
        <ul class="mdl-mini-footer__link-list">
            <!--link this to some place that shows instructions on how to use the website-->
          <li><a href="#">Help</a></li>
            <!--I don't think we have any-->
          <li><a href="#">Privacy & Terms</a></li>
        </ul>
      </div>
        <div class="mdl-mini-footer__right-section">
            <ul class="mdl-mini-footer__link-list">
                <li><div class="mdl-logo">Contacts</div></li>
                <!--If you want to make contacts for people if they need extra help but so far we don't have any-->
                <li><a href="#">Instagram</a></li>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
            </ul>
        </div>
    </footer>
</div>
</body>
</html>