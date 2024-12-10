Several approaches can be taken to fix this issue:

**Approach 1:  Explicit Key Check**

This approach checks for the existence of the key before assigning, avoiding overwriting:

```php
<?php
$keys = [0, 1, 2];
$values = ['a', 'b', 'c'];

$someArray = ['0' => 'z']; //Simulate existing data

$newArray = array_combine($keys, $values);

if (isset($someArray[0])) {
    $someArray[0] = $newArray[0];
} else {
    $someArray[0] = $newArray[0];
}
$someArray[1] = $newArray[1];
$someArray[2] = $newArray[2];

print_r($someArray);
?>
```

**Approach 2: Using a different function**

If you're comfortable with it, consider a loop-based approach for greater control:

```php
<?php
$keys = [0, 1, 2];
$values = ['a', 'b', 'c'];

$someArray = ['0' => 'z'];

foreach ($keys as $key => $value){
    $someArray[$keys[$key]] = $values[$key];
}

print_r($someArray);
?>
```

Choose the approach that best suits your coding style and context.  The core takeaway is to be mindful of how `array_combine()` and PHP handle numeric array keys, especially when a key is 0.