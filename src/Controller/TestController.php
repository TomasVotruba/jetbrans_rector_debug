<?php


namespace App\Controller;


use _HumbugBox3ab8cff0fda0\___PHPSTORM_HELPERS\this;
use _HumbugBox3ab8cff0fda0\App\Http\Controllers\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestController extends AbstractController
{
    public function testAction(): string
    {
        this::class;
        Controller::class;
        return 'ok';
    }
}
