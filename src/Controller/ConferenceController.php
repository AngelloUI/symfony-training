<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ConferenceController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function index(Request $request): Response
    {
        dump($request);
        $greet = '';
        if ($name = $request->query->get('hello')) {
            $greet = sprintf('<h1>Hello %s!</h1>', htmlspecialchars($name));
        }
        return new Response(<<<EOF
            <html>
                <body>
                    $greet
                    <img src="/images/under-construction.gif"  alt="not found"/>
                </body>
            </html>
            EOF
        );
    }
}
