<?php

namespace Vendor\Univer\Controllers;

use Symfony\Component\HttpFoundation;


class UniversityController
{
    /**
     * @var UniversityRepository
     */
    private $repository;
    /**
     * @var \Twig Loader
     */
    private $loader;
    /**
     * @var \Twig Environment
     */
    private $twig;
    /**
     * @var Data Base Creator
     */
    private $creator;


    function __construct()
    {
        $this->response = HttpFoundation\Request::createFromGlobals();
        $this->settings = array(
            'siteURL' => 'http://' . $this->response->server->get('SERVER_NAME')
        );
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../Views');
        $this->view = new \Twig_Environment($loader);
    }

    public function indexAction(){
        echo $this->view->render('university.html.twig', $this->settings);
    }
}