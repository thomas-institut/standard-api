# Standard API

Standard API responses for use in Thomas-Institut projects.

This library provides a standard way to structure API responses in PHP projects, ensuring consistency across different services.

## Installation

You can install the package via Composer:

```bash
composer require thomas-institut/standard-api
```

## Usage

### Success Response

The `SuccessResponse` class represents a successful API operation.

```php
use ThomasInstitut\StandardApi\SuccessResponse;

$response = new SuccessResponse();
// $response->result will be ApiResult::Success
// $response->timeStamp will be set to current time
```

### Error Response

The `ErrorResponse` class represents a failed API operation with a message and an HTTP status code.

```php
use ThomasInstitut\StandardApi\ErrorResponse;

$response = new ErrorResponse('An error occurred', 404);
// $response->result will be ApiResult::Error
// $response->message will be 'An error occurred'
// $response->httpStatus will be 404
```

## Development

### Running Tests

To run the tests, use the following command:

```bash
composer test
```

### Static Analysis

To run PHPStan for static analysis:

```bash
composer phpstan
```

### Code Coverage

To generate a code coverage report (requires Xdebug):

```bash
composer test:coverage
```

## License

This project is licensed under the GPL-3.0-or-later License - see the [LICENSE](LICENSE) file for details.
