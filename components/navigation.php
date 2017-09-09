<?php
namespace AppleOfAries;
require_once('class.aoa-config.php');
?>
<nav class="navbar navbar-expand-md navbar-dark primary-navbar float-right">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation-main"
            aria-controls="navigation-main" aria-expanded="false" aria-label="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navigation-main" class="" style="float: right;">
        <ul class="navbar-nav mr-auto collapse navbar-collapse">
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    About
                </a>
            </li>
            <li class="nav-item dropdown">
                <a id="categories-dropdown" class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"
                   aria-haspopup="true" aria-expanded="false">
                    Categories
                </a>
                <div class="dropdown-menu" aria-labelledby="categories-dropdown">
                    <a class="dropdown-item" href="#">category 1</a>
                    <a class="dropdown-item" href="#">category 2</a>
                    <a class="dropdown-item" href="#">category 3</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<h3 class="branding" href="#">
    <?php echo Config::SITE_TITLE; ?>
</h3>
