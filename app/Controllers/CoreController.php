<?php

namespace app\Controllers;

class CoreController
{

    /**
     * Method to display HTML code based on views
     *
     * @param string $viewName Name of views file
     * @param array $viewData array of data to pass to the view
     * @return void
     */
    protected function show(string $viewName, $viewData = [])
    {
        
        //TODO: find other way than using "global".
        global $router;

        
        $viewData['currentPage'] = $viewName;

        $viewData['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';
        
        $viewData['baseUri'] = $_SERVER['BASE_URI'];

       
        extract($viewData);
        

        // $viewData is accessible in view files
        require_once __DIR__ . './../views/layout/header.tpl.php';
        require_once __DIR__ . './../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . './../views/layout/footer.tpl.php';
    }


    /**
     * Method used to redirect to a route whose name is passed as a parameter
     *
     * @param string $routeName
     * @return void
     */
    public function redirect($routeName)
    {
        
        global $router;
        
        header('Location: ' . $router->generate($routeName));

    }

}