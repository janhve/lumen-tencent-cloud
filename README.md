# lumen-tencent-cloud

This is a tencent cloud expansion for the laravel

## 环境需求

- PHP >= 7.0

## Installation

```bash
composer require janhve/lumen-tencent-cloud
```

## for Laravel

This service provider must be registered.

```php
// config/app.php

'providers' => [
    '...',
    Janhve\TencentCloud\TencentCloudServiceProvider::class,
];
```


## Use

```php
try {
	$cdn = TencentCloud::get('cdn');
	$cdn->RefreshObjectCaches([
		'ObjectPath' => [
			'http://www.baidu.com',
		],
		'ObjectType' => 'File'
	]);
} catch (\Exception $e) {
	print_r($e->getMessage());
}
```
