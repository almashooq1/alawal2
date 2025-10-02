<?php

/**
 * Migration for creating assessments table
 * جدول التقييمات
 */

return [
    'up' => "
        CREATE TABLE assessments (
            id INT AUTO_INCREMENT PRIMARY KEY,
            student_id INT NOT NULL,
            assessor_id INT NOT NULL,
            assessment_type ENUM('initial', 'progress', 'final', 'periodic') NOT NULL,
            assessment_date DATE NOT NULL,
            category ENUM('physical', 'cognitive', 'social', 'emotional', 'communication', 'self_care') NOT NULL,
            score DECIMAL(5,2),
            max_score DECIMAL(5,2),
            performance_level ENUM('below_expectation', 'approaching', 'meeting', 'exceeding') NOT NULL,
            strengths TEXT,
            areas_for_improvement TEXT,
            recommendations TEXT,
            goals TEXT,
            next_assessment_date DATE,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            FOREIGN KEY (student_id) REFERENCES students(id) ON DELETE CASCADE,
            FOREIGN KEY (assessor_id) REFERENCES employees(id) ON DELETE RESTRICT
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
    ",
    'down' => "DROP TABLE IF EXISTS assessments;"
];
