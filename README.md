Maths tools
===

This library includes some tools for math operations.

Number
---

Here's an example of rounding problems solved by this lib:
```php
$price = new Number('3.99');

$price->divide('1.2');
echo $price->getNumber(); // 3.33

$price->multiply('1.2');
echo $price->getNumber(); // 3.99, where most of time libs returns 4.00
```

GCD
---

This tool computes the GCD of two numbers.

```php
echo GCD::getGCD(10,5); // 5
echo GCD::getGCD(10,10); // 10
echo GCD::getGCD(20,10); // 10
echo GCD::getGCD(11,10); // 1
```