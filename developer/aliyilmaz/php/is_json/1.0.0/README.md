## What is is_json ?

It is used to check whether the `string` data shared with it is in json format, `$schema` represents the json data. If the data in question has a json syntax, `true` is returned, otherwise `false` is returned.

**Out-of-class use:**

data:
```php
$schema = json_encode(array(
    'test'=>'ali'
));
```

code:
```php
require_once('Mind.php');
$m = new Mind();
if($m::aliyilmaz('php/is_json/1.0.0')->is_json($schema)){
    echo 'This is a json data.';
} else {
    echo 'This is not a json.';
}
```

**When using it in the class:**

code:
```php
if(self::aliyilmaz('php/is_json/1.0.0')->is_json($schema)){
    echo 'This is a json data.';
} else {
    echo 'This is not a json.';
}
```

output:
```php
This is a json data.
```

---

### Dependencies
This package has no dependencies.

---

### License
Instructions and files in this directory are shared under the [GPL3](https://github.com/aliyilmaz/is_json/tree/main/1.0.0/LICENSE.md) license.