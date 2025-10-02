<?php

/**
 * Migration for creating financial_transactions table
 * جدول المعاملات المالية
 */

return [
    'up' => "
        CREATE TABLE financial_transactions (
            id INT AUTO_INCREMENT PRIMARY KEY,
            transaction_number VARCHAR(50) UNIQUE NOT NULL,
            transaction_type ENUM('income', 'expense') NOT NULL,
            category VARCHAR(100) NOT NULL,
            amount DECIMAL(10,2) NOT NULL,
            transaction_date DATE NOT NULL,
            payment_method ENUM('cash', 'bank_transfer', 'credit_card', 'check') NOT NULL,
            reference_type ENUM('student', 'employee', 'vendor', 'other') NOT NULL,
            reference_id INT,
            description TEXT,
            status ENUM('pending', 'completed', 'cancelled') DEFAULT 'pending',
            created_by INT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            FOREIGN KEY (created_by) REFERENCES employees(id) ON DELETE SET NULL
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ",
    'down' => "DROP TABLE IF EXISTS financial_transactions;"
];
