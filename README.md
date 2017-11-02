# LeanCloud php for Laravel 5+


## Require
- Laravel 5+
- leancloud php sdk


## Installation
```
composer require lidelin/laravel-leancloud
```

In your `config/app.php` add this line to providers array:
```php
LDL\LeanCloud\Provider\LaravelServiceProvider::class,
```

For Laravel 5.5 package supports [package discovery](https://laravel.com/docs/5.5/packages#package-discovery) feature.

Then run the command to publish the config.

```bash
php artisan vendor:publish --provider="LDL\LeanCloud\Provider\LaravelServiceProvider" --tag=config
```

## Configuration

add these lines to your .env file
```
LEANCLOUD_APP_ID=
LEANCLOUD_APP_KEY=
LEANCLOUD_MASTER_KEY=
LEANCLOUD_API_SERVER=
LEANCLOUD_APP_ENV=production      # "production" for production envirenment
```


## Usage
- [LeanCloud PHP SDK Api](https://leancloud.cn/api-docs/php/)


## Documentation
More development detail see 
- [LeanCloud 文档](https://leancloud.cn/docs/)


## License
Source code is release under MIT license. Read LICENSE file for more information.