<?php

namespace App\Controllers;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\Twig as View;

class HomeController extends Controller
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

    public function submitForm($response, $request)
    {
        if ( isset($_POST['title']) && isset($_POST['nom']) && isset($_POST['email']) && isset($_POST['textarea']) ) {

            $title = $_POST['title'];
            $nom = $_POST['nom'];
            $mail = $_POST['email'];
            $textarea = $_POST['textarea'];
            $to = 'clknature@gmail.com';
            $subject = 'Formulaire CLK Nature&Palette';
            $body = '<html>
                        <body>
                            <h2> Formulaire Rempli </h2>
                            <hr>
                            <p> Titre : '.$title.'</p>
                            <p> Nom : '.$nom.' </p>
                            <p> Mail : '.$mail.' </p>
                            <p> Message : '.$textarea.' </p>
                        </body>
                    </html>';
        
                // Headers 
                $headers .= 'From: CLK Nature et Palette <cedric@clknatureetpalette.fr>' . "\n";
                $headers .= "Reply_To :".$mail."\n";
                $headers .= "MIME-Version: 1.0"."\n";
                $headers .= "Content-type: text/html; charset=utf8;";


                $send = mail($to, $subject, $body, $headers);
		        if ($send) {
			    echo '<br>';
			    echo 'Votre message est envoyé';
		        } else {
			        echo 'erreur';
		        }
	    }
    }
}

