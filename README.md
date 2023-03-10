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

## Understanding UUID Versions
There are several versions of UUIDs, each with its own structure and purpose.

* ### UUID Version 1 (Time-Based)
    UUID Version 1 uses the current timestamp and the MAC address of the generating device to create a UUID. This results in a UUID that is unique, but not completely random, as the same MAC address will always generate the same UUID for a given timestamp.

* ### UUID Version 2 (DCE Security)
    UUID Version 2 was created for use in the Distributed Computing Environment (DCE) security protocol. It is similar to UUID Version 1, but includes a domain identifier to allow for multiple independent name spaces. This version is not commonly used.

* ### UUID Version 3 (Name-Based, MD5)
    UUID Version 3 uses a hash of a namespace identifier and a name to generate a UUID. The hash function used is MD5, which is a widely-used cryptographic hash function. This version is useful for creating UUIDs based on human-readable names, while still ensuring that they are unique.

* ### UUID Version 4 (Random)
    UUID Version 4 is generated purely randomly and is the most commonly used version. This version provides the greatest degree of randomness and is therefore the most suitable for most use cases.

* ### UUID Version 5 (Name-Based, SHA-1)
    UUID Version 5 is similar to UUID Version 3, but uses the SHA-1 hash function instead of MD5. SHA-1 is a more secure hash function than MD5, making this version suitable for use in security-sensitive applications.

### Conclusion
Each of the different UUID versions has its own strengths and weaknesses, and the best version to use will depend on the specific requirements of the application. When selecting a UUID version, it is important to consider the level of uniqueness and randomness required, as well as the security implications of the chosen hash function.

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

## Disclaimer

The software and its copyright are owned solely by the author. Any commercial use of the software requires the author's permission. The author and the copyright holders are not responsible for any errors or problems that may have been overlooked in contributions, reviews, or any other form of modification to the software.

The author and the copyright holders shall not be held responsible for any damages arising from the use of this software. The software is provided "as is", without warranty of any kind, express or implied.

In no event shall the author or the copyright holders be liable for any claim, damages or other liability, whether in an action of contract, tort or otherwise, arising from, out of or in connection with the software or the use or other dealings in the software.

This project is intended for educational and informational purposes only, and should not be considered as professional advice or recommendations. The author encourages you to seek appropriate professional guidance before taking any action based on the information and contents provided in this project.

###

By using this software, you agree to the above terms and conditions. If you do not agree with these terms, you should not use this software.

## Support
If you encounter any issues while using this class, or if you have any questions or feedback, please feel free to open an issue on the repository's issue tracker. I will do my best to assist you as soon as possible.

###

Note that while I am happy to help and provide support, I cannot guarantee immediate resolution of all issues. If you need more immediate support, you may want to consider reaching out to a professional services provider for assistance.

## Authors

Ramazan Çetinkaya

- [github/ramazancetinkaya](https://github.com/ramazancetinkaya)

## Copyright and License

Copyright © 2023, [Ramazan Çetinkaya](https://github.com/ramazancetinkaya).
