<?php

/**
 * Main Application Entry Point
 * نقطة دخول التطبيق الرئيسية
 */

require_once __DIR__ . '/../vendor/autoload.php';

// Load configuration
$config = require_once __DIR__ . '/../config/app.php';

// Simple routing
$requestUri = $_SERVER['REQUEST_URI'];
$requestMethod = $_SERVER['REQUEST_METHOD'];

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization');

if ($requestMethod === 'OPTIONS') {
    http_response_code(200);
    exit();
}

// Basic API response
echo json_encode([
    'success' => true,
    'message' => 'Welcome to Alawal ERP System API',
    'message_ar' => 'مرحباً بك في نظام الأول لإدارة مراكز التأهيل',
    'version' => $config['version'],
    'endpoints' => [
        'students' => '/api/students',
        'sessions' => '/api/sessions',
        'assessments' => '/api/assessments',
        'employees' => '/api/employees',
        'financial' => '/api/financial/transactions'
    ]
]);
