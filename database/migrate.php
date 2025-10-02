<?php

/**
 * Database Migration Runner
 * تشغيل ترحيلات قاعدة البيانات
 */

// Load configuration
$dbConfig = require __DIR__ . '/../config/database.php';
$connection = $dbConfig['connections'][$dbConfig['default']];

// Connect to database
try {
    $dsn = sprintf(
        "mysql:host=%s;port=%s;charset=%s",
        $connection['host'],
        $connection['port'],
        $connection['charset']
    );
    
    $pdo = new PDO(
        $dsn,
        $connection['username'],
        $connection['password']
    );
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Create database if not exists
    $pdo->exec("CREATE DATABASE IF NOT EXISTS {$connection['database']} CHARACTER SET {$connection['charset']} COLLATE {$connection['collation']}");
    $pdo->exec("USE {$connection['database']}");
    
    echo "Connected to database successfully.\n";
    
    // Run migrations
    $migrationPath = __DIR__ . '/migrations';
    $migrations = glob($migrationPath . '/*.php');
    sort($migrations);
    
    foreach ($migrations as $migration) {
        $migrationName = basename($migration);
        echo "Running migration: $migrationName\n";
        
        $migrationData = require $migration;
        $pdo->exec($migrationData['up']);
        
        echo "✓ Migration completed: $migrationName\n";
    }
    
    echo "\nAll migrations completed successfully!\n";
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage() . "\n";
    exit(1);
}
