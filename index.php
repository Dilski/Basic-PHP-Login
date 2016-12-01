<?php
/**
 * User: Dilski
 * Date: 16/11/2016
 * Time: 19:49
 */

require 'app/config/config.php';

require PATH_CONTROLLERS . 'session.php';

require PATH_CONTROLLERS . 'login.php';

$login =

$whitelist = array("movies", "login");

$action = (isset($_GET['action'])) ? $_GET['action'] : null;

$page = (isset($_GET['p']) AND in_array($_GET['p'], $whitelist)) ? $_GET['p'] . '.php' : 'index.php';


if (file_exists(PATH_CONTROLLERS . $page)) {
    require PATH_CONTROLLERS . $page;
    $controller = new controller();

    if ($action == null) {
        require PATH_VIEWS . 'templates/header.php';
        $controller->render();
        require PATH_VIEWS . 'templates/footer.php';
    } elseif ($controller->methodExists($action)) {

        die($controller->{$action}());
    }

} else {
    require PATH_VIEWS . 'templates/error.php';
}


