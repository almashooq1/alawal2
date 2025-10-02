<?php

/**
 * API Routes for the ERP System
 * مسارات الواجهة البرمجية لنظام ERP
 */

return [
    // Student Routes - مسارات الطلاب
    'students' => [
        'GET /api/students' => 'StudentController@index',
        'GET /api/students/:id' => 'StudentController@show',
        'POST /api/students' => 'StudentController@store',
        'PUT /api/students/:id' => 'StudentController@update',
        'DELETE /api/students/:id' => 'StudentController@delete',
        'GET /api/students/status/:status' => 'StudentController@getByStatus',
    ],

    // Session Routes - مسارات الجلسات
    'sessions' => [
        'GET /api/sessions' => 'SessionController@index',
        'GET /api/sessions/student/:studentId' => 'SessionController@getByStudent',
        'GET /api/sessions/therapist/:therapistId' => 'SessionController@getByTherapist',
        'POST /api/sessions' => 'SessionController@store',
        'PUT /api/sessions/:id/status' => 'SessionController@updateStatus',
        'GET /api/sessions/date-range' => 'SessionController@getByDateRange',
    ],

    // Assessment Routes - مسارات التقييمات
    'assessments' => [
        'GET /api/assessments' => 'AssessmentController@index',
        'GET /api/assessments/student/:studentId' => 'AssessmentController@getByStudent',
        'POST /api/assessments' => 'AssessmentController@store',
        'GET /api/assessments/type/:type' => 'AssessmentController@getByType',
        'GET /api/assessments/progress/:studentId' => 'AssessmentController@getProgressReport',
    ],

    // Employee Routes - مسارات الموظفين
    'employees' => [
        'GET /api/employees' => 'EmployeeController@index',
        'GET /api/employees/department/:department' => 'EmployeeController@getByDepartment',
        'POST /api/employees' => 'EmployeeController@store',
        'PUT /api/employees/:id/status' => 'EmployeeController@updateStatus',
        'GET /api/employees/therapists' => 'EmployeeController@getTherapists',
    ],

    // Financial Routes - مسارات المالية
    'financial' => [
        'GET /api/financial/transactions' => 'FinancialController@index',
        'GET /api/financial/transactions/type/:type' => 'FinancialController@getByType',
        'POST /api/financial/transactions' => 'FinancialController@store',
        'GET /api/financial/summary' => 'FinancialController@getSummary',
        'GET /api/financial/transactions/date-range' => 'FinancialController@getByDateRange',
        'GET /api/financial/transactions/category/:category' => 'FinancialController@getByCategory',
    ],
];
