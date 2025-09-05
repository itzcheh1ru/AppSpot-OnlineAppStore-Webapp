# AppSpot Database Schema

## Database Overview
AppSpot uses two main databases:
- `account` - User account management
- `login` - Authentication system

## Tables

### account Database

#### users
```sql
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) UNIQUE NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    phone VARCHAR(20),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

#### applications
```sql
CREATE TABLE applications (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    category VARCHAR(50) NOT NULL,
    description TEXT,
    developer VARCHAR(100),
    version VARCHAR(20),
    file_size VARCHAR(20),
    rating DECIMAL(3,2) DEFAULT 0.00,
    install_count INT DEFAULT 0,
    image_path VARCHAR(255),
    download_link VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

#### categories
```sql
CREATE TABLE categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) UNIQUE NOT NULL,
    description TEXT,
    icon_path VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

#### user_applications
```sql
CREATE TABLE user_applications (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    application_id INT NOT NULL,
    installed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (application_id) REFERENCES applications(id) ON DELETE CASCADE
);
```

### login Database

#### sessions
```sql
CREATE TABLE sessions (
    id VARCHAR(128) PRIMARY KEY,
    user_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    expires_at TIMESTAMP NOT NULL,
    FOREIGN KEY (user_id) REFERENCES account.users(id) ON DELETE CASCADE
);
```

#### login_attempts
```sql
CREATE TABLE login_attempts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    ip_address VARCHAR(45) NOT NULL,
    success BOOLEAN DEFAULT FALSE,
    attempted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Indexes
```sql
-- Performance indexes
CREATE INDEX idx_applications_category ON applications(category);
CREATE INDEX idx_applications_rating ON applications(rating);
CREATE INDEX idx_user_applications_user_id ON user_applications(user_id);
CREATE INDEX idx_sessions_user_id ON sessions(user_id);
CREATE INDEX idx_sessions_expires_at ON sessions(expires_at);
```

## Sample Data
```sql
-- Insert sample categories
INSERT INTO categories (name, description) VALUES
('Business', 'Business and productivity applications'),
('Social', 'Social networking and communication apps'),
('Games', 'Entertainment and gaming applications'),
('Education', 'Educational and learning tools'),
('Finance', 'Financial management applications');

-- Insert sample applications
INSERT INTO applications (name, category, description, developer, rating, install_count) VALUES
('Outlook', 'Business', 'Email and calendar management', 'Microsoft', 4.5, 1000000),
('WhatsApp', 'Social', 'Messaging and communication', 'Meta', 4.8, 2000000),
('Candy Crush', 'Games', 'Puzzle game', 'King', 4.2, 1500000);
```
