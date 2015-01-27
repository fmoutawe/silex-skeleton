Silex Skeleton
==============

This small repository provide a cool skeleton for `Silex`_.
This document contains information about it.

What's inside?
---------------

The Silex Skeleton is configured with the following service providers:

* `FormServiceProvider`_ - provides a service for building forms in your application with the Symfony2 Form component.
* `ValidatorServiceProvider`_ - Provides a service for validating data. It is most useful when used with the FormServiceProvider, but can also be used standalone.
* `ServiceControllerServiceProvider`_ - As your Silex application grows, you may wish to begin organizing your controllers in a more formal fashion. Silex can use controller classes out of the box, but with a bit of work, your controllers can be created as services, giving you the full power of dependency injection and lazy loading.
* `TranslationServiceProvider`_ - provides a service for translating your application into different languages.
* `TwigServiceProvider`_ - Provides integration with the Twig template engine.
* `UrlGeneratorServiceProvider`_ - Provides a service for generating URLs for named routes.
* `ConfigServiceProvider`_ - Provides a service for include configuration file with php, json, yaml or toml format.
* `WebProfilerServiceProvider`_ - Enable the Symfony web debug toolbar and
  the Symfony profiler in your Silex application when developing.

Read the `Providers`_ documentation for more details about Silex Service Providers.

.. _Silex: http://silex.sensiolabs.org/
.. _FormServiceProvider: http://silex.sensiolabs.org/doc/providers/form.html
.. _ValidatorServiceProvider: http://silex.sensiolabs.org/doc/providers/validator.html
.. _ServiceControllerServiceProvider: http://silex.sensiolabs.org/doc/providers/service_controller.html
.. _TranslationServiceProvider: http://silex.sensiolabs.org/doc/providers/translation.html
.. _TwigServiceProvider: http://silex.sensiolabs.org/doc/providers/twig.html
.. _ConfigServiceProvider: https://github.com/igorw/ConfigServiceProvider
.. _UrlGeneratorServiceProvider: http://silex.sensiolabs.org/doc/providers/url_generator.html
.. _WebProfilerServiceProvider: http://github.com/silexphp/Silex-WebProfiler
.. _Providers: http://silex.sensiolabs.org/doc/providers.html


Locale
-------

This skeleton is design to be multilingual.
Default language is "english" but you can easily modify it in the config file.
To add ressources, please modify app.php file.