# AppSpot Quick Start Guide

## Prerequisites
- Docker and Docker Compose installed
- OR XAMPP/WAMP/LAMP stack
- Modern web browser

## Option 1: Docker (Recommended)

### Quick Start with Docker
```bash
# Clone the repository
git clone https://github.com/itzcheh1ru/appspot.git
cd appspot

# Start the application
docker-compose up -d

# Access the application
# Open browser and go to: http://localhost:8080
```

### What Docker Does
- Sets up PHP 7.4 with Apache
- Creates MySQL database
- Imports database schema automatically
- Maps port 8080 for web access

## Option 2: XAMPP/WAMP/LAMP

### Setup Steps
1. **Install XAMPP**
   - Download from https://www.apachefriends.org/
   - Install and start Apache + MySQL services

2. **Setup Project**
   ```bash
   # Copy project to htdocs folder
   cp -r appspot/ C:/xampp/htdocs/
   ```

3. **Database Setup**
   - Open phpMyAdmin: http://localhost/phpmyadmin
   - Import database: `src/database/sql/01_setup.sql`
   - Or run the SQL commands manually

4. **Access Application**
   - Open browser: http://localhost/appspot/src/frontend/html/

## Configuration

### Database Settings
Update database credentials in:
- `src/backend/config/database.php`
- `src/backend/php/connect.php`

### Environment Variables
Copy `.env.example` to `.env` and update:
```env
DB_HOST=localhost
DB_USER=root
DB_PASSWORD=
DB_NAME_ACCOUNT=account
DB_NAME_LOGIN=login
```

## Testing the Application

### 1. Check Database Connection
- Visit: http://localhost:8080/src/backend/php/connect.php
- Should show "Database connected successfully"

### 2. Test Frontend
- Visit: http://localhost:8080/src/frontend/html/index.html
- Should load the AppSpot homepage

### 3. Test Features
- User registration/login
- App browsing by categories
- Search functionality
- Contact form

## Troubleshooting

### Common Issues

#### Database Connection Error
```bash
# Check if MySQL is running
docker-compose ps

# Restart database
docker-compose restart db
```

#### Port Already in Use
```bash
# Change port in docker-compose.yml
ports:
  - "8081:80"  # Use port 8081 instead
```

#### Permission Issues
```bash
# Fix file permissions
chmod -R 755 src/
chmod -R 777 assets/
```

### Logs
```bash
# View application logs
docker-compose logs web

# View database logs
docker-compose logs db
```

## Development

### Making Changes
1. Edit files in `src/` directory
2. Changes are automatically reflected (Docker volume mount)
3. Refresh browser to see changes

### Database Changes
1. Update SQL files in `src/database/sql/`
2. Restart database: `docker-compose restart db`

## Production Deployment

See `deployment/deployment_guide.md` for production setup instructions.

## Support

- **Issues**: https://github.com/itzcheh1ru/appspot/issues
- **Email**: itzcheh1ru@gmail.com
- **Documentation**: See `docs/` folder
