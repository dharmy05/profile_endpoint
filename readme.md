# Cat Fact Endpoint

This project provides a simple PHP endpoint that returns a random cat fact using the [catfact.ninja](https://catfact.ninja/fact) API.

## Files
- `catFactService.php`: Contains the function to fetch a cat fact from the API.
- `index.php`: Main entry point for the endpoint (see below for usage).
- `composer.json`: (Optional) For dependency management if you expand the project.

## Requirements
- PHP 7.2 or higher
- XAMPP, WAMP, or any web server with PHP support
- Internet connection (to fetch facts from the API)

## Setup
1. Place the project files in your web server's root directory (e.g., `htdocs` for XAMPP).
2. Start Apache (or your web server) and ensure PHP is enabled.
3. Make sure `allow_url_fopen` is enabled in your `php.ini` (for `file_get_contents`).

## Usage
- Access `index.php` in your browser or via HTTP request:
  - Example: `http://localhost/profile-endpoint/index.php`
- The endpoint should return a random cat fact as plain text or JSON (depending on your implementation).

## Troubleshooting
- If you see "Could not fetch a cat fact right now.":
  - Check your internet connection.
  - Make sure `allow_url_fopen` is enabled in `php.ini`.
  - Try using the cURL-based function (see comments in `catFactService.php`).
- Check PHP and Apache error logs for more details.

## Customization
- You can modify `catFactService.php` to use cURL for better error handling.
- Wrap the output in JSON for API clients:
  ```php
  header('Content-Type: application/json');
  echo json_encode(['fact' => getCatFact()]);
  ```

## License
This project is open source and free to use.
