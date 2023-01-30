# PHP-UUIDGenerator

UUID v4 (Universally Unique Identifier version 4) is a type of identifier that is generated randomly, with the intent of creating a unique identifier that can be used across different systems and environments. It is commonly used to identify resources, such as database records or filenames, in a unique and unambiguous manner. The UUID v4 specification defines a format for the identifier that includes a series of hexadecimal numbers separated by hyphens. The use of UUIDs can help prevent naming conflicts and provide a way to identify resources consistently and reliably even in distributed systems.

## Here's an example of how you might use this class:

The class has a single static method **generate()** which returns a new UUID v4 string. It uses the **sprintf** function to format a string according to the UUID v4 format, and the **random_int** function to generate random integers.

```php
$uuid = UUIDGenerator::generate();
echo $uuid;
```

This creates an instance of the class and calls the **generate** method and assigns the output to a variable $uuid and prints it.
This is a simple class for generating UUID v4, it's cryptographically secure and suitable for most cases, in case you need to use a more secure method you can use more advanced libraries like ramsey/uuid

### Authors

**Ramazan Çetinkaya**

- [github/ramazancetinkaya](https://github.com/ramazancetinkaya)

### License

Copyright © 2023, [Ramazan Çetinkaya](https://github.com/ramazancetinkaya).
