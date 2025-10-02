<?php

namespace App\Controllers;

use App\Models\Student;

/**
 * StudentController
 * متحكم الطلاب
 */
class StudentController
{
    /**
     * Get all students
     * الحصول على جميع الطلاب
     */
    public function index(): array
    {
        // This would typically fetch from database
        return [
            'success' => true,
            'message' => 'Students retrieved successfully',
            'data' => []
        ];
    }

    /**
     * Get a single student by ID
     * الحصول على طالب واحد
     */
    public function show(int $id): array
    {
        // This would typically fetch from database
        return [
            'success' => true,
            'message' => 'Student retrieved successfully',
            'data' => null
        ];
    }

    /**
     * Create a new student
     * إنشاء طالب جديد
     */
    public function store(array $data): array
    {
        $student = new Student($data);
        
        // Validate required fields
        if (empty($data['first_name']) || empty($data['last_name'])) {
            return [
                'success' => false,
                'message' => 'First name and last name are required',
                'errors' => ['first_name' => 'Required', 'last_name' => 'Required']
            ];
        }

        // This would typically save to database
        return [
            'success' => true,
            'message' => 'Student created successfully',
            'data' => $student->toArray()
        ];
    }

    /**
     * Update an existing student
     * تحديث طالب موجود
     */
    public function update(int $id, array $data): array
    {
        // This would typically update in database
        return [
            'success' => true,
            'message' => 'Student updated successfully',
            'data' => null
        ];
    }

    /**
     * Delete a student
     * حذف طالب
     */
    public function delete(int $id): array
    {
        // This would typically delete from database
        return [
            'success' => true,
            'message' => 'Student deleted successfully'
        ];
    }

    /**
     * Get students by status
     * الحصول على الطلاب حسب الحالة
     */
    public function getByStatus(string $status): array
    {
        return [
            'success' => true,
            'message' => "Students with status '{$status}' retrieved successfully",
            'data' => []
        ];
    }
}
