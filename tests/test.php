<?php

/**
 * Simple Test Suite for Alawal ERP System
 * مجموعة اختبارات بسيطة لنظام الأول
 */

require_once __DIR__ . '/../vendor/autoload.php';

use App\Models\Student;
use App\Models\Session;
use App\Models\Assessment;
use App\Models\Employee;
use App\Models\FinancialTransaction;

echo "=== Running Tests for Alawal ERP System ===\n\n";

// Test Student Model
echo "Testing Student Model...\n";
$studentData = [
    'id' => 1,
    'first_name' => 'أحمد',
    'last_name' => 'محمد',
    'date_of_birth' => '2015-05-20',
    'gender' => 'male',
    'disability_type' => 'autism',
    'enrollment_date' => '2024-01-15',
    'status' => 'active'
];
$student = new Student($studentData);
assert($student->getFullName() === 'أحمد محمد', 'Student full name test failed');
assert($student->getStatus() === 'active', 'Student status test failed');
echo "✓ Student Model tests passed\n";

// Test Session Model
echo "Testing Session Model...\n";
$sessionData = [
    'id' => 1,
    'student_id' => 1,
    'therapist_id' => 1,
    'session_type' => 'physical',
    'session_date' => '2024-01-20',
    'status' => 'scheduled'
];
$session = new Session($sessionData);
assert($session->getStatus() === 'scheduled', 'Session status test failed');
echo "✓ Session Model tests passed\n";

// Test Assessment Model
echo "Testing Assessment Model...\n";
$assessmentData = [
    'id' => 1,
    'student_id' => 1,
    'assessor_id' => 1,
    'assessment_type' => 'progress',
    'category' => 'physical',
    'score' => 85,
    'max_score' => 100,
    'performance_level' => 'meeting'
];
$assessment = new Assessment($assessmentData);
assert($assessment->getPercentage() === 85.0, 'Assessment percentage test failed');
assert($assessment->getPerformanceLevel() === 'meeting', 'Assessment performance level test failed');
echo "✓ Assessment Model tests passed\n";

// Test Employee Model
echo "Testing Employee Model...\n";
$employeeData = [
    'id' => 1,
    'employee_number' => 'EMP001',
    'first_name' => 'فاطمة',
    'last_name' => 'علي',
    'email' => 'fatima.ali@example.com',
    'department' => 'therapy',
    'employment_status' => 'active'
];
$employee = new Employee($employeeData);
assert($employee->getFullName() === 'فاطمة علي', 'Employee full name test failed');
assert($employee->getEmploymentStatus() === 'active', 'Employee status test failed');
echo "✓ Employee Model tests passed\n";

// Test Financial Transaction Model
echo "Testing FinancialTransaction Model...\n";
$transactionData = [
    'id' => 1,
    'transaction_number' => 'TXN001',
    'transaction_type' => 'income',
    'category' => 'Therapy Fees',
    'amount' => 500.00,
    'status' => 'completed'
];
$transaction = new FinancialTransaction($transactionData);
assert($transaction->isIncome() === true, 'Transaction type test failed');
assert($transaction->isExpense() === false, 'Transaction type test failed');
assert($transaction->getAmount() === 500.00, 'Transaction amount test failed');
echo "✓ FinancialTransaction Model tests passed\n";

echo "\n=== All Tests Passed! ===\n";
