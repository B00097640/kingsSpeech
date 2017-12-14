<?php

namespace Itb;


class WebApplication
{
    const PATH_TO_TEMPLATES = __DIR__ . '/../views';

    private $mainController;

    public function __construct()
    {
        $twig = new \Twig\Environment(new \Twig_Loader_Filesystem(self::PATH_TO_TEMPLATES));
        $this->mainController = new MainController($twig);
    }

    public function run()
    {
        $action = filter_input(INPUT_GET, 'action');

        switch($action){
            case 'about':
                $this->mainController->aboutAction();
                break;

            case 'gallery':
                $this->mainController->galleryAction();
                break;

            case 'login':
                $this->mainController->loginAction();
                break;

            case 'contact':
                $this->mainController->contactAction();
                break;

            case 'admin':
                $this->mainController->adminAction();
                break;

            case 'adminAbout':
                $this->mainController->adminAboutAction();
                break;

            case 'adminContact':
                $this->mainController->adminContactAction();
                break;

            case 'adminGallery':
                $this->mainController->adminGalleryAction();
                break;

            case 'adminIndex':
                $this->mainController->adminIndexAction();
                break;

            case 'adminShopping':
                $this->mainController->adminShoppingAction();
                break;

            case 'adminRegistration':
                $this->mainController->adminRegistrationAction();
                break;

            case 'adminLogout':
                $this->mainController->logoutAction();
                break;

            case 'adminLogout':
                $this->mainController->logoutAction();
                break;

            case 'home':
            default:
                $this->mainController->indexAction();
        }
    }
}