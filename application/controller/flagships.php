<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class flagships extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function ecokinga()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/flagships/ecokinga.php';
        require APP . 'view/_templates/footer.php';
    }

    public function cbo()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/flagships/cbo.php';
        require APP . 'view/_templates/footer.php';
    }

    public function msmeEmpowerment()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/flagships/msme.php';
        require APP . 'view/_templates/footer.php';
    }

    public function janiAI()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/flagships/jani.php';
        require APP . 'view/_templates/footer.php';
    }

    public function consultancy()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/flagships/consultancy.php';
        require APP . 'view/_templates/footer.php';
    }
}
