<?php

namespace Application\Provider;

use Application\Controller;

use Silex\Application;
use Silex\ControllerProviderInterface;
use Silex\ServiceProviderInterface;

class ControllerServiceProvider implements ControllerProviderInterface, ServiceProviderInterface {
  
  /**
   * @param \Silex\Application $app
   */
  public function boot(Application $app) {
    
  }
  
  /**
   * @param \Silex\Application $app
   */
  public function register(Application $app) {
    $app['controller.pages'] = $app->share(function () use ($app) {
      return new Controller\Pages();
    });
  }
  
  /**
   * @param \Silex\Application $app
   * @return \Silex\Application
   */
  public function connect(Application $app) {
    /** @var \Silex\ControllerCollection $controllers */
    $controllers = $app['controllers_factory'];
    $controllers
        ->get('/', 'controller.pages:indexAction')
        ->bind('homepage');
    return $controllers;
  }
}
?>
