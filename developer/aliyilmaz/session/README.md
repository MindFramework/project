## What is session ?
This package is used to start session and set session path.

---
### Getting settings from constructor method
By default, server settings are referenced. If the settings are sent to the project's `__construct` method, these settings take effect.

**Out-of-class use:**

code:
```php
require_once('Mind.php');
$m = new Mind([ 
    'session'=>array(
        'path'=>'./session/',
        'status'=>true
    )
]);
$m::aliyilmaz('session')->start();
```

**When using it in the class:**

code:
```php
self::$conf = [ 
    'session'=>array(
        'path'=>'./session/',
        'status'=>true
    )
];

self::aliyilmaz('session')->start();
```

---

### Define the session path
It must be run before the session initialization method, it can be used as a chain.

**Out-of-class use:**

code:
```php
require_once('Mind.php');
$m = new Mind();
$m::aliyilmaz('session')->setPath('./session/')->start();
```

**When using it in the class:**

code:
```php
self::aliyilmaz('session')->setPath('./session/')->start();
```

---

### Creating / using session parameters

**Out-of-class use:**

code:
```php
require_once('Mind.php');
$m = new Mind();
$m::aliyilmaz('session')->start();
$_SESSION['user'] = [
    'username'=>'aliyilmaz',
    'id'=>1
];
print_r($_SESSION);
```

**When using it in the class:**

code:
```php
self::aliyilmaz('session')->start();
$_SESSION['user'] = [
    'username'=>'aliyilmaz',
    'id'=>1
];
print_r($_SESSION);
```

output:
```php
Array ( [user] => Array ( [username] => aliyilmaz [id] => 1 ) )
```

### Dependencies
This package has no dependencies.

---

### License
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/session/blob/main/LICENSE) license.