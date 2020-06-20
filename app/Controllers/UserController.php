<?php

namespace App\Controllers;

class UserController extends Controller
{
    public function avatar($request,$response)
    {
        if($request->isGet())
        return $this->container->view->render($response, 'user/avatar.twig');
    }
}