# AppSpot Configuration

## Database Configuration
```php
<?php
// Database connection settings
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME_ACCOUNT', 'account');
define('DB_NAME_LOGIN', 'login');

// Application settings
define('APP_NAME', 'AppSpot');
define('APP_VERSION', '1.0.0');
define('APP_URL', 'http://localhost/appspot');

// Security settings
define('SESSION_TIMEOUT', 3600); // 1 hour
define('MAX_LOGIN_ATTEMPTS', 5);
?>
