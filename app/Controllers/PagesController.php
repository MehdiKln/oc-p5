<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\Twig as View;

class PagesController extends Controller
{
    public function index($request, $response)
    {
        return $this->view->render($response, 'home.twig');
    }

    public function getGallery(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'pages/gallery.twig');
    }

    public function getAtelier(ServerRequestInterface $request, ResponseInterface $response) 
    {
        return $this->view->render($response, 'pages/atelier.twig');
    }

    public function getFaq(ServerRequestInterface $request, ResponseInterface $response) 
    {
        return $this->view->render($response, 'pages/faq.twig');
    }

    public function getContact(ServerRequestInterface $request, ResponseInterface $response) 
    {
        return $this->view->render($response, 'pages/contact.twig');
    }

    public function postContact(ServerRequestInterface $request, ResponseInterface $response) 
    {   
        
        $mailer = $this->mailer();
        $message = (new \Swift_Message('Formulaire rempli'))
        ->setFrom([$request->getParam('email') => $request->getParam('name')])
        ->setTo('clknatureetpalette@gmail.com')
        ->setBody("Un email vous a été envoyé :
        {$request->getParam('textarea')}");

        $mailer->send($message);
        return $response->withRedirect($this->router->pathFor('contact')); 
    }

    public function getEagle(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/eagle.twig');
    }

    public function getArbre(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/arbre.twig');
    }

    public function getArbre2(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/arbre2.twig');
    }

    public function getCerf(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/cerf.twig');
    }

    public function getCerfHead(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/cerfhead.twig');
    }

    public function getCerfHead2(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/cerfhead2.twig');
    }

    public function getCerfMini(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/cerfmini.twig');
    }

    public function getCheval(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/cheval.twig');
    }

    public function getColibri(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/colibri.twig');
    }

    public function getFeuilles(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/feuilles.twig');
    }

    public function getFeuilles2(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/feuilles2.twig');
    }

    public function getFeuillesBranche(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/feuillesbranche.twig');
    }

    public function getAutruche(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/autruche.twig');
    }

    public function getHeron(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/heron.twig');
    }

    public function getHibou(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/hibou.twig');
    }

    public function getLicorne(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/licorne.twig');
    }

    public function getMultiBirds(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/multibirds.twig');
    }

    public function getOiseauxBranche(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/oiseauxbranche.twig');
    }

    public function getOurs(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/ours.twig');
    }

    public function getSapin(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/sapin.twig');
    }

    public function get1a(ServerRequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'tableauxviews/1a.twig');
    }
}

