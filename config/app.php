<?php

/**
 * Application Configuration
 * إعدادات التطبيق
 */

return [
    'name' => 'Alawal ERP System',
    'name_ar' => 'نظام الأول لإدارة مراكز التأهيل',
    'version' => '1.0.0',
    'env' => getenv('APP_ENV') ?: 'production',
    'debug' => getenv('APP_DEBUG') === 'true',
    'url' => getenv('APP_URL') ?: 'http://localhost',
    'timezone' => 'Asia/Riyadh',
    'locale' => 'ar',
    'fallback_locale' => 'en',
    
    'modules' => [
        'students' => true,
        'sessions' => true,
        'assessments' => true,
        'employees' => true,
        'financial' => true,
    ],
];
