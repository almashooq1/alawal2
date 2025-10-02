<?php

/**
 * Migration for creating employees table
 * جدول الموظفين (الموارد البشرية)
 */

return [
    'up' => "
        CREATE TABLE employees (
            id INT AUTO_INCREMENT PRIMARY KEY,
            employee_number VARCHAR(50) UNIQUE NOT NULL,
            first_name VARCHAR(100) NOT NULL,
            last_name VARCHAR(100) NOT NULL,
            email VARCHAR(100) UNIQUE NOT NULL,
            phone VARCHAR(20),
            date_of_birth DATE,
            hire_date DATE NOT NULL,
            position VARCHAR(100) NOT NULL,
            department ENUM('therapy', 'education', 'administration', 'finance', 'support') NOT NULL,
            specialization VARCHAR(100),
            qualification VARCHAR(200),
            employment_status ENUM('active', 'on_leave', 'terminated', 'resigned') DEFAULT 'active',
            salary DECIMAL(10,2),
            emergency_contact_name VARCHAR(200),
            emergency_contact_phone VARCHAR(20),
            address TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ",
    'down' => "DROP TABLE IF EXISTS employees;"
];
