<?php declare(strict_types=1);

use DI\ContainerBuilder;
use Monolog\Handler\StreamHandler;
use Monolog\Logger;
use Monolog\Processor\UidProcessor;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;
use Twig\Environment;
use Slim\Views\PhpRenderer;

return static function (ContainerBuilder $containerBuilder, array $settings) {
    $containerBuilder->addDefinitions([
        'settings' => $settings,

        LoggerInterface::class => function (ContainerInterface $c): Logger {
            $settings = $c->get('settings');

            $loggerSettings = $settings['logger'];
            $logger = new Logger($loggerSettings['name']);

            $processor = new UidProcessor();
            $logger->pushProcessor($processor);

            $handler = new StreamHandler($loggerSettings['path'], $loggerSettings['level']);
            $logger->pushHandler($handler);

            return $logger;
        },
        \Twig\Environment::class => function (ContainerInterface $c) use ($settings): Environment {
            $loader = new Twig\Loader\FilesystemLoader(__DIR__ . '/../view');
            $twig = new Twig\Environment($loader, [
                __DIR__ . '/../var/cache'
            ]);
            if ($settings['app_env'] === 'DEVELOPMENT') {
                $twig->addExtension(new \Twig\Extension\DebugExtension());
                $twig->enableDebug();
            }
            return $twig;
        },
        Slim\Views\PhpRenderer::class => function (ContainerInterface $c) use ($settings): PhpRenderer {
            return new PhpRenderer(__DIR__ . '/../view');
        }
    ]);
};


