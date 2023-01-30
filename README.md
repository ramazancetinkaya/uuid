# PHP-UUIDGenerator
An example of a simple UUID v4 generator class using PHP.

The class has a single static method **generate()** which returns a new UUID v4 string. It uses the **sprintf** function to format a string according to the UUID v4 format, and the **random_int** function to generate random integers.

## Here's an example of how you might use this class:
```php
$uuid = UUIDGenerator::generate();
echo $uuid;
```

This creates an instance of the class and calls the **generate** method and assigns the output to a variable $uuid and prints it.
This is a simple class for generating UUID v4, it's cryptographically secure and suitable for most cases, in case you need to use a more secure method you can use more advanced libraries like ramsey/uuid
