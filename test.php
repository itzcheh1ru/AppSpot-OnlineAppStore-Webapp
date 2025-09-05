<?php
// AppSpot System Test
// This file tests if the application is properly configured and runnable

echo "<h1>AppSpot System Test</h1>";

// Test 1: PHP Version
echo "<h2>1. PHP Version Check</h2>";
echo "PHP Version: " . phpversion() . "<br>";
if (version_compare(PHP_VERSION, '7.4.0') >= 0) {
    echo "✅ PHP version is compatible<br>";
} else {
    echo "❌ PHP version is too old. Required: 7.4+, Current: " . PHP_VERSION . "<br>";
}

// Test 2: Database Connection
echo "<h2>2. Database Connection Test</h2>";
try {
    require_once 'src/backend/config/database.php';
    echo "✅ Database configuration loaded<br>";
    
    // Test account database
    $accountTest = $con->query("SELECT 1");
    if ($accountTest) {
        echo "✅ Account database connection successful<br>";
    } else {
        echo "❌ Account database connection failed<br>";
    }
    
    // Test login database
    $loginTest = $loginCon->query("SELECT 1");
    if ($loginTest) {
        echo "✅ Login database connection successful<br>";
    } else {
        echo "❌ Login database connection failed<br>";
    }
    
} catch (Exception $e) {
    echo "❌ Database error: " . $e->getMessage() . "<br>";
}

// Test 3: File Structure
echo "<h2>3. File Structure Check</h2>";
$requiredDirs = [
    'src/frontend/html',
    'src/frontend/css',
    'src/frontend/js',
    'src/backend/php',
    'src/backend/config',
    'assets/images',
    'assets/logos',
    'assets/icons'
];

foreach ($requiredDirs as $dir) {
    if (is_dir($dir)) {
        echo "✅ Directory exists: $dir<br>";
    } else {
        echo "❌ Missing directory: $dir<br>";
    }
}

// Test 4: Key Files
echo "<h2>4. Key Files Check</h2>";
$requiredFiles = [
    'src/frontend/html/index.html',
    'src/backend/config/database.php',
    'src/database/sql/01_setup.sql',
    'docker-compose.yml',
    'README.md'
];

foreach ($requiredFiles as $file) {
    if (file_exists($file)) {
        echo "✅ File exists: $file<br>";
    } else {
        echo "❌ Missing file: $file<br>";
    }
}

// Test 5: Docker Support
echo "<h2>5. Docker Support Check</h2>";
if (file_exists('docker-compose.yml')) {
    echo "✅ Docker Compose file exists<br>";
    echo "✅ Ready for Docker deployment<br>";
} else {
    echo "❌ Docker Compose file missing<br>";
}

// Test 6: Web Server Test
echo "<h2>6. Web Server Test</h2>";
if (isset($_SERVER['HTTP_HOST'])) {
    echo "✅ Running on web server<br>";
    echo "Server: " . $_SERVER['HTTP_HOST'] . "<br>";
} else {
    echo "⚠️ Not running on web server (CLI mode)<br>";
}

echo "<h2>Test Complete!</h2>";
echo "<p>If all tests show ✅, your AppSpot application is ready to run!</p>";
echo "<p><a href='src/frontend/html/index.html'>Go to AppSpot Homepage</a></p>";
?>
