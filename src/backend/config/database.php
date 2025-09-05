<?php
// AppSpot Database Connection Configuration
// This file handles database connections for the application

class DatabaseConnection {
    private $accountConnection;
    private $loginConnection;
    
    public function __construct() {
        $this->connectAccountDB();
        $this->connectLoginDB();
    }
    
    private function connectAccountDB() {
        $this->accountConnection = new mysqli('localhost', 'root', '', 'account');
        
        if ($this->accountConnection->connect_error) {
            die("Account database connection failed: " . $this->accountConnection->connect_error);
        }
        
        // Set charset to utf8
        $this->accountConnection->set_charset("utf8");
    }
    
    private function connectLoginDB() {
        $this->loginConnection = new mysqli('localhost', 'root', '', 'login');
        
        if ($this->loginConnection->connect_error) {
            die("Login database connection failed: " . $this->loginConnection->connect_error);
        }
        
        // Set charset to utf8
        $this->loginConnection->set_charset("utf8");
    }
    
    public function getAccountConnection() {
        return $this->accountConnection;
    }
    
    public function getLoginConnection() {
        return $this->loginConnection;
    }
    
    public function closeConnections() {
        if ($this->accountConnection) {
            $this->accountConnection->close();
        }
        if ($this->loginConnection) {
            $this->loginConnection->close();
        }
    }
}

// Global database instance
$db = new DatabaseConnection();
$con = $db->getAccountConnection(); // For backward compatibility
$loginCon = $db->getLoginConnection();

// Error reporting for development
if (isset($_ENV['APP_ENV']) && $_ENV['APP_ENV'] === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
}
?>
