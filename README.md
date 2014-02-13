snapshot-l4
===========

Laravel 4 facade helper and IoC container registration to bring snapshot into the application

Add to `composer.json`

```js
		"definitely246/snapshot-l4": "dev-master",
```

Add to your providers in `app/config/app.php`

```php
		'Definitely246\Snapshot\SnapshotServiceProvider',

```		

Add to your aliases in `app/config/app.php`

```php
  'Snapshot'		  => 'Definitely246\SnapshotL4\SnapshotFacade',
```

To use

```php
  $pdfFile = Snapshot::pdf($url, $filename, $paperSize = '8.5in*11in', $zoom = '');
```
