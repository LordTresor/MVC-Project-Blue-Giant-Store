<?php

namespace app\Controllers;

class InstrumentController extends CoreController
{

    /**
     * Method for display instrument page
     * 
     * @return void
     */
    public function index()
    {

        /**
         * method call from a model if necessary in order to use it on the page which will be instantiated with the controller.
         */

        /** 
         * 
         */
         $this->show('instruments/instrument-index');

    }

}