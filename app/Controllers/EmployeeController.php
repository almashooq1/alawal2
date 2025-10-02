<?php

namespace App\Controllers;

use App\Models\Employee;

/**
 * EmployeeController
 * متحكم الموظفين
 */
class EmployeeController
{
    /**
     * Get all employees
     * الحصول على جميع الموظفين
     */
    public function index(): array
    {
        return [
            'success' => true,
            'message' => 'Employees retrieved successfully',
            'data' => []
        ];
    }

    /**
     * Get employees by department
     * الحصول على الموظفين حسب القسم
     */
    public function getByDepartment(string $department): array
    {
        return [
            'success' => true,
            'message' => "Employees in '{$department}' department retrieved successfully",
            'data' => []
        ];
    }

    /**
     * Create a new employee
     * إنشاء موظف جديد
     */
    public function store(array $data): array
    {
        $employee = new Employee($data);
        
        // Validate required fields
        if (empty($data['first_name']) || empty($data['last_name']) || empty($data['email'])) {
            return [
                'success' => false,
                'message' => 'First name, last name, and email are required',
                'errors' => []
            ];
        }

        return [
            'success' => true,
            'message' => 'Employee created successfully',
            'data' => $employee->toArray()
        ];
    }

    /**
     * Update employee status
     * تحديث حالة الموظف
     */
    public function updateStatus(int $id, string $status): array
    {
        return [
            'success' => true,
            'message' => 'Employee status updated successfully',
            'data' => ['id' => $id, 'status' => $status]
        ];
    }

    /**
     * Get therapists (employees in therapy department)
     * الحصول على المعالجين
     */
    public function getTherapists(): array
    {
        return [
            'success' => true,
            'message' => 'Therapists retrieved successfully',
            'data' => []
        ];
    }
}
