## What is addLayer ?

It serves to add the specified layers to the place where they are run. It takes two parameters, and both can be specified as `string` and `array` type. It is also possible to specify the layers you want to run first as the second parameter. 

One or more methods can be defined for each layer. Layers have the ability to communicate with each other. They can also use `$conf` or `self::$conf` sent to the `__construct` method.

Using this package you can use files, classes or methods and if you want you can call external function files and meet your various needs with all these capabilities.

**Out-of-class use:**

code:
```php
require_once('Mind.php');
$m = new Mind();
$m::aliyilmaz('addLayer')->addLayer('app/views/index');
// $m::aliyilmaz('addLayer')->addLayer('app/views/index', 'app/model/index');
// $m::aliyilmaz('addLayer')->addLayer('app/controller/user:delete@message');
// $m::aliyilmaz('addLayer')->addLayer('app/views/admin', 'app/middleware/auth:admin');
// $m::aliyilmaz('addLayer')->addLayer([
//     'app/views/index:header', 
//     'app/views/index:index'
//     'app/views/index:footer'
//     ],
//     [
//     'app/variables/index'
//     ]
// );
```

**When using it in the class:**

code:
```php
self::aliyilmaz('addLayer')->addLayer('app/views/index');
// self::aliyilmaz('addLayer')->addLayer('app/views/index', 'app/model/index');
// self::aliyilmaz('addLayer')->addLayer('app/controller/user:delete@message');
// self::aliyilmaz('addLayer')->addLayer('app/views/admin', 'app/middleware/auth:admin');
// self::aliyilmaz('addLayer')->addLayer([
//     'app/views/index:header', 
//     'app/views/index:index'
//     'app/views/index:footer'
//     ],
//     [
//     'app/variables/index'
//     ]
// );
```

output:
```php
The index layer with the manually created model is added.
// First, the method that deletes the user is executed. Then the message method is executed.
// As a result of the use of the interface layer and the middleware layer together, only the page viewed by the admin.
// Before the header, index and footer layers are loaded, the layer where the variables to be used in these parts are defined is loaded.
```

---

### Dependencies
1. [policyMaker 1.0.0](https://github.com/aliyilmaz/policyMaker)

---

### License
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/addLayer/blob/main/LICENSE) license.
