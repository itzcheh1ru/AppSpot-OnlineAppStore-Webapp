# AppSpot Database Setup Script

-- Create databases
CREATE DATABASE IF NOT EXISTS account;
CREATE DATABASE IF NOT EXISTS login;

-- Use account database
USE account;

-- Create users table
CREATE TABLE IF NOT EXISTS users (
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

-- Create applications table
CREATE TABLE IF NOT EXISTS applications (
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

-- Create categories table
CREATE TABLE IF NOT EXISTS categories (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(50) UNIQUE NOT NULL,
    description TEXT,
    icon_path VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create user_applications table
CREATE TABLE IF NOT EXISTS user_applications (
    id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT NOT NULL,
    application_id INT NOT NULL,
    installed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    FOREIGN KEY (application_id) REFERENCES applications(id) ON DELETE CASCADE
);

-- Create inquiry table for contact form
CREATE TABLE IF NOT EXISTS inquiry (
    id INT PRIMARY KEY AUTO_INCREMENT,
    message TEXT NOT NULL,
    email VARCHAR(100),
    subject VARCHAR(200),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert sample categories
INSERT IGNORE INTO categories (name, description) VALUES
('Business', 'Business and productivity applications'),
('Social', 'Social networking and communication apps'),
('Games', 'Entertainment and gaming applications'),
('Education', 'Educational and learning tools'),
('Finance', 'Financial management applications'),
('Kids', 'Applications for children'),
('Lifestyle', 'Lifestyle and personal apps'),
('Entertainment', 'Entertainment and media apps'),
('Navigation', 'Navigation and travel apps'),
('Photo & Video', 'Photo and video editing apps'),
('Shopping', 'Shopping and e-commerce apps'),
('Sports & Health', 'Sports and health applications'),
('Tools', 'Utility and productivity tools'),
('Travel', 'Travel and tourism applications');

-- Insert sample applications
INSERT IGNORE INTO applications (name, category, description, developer, rating, install_count, image_path) VALUES
('Outlook', 'Business', 'Email and calendar management', 'Microsoft', 4.5, 1000000, 'b1.png'),
('iPay Sri Lanka', 'Business', 'Mobile payment solution', 'iPay', 4.3, 500000, 'b2.png'),
('MySLT', 'Business', 'SLT mobile services', 'SLT', 4.0, 300000, 'b3.png'),
('Microsoft 365', 'Business', 'Office productivity suite', 'Microsoft', 4.7, 2000000, 'b4.png'),
('WPS Office', 'Business', 'Office suite for mobile', 'Kingsoft', 4.2, 800000, 'b5.png'),
('WhatsApp', 'Social', 'Messaging and communication', 'Meta', 4.8, 5000000, 'so1.png'),
('Facebook', 'Social', 'Social networking platform', 'Meta', 4.5, 3000000, 'so2.png'),
('Instagram', 'Social', 'Photo and video sharing', 'Meta', 4.6, 4000000, 'so3.png'),
('TikTok', 'Social', 'Short video platform', 'ByteDance', 4.4, 6000000, 'tiktok.png');

-- Use login database
USE login;

-- Create sessions table
CREATE TABLE IF NOT EXISTS sessions (
    id VARCHAR(128) PRIMARY KEY,
    user_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    expires_at TIMESTAMP NOT NULL
);

-- Create login_attempts table
CREATE TABLE IF NOT EXISTS login_attempts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    ip_address VARCHAR(45) NOT NULL,
    success BOOLEAN DEFAULT FALSE,
    attempted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
