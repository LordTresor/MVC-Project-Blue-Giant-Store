<?php

namespace app\Controllers;

class ProfessorController extends CoreController
{

    /**
     * Method for display professor page
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
         $this->show('professor/professor-index');

    }

}