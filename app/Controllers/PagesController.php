<?php 

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use App\Models\Gallery;

class PagesController extends Controller
{

    public function home(ServerRequestInterface $request, ResponseInterface $response) 
    {
        $this->render($response, 'pages/home.twig');
    }

    public function getGallery(ServerRequestInterface $request, ResponseInterface $response, $args)
    {
        $db = $app->getContainer()->get('db');
        $images = $db->table('gallery')->get();


        $this->render($response, 'pages/gallery.twig');
    }

    public function getAtelier(ServerRequestInterface $request, ResponseInterface $response) 
    {
        $this->render($response, 'pages/atelier.twig');
    }

    public function getFaq(ServerRequestInterface $request, ResponseInterface $response) 
    {
        $this->render($response, 'pages/faq.twig');
    }

    public function getContact(ServerRequestInterface $request, ResponseInterface $response) 
    {
        $this->render($response, 'pages/contact.twig');
    }
}