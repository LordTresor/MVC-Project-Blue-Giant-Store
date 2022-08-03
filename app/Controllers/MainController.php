<?php

namespace app\Controllers;

class MainController extends CoreController
{

    /**
     * Method for display home page
     * 
     * @return void
     */
    public function home()
    {

        /**
         * method call from a model if necessary in order to use it on the page which will be instantiated with the controller.
         */

        /** 
         * 
         */
         $this->show('main/home');

    }

}