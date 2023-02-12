<h1 align="center">ramazancetinkaya/uuid</h1>

<p align="center">
    <strong>A simple and reliable UUID class for PHP, with a focus on quality, readability, and standards compliance.</strong>
</p>

###

<p align="center">
    :star: Star us on GitHub — it motivates us a lot!
</p>

## What is a UUID?
A universally unique identifier (UUID) is a string of characters that is used to identify a resource or record in a database or software system. UUIDs are typically generated using a combination of the current time, the system's MAC address, and random numbers.

###

UUIDs are useful because they are unique across all systems and all time, which means they can be used to identify resources or records in a way that is independent of the database or software system they are stored in. This makes UUIDs useful for things like database primary keys, unique URLs, or as part of a larger identifier scheme.

## Universally Unique Identifier version 4

UUID v4 (Universally Unique Identifier version 4) is a type of identifier that is generated randomly, with the intent of creating a unique identifier that can be used across different systems and environments. It is commonly used to identify resources, such as database records or filenames, in a unique and unambiguous manner. The UUID v4 specification defines a format for the identifier that includes a series of hexadecimal numbers separated by hyphens. The use of UUIDs can help prevent naming conflicts and provide a way to identify resources consistently and reliably even in distributed systems.

## Features

- Generates version 4 (random) UUIDs.
- Validates UUID strings to ensure they are in the correct format.
- Throws an exception for invalid UUID strings.
- Simple and straightforward class structure.

## Usage

```php
$uuid = new UUID();
echo $uuid; // Outputs a new version 4 UUID

$uuid = new UUID('550e8400-e29b-41d4-a716-446655440000');
echo $uuid; // Outputs the given UUID string

UUID::validate('550e8400-e29b-41d4-a716-446655440000'); // Returns without error
UUID::validate('invalid-uuid-format'); // Throws an InvalidArgumentException
```

## Installation

The preferred method of installation is via [Composer](https://getcomposer.org/).

Run the following command to install the package:
```bash
composer require ramazancetinkaya/uuid
```

## Contributing
If you would like to contribute to the development of this class, I would be more than happy to consider your contributions!

###

To contribute, simply fork the repository, make your changes, and submit a pull request back to the main repository. I will review your changes and, if they meet the project's standards and requirements, I will merge them into the main codebase.

###

Before submitting your changes, please make sure to test your code thoroughly and ensure that it is properly documented. Also, please make sure to follow the project's coding standards and conventions.

###

Thank you for your interest in contributing to this project!

## Code of Conduct
We are committed to creating a friendly and inclusive environment for all contributors and users of this repository. To help achieve this goal, we have adopted a Code of Conduct that outlines our expectations for behavior as well as the consequences for unacceptable behavior.

###

We strongly encourage all contributors and users to read and follow the Code of Conduct, which can be found in the CODE_OF_CONDUCT.md file. By participating in this community, you agree to abide by its rules and guidelines.

###

If you encounter a situation that you feel is not aligned with our Code of Conduct, please report it by contacting the repository owner. We will work to address the situation promptly and respectfully.

###

Together, let's create a positive and welcoming community!

## Support
If you encounter any issues while using this class, or if you have any questions or feedback, please feel free to open an issue on the repository's issue tracker. I will do my best to assist you as soon as possible.

###

Note that while I am happy to help and provide support, I cannot guarantee immediate resolution of all issues. If you need more immediate support, you may want to consider reaching out to a professional services provider for assistance.

## Authors

Ramazan Çetinkaya

- [github/ramazancetinkaya](https://github.com/ramazancetinkaya)

## Copyright and License

Copyright © 2023, [Ramazan Çetinkaya](https://github.com/ramazancetinkaya).
