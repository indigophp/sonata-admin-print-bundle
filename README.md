# Indigo Sonata Admin Print Bundle

[![Latest Version](https://img.shields.io/github/release/indigophp/sonata-admin-print-bundle.svg?style=flat-square)](https://github.com/indigophp/sonata-admin-print-bundle/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Total Downloads](https://img.shields.io/packagist/dt/indigophp/sonata-admin-print-bundle.svg?style=flat-square)](https://packagist.org/packages/indigophp/sonata-admin-print-bundle)

**Allows to print entities.**


## Install

Via Composer

``` bash
$ composer require indigophp/sonata-admin-print-bundle
```


## Usage

First of all you need to be familiar with the process of creating a custom action. See instructions [here](https://sonata-project.org/bundles/admin/master/doc/cookbook/recipe_custom_action.html).

1. Use `Indigo\SonataAdminPrintBundle\Admin\PrintAdmin` trait in your custom admin class.
2. Use `Indigo\SonataAdminPrintBundle\Controller\CRUDPrintController` trait in your custom admin controller. Make sure you pass in the controller name as an argument in the service definition. (Check the above link to learn how to do that)
3. In the  `configureListFields` method configure an action called `print`. You need to set the template manually to `SonataAdminPrintBundle::list__action_print.html.twig`


## Testing

``` bash
$ composer test
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Security

If you discover any security related issues, please contact us at [security@indigophp.com](mailto:security@indigophp.com).


## Credits

- [Márk Sági-Kazár](https://github.com/sagikazarmark)
- [All Contributors](https://github.com/indigophp/sonata-admin-print-bundle/contributors)


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
