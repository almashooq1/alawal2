<?php

/**
 * Migration for creating sessions table
 * جدول الجلسات
 */

return [
    'up' => "
        CREATE TABLE sessions (
            id INT AUTO_INCREMENT PRIMARY KEY,
            student_id INT NOT NULL,
            therapist_id INT NOT NULL,
            session_type ENUM('physical', 'occupational', 'speech', 'behavioral', 'educational') NOT NULL,
            session_date DATE NOT NULL,
            start_time TIME NOT NULL,
            end_time TIME NOT NULL,
            duration_minutes INT NOT NULL,
            status ENUM('scheduled', 'completed', 'cancelled', 'no_show') DEFAULT 'scheduled',
            notes TEXT,
            progress_notes TEXT,
            attendance ENUM('present', 'absent', 'late') DEFAULT 'present',
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE,
            FOREIGN KEY (therapist_id) REFERENCES employees(id) ON DELETE RESTRICT
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ",
    'down' => "DROP TABLE IF EXISTS sessions;"
];
