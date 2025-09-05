# AppSpot Developer Guide

## Development Environment Setup

### Prerequisites
- XAMPP 3.3.0 or higher
- PHP 7.4+
- MySQL 5.7+
- Git
- Code editor (VS Code recommended)

### Installation Steps
1. **Clone Repository**
   ```bash
   git clone https://github.com/itzcheh1ru/appspot.git
   cd appspot
   ```

2. **Database Setup**
   ```sql
   CREATE DATABASE account;
   CREATE DATABASE login;
   ```

3. **Configuration**
   - Update `src/backend/config/connect.php`
   - Update `src/backend/config/config.php`
   - Set correct database credentials

4. **Start Services**
   - Start Apache and MySQL in XAMPP
   - Access via `http://localhost/appspot`

## Project Structure Details

### Frontend (`src/frontend/`)
- **HTML**: All page templates
- **CSS**: Stylesheets organized by component
- **JS**: Client-side functionality
- **Images**: Frontend-specific images

### Backend (`src/backend/`)
- **PHP**: Server-side logic
- **Config**: Database and application configuration

### Database (`src/database/`)
- **SQL**: Database scripts and migrations
- **Schema**: Database structure documentation

## Coding Standards

### PHP Standards
- Follow PSR-12 coding standards
- Use meaningful variable names
- Comment complex logic
- Implement error handling

### HTML Standards
- Use semantic HTML5 elements
- Include proper meta tags
- Ensure accessibility compliance

### CSS Standards
- Use BEM methodology
- Implement responsive design
- Use CSS Grid/Flexbox for layouts
- Follow mobile-first approach

## Database Schema

### Users Table
```sql
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Applications Table
```sql
CREATE TABLE applications (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    category VARCHAR(50) NOT NULL,
    description TEXT,
    rating DECIMAL(3,2) DEFAULT 0.00,
    install_count INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Security Best Practices
- Use prepared statements for all database queries
- Validate and sanitize all user inputs
- Implement CSRF protection
- Use secure session management
- Hash passwords with PHP's `password_hash()`

## Testing
- Unit tests in `tests/unit/`
- Integration tests in `tests/integration/`
- Use PHPUnit for PHP testing
- Test user flows and edge cases

## Deployment
1. **Production Server Setup**
   - Configure web server (Apache/Nginx)
   - Set up SSL certificate
   - Configure database

2. **Environment Variables**
   - Set production database credentials
   - Configure error reporting
   - Set up logging

3. **Performance Optimization**
   - Enable caching
   - Optimize images
   - Minify CSS/JS
   - Use CDN for static assets

## Contributing Guidelines
1. Fork the repository
2. Create a feature branch
3. Write tests for new features
4. Follow coding standards
5. Submit pull request with description

## Common Issues & Solutions

### Database Connection Issues
- Check MySQL service is running
- Verify credentials in config files
- Ensure database exists

### File Permission Issues
- Set proper permissions for upload directories
- Ensure web server can write to logs

### Performance Issues
- Enable PHP OPcache
- Optimize database queries
- Use proper indexing
