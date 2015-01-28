<?php

namespace Application\Controller;

use Silex\Application;

class Pages {

  public function indexAction(Application $app) {
    return $app['twig']->render('index.html.twig');
  }
}