# AppSpot Testing Guide

## Test Structure
```
tests/
├── unit/                    # Unit tests
│   ├── UserTest.php
│   ├── ApplicationTest.php
│   └── DatabaseTest.php
├── integration/             # Integration tests
│   ├── AuthFlowTest.php
│   ├── ApiTest.php
│   └── DatabaseIntegrationTest.php
└── fixtures/                # Test data
    ├── users.json
    ├── applications.json
    └── categories.json
```

## Running Tests

### Prerequisites
```bash
# Install PHPUnit
composer install --dev

# Set up test database
mysql -u root -p -e "CREATE DATABASE appspot_test;"
```

### Unit Tests
```bash
# Run all unit tests
./vendor/bin/phpunit tests/unit/

# Run specific test
./vendor/bin/phpunit tests/unit/UserTest.php

# Run with coverage
./vendor/bin/phpunit --coverage-html coverage/ tests/
```

### Integration Tests
```bash
# Run integration tests
./vendor/bin/phpunit tests/integration/

# Run with database
./vendor/bin/phpunit --testsuite=integration
```

## Test Categories

### Unit Tests
- **UserTest**: User authentication and registration
- **ApplicationTest**: App management functionality
- **DatabaseTest**: Database operations
- **ValidationTest**: Input validation

### Integration Tests
- **AuthFlowTest**: Complete authentication flow
- **ApiTest**: API endpoint testing
- **DatabaseIntegrationTest**: Database integration
- **FrontendTest**: Frontend functionality

## Test Data

### Sample Users
```json
{
  "test_user": {
    "username": "testuser",
    "email": "test@example.com",
    "password": "password123"
  }
}
```

### Sample Applications
```json
{
  "test_app": {
    "name": "Test App",
    "category": "Business",
    "description": "Test application",
    "rating": 4.5
  }
}
```

## Continuous Integration

### GitHub Actions
```yaml
name: Tests
on: [push, pull_request]
jobs:
  test:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v2
      - name: Setup PHP
        uses: shivammathur/setup-php@v2
        with:
          php-version: '7.4'
      - name: Install dependencies
        run: composer install
      - name: Run tests
        run: ./vendor/bin/phpunit
```

## Test Best Practices

### Writing Tests
- Test one thing at a time
- Use descriptive test names
- Arrange, Act, Assert pattern
- Mock external dependencies
- Test edge cases and error conditions

### Test Coverage
- Aim for 80%+ code coverage
- Focus on critical business logic
- Test all public methods
- Include error handling tests

### Performance Testing
- Test database query performance
- Monitor memory usage
- Test with large datasets
- Load testing for APIs

## Debugging Tests

### Common Issues
- Database connection problems
- Missing test data
- Environment configuration
- File permissions

### Debug Commands
```bash
# Verbose output
./vendor/bin/phpunit --verbose

# Stop on first failure
./vendor/bin/phpunit --stop-on-failure

# Debug specific test
./vendor/bin/phpunit --debug tests/unit/UserTest.php
```

## Test Maintenance
- Update tests when code changes
- Remove obsolete tests
- Refactor test code regularly
- Keep test data current
