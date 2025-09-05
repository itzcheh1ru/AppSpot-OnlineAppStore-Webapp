# 🚀 AppSpot - Web Application Store

<div align="center">
  <img src="assets/logos/spot.png" alt="AppSpot Logo" width="120" height="120">
  
  <h3>A modern web-based application store platform</h3>
  
  [![License: MIT](https://img.shields.io/badge/License-MIT-yellow.svg)](https://opensource.org/licenses/MIT)
  [![PHP Version](https://img.shields.io/badge/PHP-7.4+-blue.svg)](https://php.net)
  [![MySQL](https://img.shields.io/badge/MySQL-5.7+-orange.svg)](https://mysql.com)
  [![Docker](https://img.shields.io/badge/Docker-Ready-2496ED.svg)](https://docker.com)
  
  [📖 Documentation](docs/) • [🐛 Report Bug](https://github.com/itzcheh1ru/appspot/issues) • [💡 Request Feature](https://github.com/itzcheh1ru/appspot/issues)
</div>

---

## 📋 Table of Contents

- [✨ Features](#-features)
- [🛠️ Tech Stack](#️-tech-stack)
- [🚀 Quick Start](#-quick-start)
- [📁 Project Structure](#-project-structure)
- [🔧 Installation](#-installation)
- [📖 Usage](#-usage)
- [🧪 Testing](#-testing)
- [📚 Documentation](#-documentation)
- [🤝 Contributing](#-contributing)
- [📄 License](#-license)
- [📞 Contact](#-contact)

---

## ✨ Features

- 🔐 **User Authentication** - Secure registration and login system
- 📱 **App Discovery** - Browse applications by categories
- 🔍 **Smart Search** - Find apps with advanced search functionality
- ⭐ **Rating System** - User reviews and ratings
- 📞 **Contact Support** - Built-in contact form and support system
- 📱 **Responsive Design** - Works on desktop, tablet, and mobile
- 🐳 **Docker Support** - Easy deployment with Docker
- 🔒 **Security** - Input validation and SQL injection prevention

### 🎯 Categories
- Business & Productivity
- Social Networking
- Games & Entertainment
- Education & Learning
- Finance & Banking
- Health & Fitness
- And many more...

---

## 🛠️ Tech Stack

### Frontend
- **HTML5** - Semantic markup
- **CSS3** - Modern styling with responsive design
- **JavaScript** - Interactive functionality

### Backend
- **PHP 7.4+** - Server-side logic
- **MySQL 5.7+** - Database management
- **Apache/Nginx** - Web server

### DevOps
- **Docker** - Containerization
- **Docker Compose** - Multi-container orchestration

---

## 🚀 Quick Start

### Prerequisites
- Docker and Docker Compose
- OR XAMPP/WAMP/LAMP stack
- Modern web browser

### 🐳 Docker (Recommended)

```bash
# Clone the repository
git clone https://github.com/itzcheh1ru/appspot.git
cd appspot

# Start the application
docker-compose up -d

# Access the application
open http://localhost:8080
```

### 🖥️ XAMPP/WAMP

```bash
# Copy project to web server directory
cp -r appspot/ C:/xampp/htdocs/

# Import database schema
# Open phpMyAdmin and import: src/database/sql/01_setup.sql

# Access the application
open http://localhost/appspot/src/frontend/html/
```

### 🧪 Test Installation

Visit `test.php` to verify everything is working correctly.

---

## 📁 Project Structure

```
AppSpot/
├── 📁 src/                          # Source code
│   ├── frontend/                    # Frontend components
│   │   ├── html/                    # HTML templates
│   │   ├── css/                     # Stylesheets
│   │   ├── js/                      # JavaScript files
│   │   └── images/                  # Frontend images
│   ├── backend/                     # Backend components
│   │   ├── php/                     # PHP server-side code
│   │   └── config/                  # Backend configuration
│   └── database/                    # Database components
│       ├── sql/                     # SQL scripts
│       └── schema/                  # Database schema files
├── 📁 assets/                       # Static assets
│   ├── images/                      # Application images
│   ├── icons/                       # Icon files
│   └── logos/                       # Logo files
├── 📁 docs/                         # Documentation
│   ├── api/                         # API documentation
│   ├── user/                        # User documentation
│   └── developer/                   # Developer documentation
├── 📁 tests/                        # Test files
│   ├── unit/                        # Unit tests
│   └── integration/                 # Integration tests
├── 📁 config/                       # Configuration files
├── 📁 deployment/                   # Deployment scripts
├── 📁 scripts/                      # Utility scripts
├── 🐳 Dockerfile                    # Docker configuration
├── 🐳 docker-compose.yml            # Multi-container setup
├── 📄 README.md                     # This file
├── 📄 QUICKSTART.md                 # Quick start guide
├── 📄 CHANGELOG.md                  # Version history
├── 📄 CONTRIBUTING.md               # Contribution guidelines
├── 📄 SECURITY.md                   # Security policy
└── 📄 LICENSE                       # MIT License
```

---

## 🔧 Installation

### Detailed Setup Instructions

1. **Clone Repository**
   ```bash
   git clone https://github.com/itzcheh1ru/appspot.git
   cd appspot
   ```

2. **Environment Setup**
   ```bash
   # Copy environment template
   cp .env.example .env
   
   # Edit configuration
   nano .env
   ```

3. **Database Setup**
   ```bash
   # Import database schema
   mysql -u root -p < src/database/sql/01_setup.sql
   ```

4. **Start Application**
   ```bash
   # Using Docker
   docker-compose up -d
   
   # Or using XAMPP
   # Start Apache and MySQL services
   ```

---

## 📖 Usage

### For Users
1. **Browse Apps** - Visit the homepage to see featured applications
2. **Search** - Use the search bar to find specific apps
3. **Categories** - Browse apps by category
4. **Register** - Create an account to install apps
5. **Contact** - Use the contact form for support

### For Developers
1. **API Access** - Use the REST API for app management
2. **Database** - Direct database access for advanced features
3. **Customization** - Modify themes and layouts
4. **Integration** - Add new app categories and features

---

## 🧪 Testing

### Run Tests
```bash
# System test
php test.php

# Unit tests (if PHPUnit is installed)
./vendor/bin/phpunit tests/unit/

# Integration tests
./vendor/bin/phpunit tests/integration/
```

### Test Coverage
- ✅ Database connectivity
- ✅ User authentication
- ✅ App browsing functionality
- ✅ Search functionality
- ✅ Contact form submission
- ✅ Responsive design

---

## 📚 Documentation

- 📖 [User Manual](docs/user/User_Manual.md) - Complete user guide
- 🔧 [Developer Guide](docs/developer/Developer_Guide.md) - Development setup
- 🌐 [API Documentation](docs/api/API_Documentation.md) - API reference
- 🚀 [Quick Start Guide](QUICKSTART.md) - Get started quickly
- 🔒 [Security Policy](SECURITY.md) - Security guidelines
- 🤝 [Contributing Guide](CONTRIBUTING.md) - How to contribute

---

## 🤝 Contributing

We welcome contributions! Please see our [Contributing Guidelines](CONTRIBUTING.md) for details.

### How to Contribute
1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

### Development Setup
```bash
# Fork and clone
git clone https://github.com/yourusername/appspot.git
cd appspot

# Install dependencies
composer install
npm install

# Start development environment
docker-compose up -d
```

---

## 📄 License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## 📞 Contact

- **Project Maintainer**: [@itzcheh1ru](https://github.com/itzcheh1ru)
- **Email**: itzcheh1ru@gmail.com
- **Project Link**: [https://github.com/itzcheh1ru/appspot](https://github.com/itzcheh1ru/appspot)
- **Issues**: [https://github.com/itzcheh1ru/appspot/issues](https://github.com/itzcheh1ru/appspot/issues)

---

## 🙏 Acknowledgments

- Community contributors
- Open source projects that inspired this work
- All users who provided feedback and testing

---

<div align="center">
  <p>Made with ❤️ by <a href="https://github.com/itzcheh1ru">itzcheh1ru</a></p>
  <p>⭐ Star this repository if you found it helpful!</p>
</div>