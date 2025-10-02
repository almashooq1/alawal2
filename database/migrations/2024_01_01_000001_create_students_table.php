<?php

/**
 * Migration for creating students table
 * جدول الطلاب
 */

return [
    'up' => "
        CREATE TABLE students (
            id INT AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(100) NOT NULL,
            last_name VARCHAR(100) NOT NULL,
            date_of_birth DATE NOT NULL,
            gender ENUM('male', 'female') NOT NULL,
            disability_type VARCHAR(100),
            guardian_name VARCHAR(200),
            guardian_phone VARCHAR(20),
            guardian_email VARCHAR(100),
            address TEXT,
            enrollment_date DATE NOT NULL,
            status ENUM('active', 'inactive', 'graduated') DEFAULT 'active',
            medical_notes TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ",
    'down' => "DROP TABLE IF EXISTS students;"
];
