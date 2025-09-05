# AppSpot Contributing Guidelines

Thank you for your interest in contributing to AppSpot! This document provides guidelines for contributing to the project.

## Code of Conduct

This project follows a code of conduct that we expect all contributors to follow. Please be respectful and constructive in all interactions.

## How to Contribute

### Reporting Bugs
1. Check if the bug has already been reported in the issues
2. Use the bug report template
3. Provide detailed steps to reproduce
4. Include system information (OS, browser, PHP version)

### Suggesting Features
1. Check if the feature has already been suggested
2. Use the feature request template
3. Provide a clear description and use case
4. Consider the impact on existing functionality

### Submitting Code Changes

#### Getting Started
1. Fork the repository
2. Clone your fork locally
3. Create a new branch for your feature/fix
4. Make your changes
5. Test your changes thoroughly
6. Submit a pull request

#### Development Setup
```bash
# Clone the repository
git clone https://github.com/itzcheh1ru/appspot.git
cd appspot

# Set up development environment
docker-compose up -d

# Install dependencies (if any)
composer install
npm install
```

#### Coding Standards

**PHP:**
- Follow PSR-12 coding standards
- Use meaningful variable and function names
- Add comments for complex logic
- Implement proper error handling

**HTML:**
- Use semantic HTML5 elements
- Include proper meta tags
- Ensure accessibility compliance
- Validate HTML markup

**CSS:**
- Use BEM methodology
- Implement responsive design
- Use CSS Grid/Flexbox for layouts
- Follow mobile-first approach

**JavaScript:**
- Use modern ES6+ syntax
- Implement proper error handling
- Add JSDoc comments for functions
- Follow consistent naming conventions

#### Testing
- Write unit tests for new functionality
- Test on multiple browsers and devices
- Ensure responsive design works properly
- Test database operations thoroughly

#### Commit Messages
Use clear, descriptive commit messages:
```
feat: add user authentication system
fix: resolve database connection issue
docs: update API documentation
style: improve mobile responsiveness
refactor: optimize database queries
test: add unit tests for user module
```

#### Pull Request Process
1. Ensure your code follows the project's coding standards
2. Add tests for new functionality
3. Update documentation if needed
4. Ensure all tests pass
5. Request review from maintainers
6. Address any feedback promptly

## Development Workflow

### Branch Naming
- `feature/description` - New features
- `bugfix/description` - Bug fixes
- `hotfix/description` - Critical fixes
- `docs/description` - Documentation updates

### Issue Labels
- `bug` - Something isn't working
- `enhancement` - New feature or request
- `documentation` - Documentation improvements
- `good first issue` - Good for newcomers
- `help wanted` - Extra attention needed

## Getting Help

- Check existing issues and discussions
- Join our community discussions
- Contact maintainers for guidance

## Recognition

Contributors will be recognized in:
- CONTRIBUTORS.md file
- Release notes
- Project documentation

Thank you for contributing to AppSpot! 🚀
