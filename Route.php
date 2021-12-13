<?php
/*
***********************************************
* Simple PHP Router		                        *
* --------------------------------------------*
* Description                                 *
* --------------------------------------------*
* This simple router was modified from the    *
* router that was found at                    *
*  taniarascia.com/the-simplest-php-router/   *
*                                             *
* Errors have been reported with the path /   *
* not working. This is a resolve with some    *
* simple string replacements.                 *
***********************************************
*/

        //--Switcher upper for detecting directory
        $curdir = dirname($_SERVER['REQUEST_URI'])."/";
        $baseUri = str_replace($curdir, '/', $curdir);
switch ($baseUri) {
    case '/' :
        require ROOTDIR . '/views/home.php';
        break;
    case '/about' :
        require ROOTDIR . '/views/about.php';
        break;
    default:
        http_response_code(404);
        require ROOTDIR . '/views/404.php';
        break;
}
?>
