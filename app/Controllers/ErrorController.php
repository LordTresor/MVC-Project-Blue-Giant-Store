<?php

namespace app\Controllers;

//class for manage error message (404, 403)
class ErrorController extends CoreController
{

    public function error404()
    {
        /**
         * method for display 404 page
         * 
         * @return void
         */
        header('HTTP/1.0 404 Not Found');

        $this->show('error/404');

    }

}