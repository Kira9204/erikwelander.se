<?php declare(strict_types=1);

namespace App\controller;

use Locale;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Log\LoggerInterface;
use Slim\Psr7\Response;

class HomePageController
{
    private $logger;
    private $twig;
    private $phpRenderer;
    private $pageLastModified;

    public function __construct(LoggerInterface $logger, \Twig\Environment $twig, \Slim\Views\PhpRenderer $phpRenderer)
    {
        $this->logger = $logger;
        $this->twig = $twig;
        $this->phpRenderer = $phpRenderer;
        $this->pageLastModified = '2020-01-11';
    }

    public function index(ServerRequestInterface $request): ResponseInterface
    {
        $locale = Locale::acceptFromHttp($_SERVER['HTTP_ACCEPT_LANGUAGE']);
        if (!empty($_GET['lang'])) {
            setcookie('lang', $_GET['lang']);
            $locale = $_GET['lang'];
        } else {
            if (!empty($_COOKIE['lang'])) {
                $locale = $_COOKIE['lang'];
            }
        }

        $T = null;
        $T_BASEDIR = __DIR__ . '/../translations/homepage';
        if (strpos($locale, 'sv') === 0) {
            $T = include($T_BASEDIR . '/sv.php');
        } else {
            $T = include($T_BASEDIR . '/en.php');
        }

        $response = new Response();
        $response->getBody()->write(
            $this->twig->render('home.twig', [
                'locale' => $locale,
                'T' => $T
            ])
        );
        return $response;
    }

    public function css(ServerRequestInterface $request): ResponseInterface
    {
        return $this->phpRenderer->render(new Response(), 'css/main.css');
    }
}
