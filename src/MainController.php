<?php

namespace Itb;


class MainController
{
    private $twig;

    public function __construct($twig)
    {
        $this->twig = $twig;
    }

    public function indexAction()
    {
        $template = 'index.html.twig';
        $argsArray = [
            'pageName' => 'Home'
        ];

        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function aboutAction()
    {
        $template = 'about.html.twig';
        $argsArray = [
            'pageName' => 'About'
        ];

        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function galleryAction()
    {
        $template = 'gallery.html.twig';
        $argsArray = [
            'pageName' => 'Gallery'
        ];

        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function loginAction()
    {
        $template = 'login.html.twig';
        $argsArray = [
            'pageName' => 'Login'
        ];

        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function contactAction()
    {
        $template = 'contact.html.twig';
        $argsArray = [
            'pageName' => 'Contact'
        ];

        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function adminAction()
    {
        $template = 'admin.html.twig';
        $argsArray = [
            'pageName' => 'Admin'
        ];

        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function adminAboutAction()
    {
        $template = 'adminAbout.html.twig';
        $argsArray = [
            'pageName' => 'About'
        ];

        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function adminContactAction()
    {
        $template = 'adminContact.html.twig';
        $argsArray = [
            'pageName' => 'About'
        ];

        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function adminGalleryAction()
    {
        $template = 'adminGallery.html.twig';
        $argsArray = [
            'pageName' => 'Gallery'
        ];

        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function adminIndexAction()
    {
        $template = 'adminIndex.html.twig';
        $argsArray = [
            'pageName' => 'Admin'
        ];

        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function adminShoppingAction()
    {
        $template = 'adminShopping.html.twig';
        $argsArray = [
            'pageName' => 'Admin'
        ];

        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function logoutAction()
    {
        $template = 'index.html.twig';
        $argsArray = [
            'pageName' => 'Logout'
        ];

        $html = $this->twig->render($template, $argsArray);
        print $html;
    }

    public function adminRegistrationAction()
    {
        $template = 'index.html.twig';
        $argsArray = [
            'pageName' => 'Logout'
        ];

        $html = $this->twig->render($template, $argsArray);
        print $html;
    }





}