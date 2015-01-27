<?php

use Silex\Application;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\FormServiceProvider;
use Silex\Provider\ValidatorServiceProvider;
use Silex\Provider\TranslationServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\UrlGeneratorServiceProvider;
use Silex\Provider\WebProfilerServiceProvider;

use Igorw\Silex\ConfigServiceProvider;

require_once '../vendor/autoload.php';

$app = new Application();
$environment = getenv('APP_ENV') ? : 'dev';
$config = __DIR__ . '/config/' . $environment . '.json';

if (!is_readable($config)) {
  $app->abort('500', 'Configuration file is missing.');
}

$app
    ->register(new FormServiceProvider())
    ->register(new ValidatorServiceProvider())
    ->register(new ServiceControllerServiceProvider())
    ->register(new TranslationServiceProvider())
    ->register(new TwigServiceProvider())
    ->register(new UrlGeneratorServiceProvider())
    ->register(new ConfigServiceProvider($config, array('root_path' => __DIR__ . '/../')));

if ($app['debug']) {
  $app
      ->register(new WebProfilerServiceProvider());
}

$app['translator']->addLoader('xlf', new Symfony\Component\Translation\Loader\XliffFileLoader());
$app['translator']->addResource('xlf', __DIR__ . '/../vendor/symfony/validator/Symfony/Component/Validator/Resources/translations/validators.fr.xlf', $app['locale_fallback'], 'validators');

return $app;
