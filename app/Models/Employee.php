<?php

namespace App\Models;

/**
 * Employee Model
 * نموذج الموظف
 */
class Employee
{
    private $id;
    private $employeeNumber;
    private $firstName;
    private $lastName;
    private $email;
    private $phone;
    private $dateOfBirth;
    private $hireDate;
    private $position;
    private $department;
    private $specialization;
    private $qualification;
    private $employmentStatus;
    private $salary;
    private $emergencyContactName;
    private $emergencyContactPhone;
    private $address;

    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->fill($data);
        }
    }

    public function fill(array $data): void
    {
        $this->id = $data['id'] ?? null;
        $this->employeeNumber = $data['employee_number'] ?? null;
        $this->firstName = $data['first_name'] ?? null;
        $this->lastName = $data['last_name'] ?? null;
        $this->email = $data['email'] ?? null;
        $this->phone = $data['phone'] ?? null;
        $this->dateOfBirth = $data['date_of_birth'] ?? null;
        $this->hireDate = $data['hire_date'] ?? null;
        $this->position = $data['position'] ?? null;
        $this->department = $data['department'] ?? null;
        $this->specialization = $data['specialization'] ?? null;
        $this->qualification = $data['qualification'] ?? null;
        $this->employmentStatus = $data['employment_status'] ?? 'active';
        $this->salary = $data['salary'] ?? null;
        $this->emergencyContactName = $data['emergency_contact_name'] ?? null;
        $this->emergencyContactPhone = $data['emergency_contact_phone'] ?? null;
        $this->address = $data['address'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'employee_number' => $this->employeeNumber,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'full_name' => $this->getFullName(),
            'email' => $this->email,
            'phone' => $this->phone,
            'date_of_birth' => $this->dateOfBirth,
            'hire_date' => $this->hireDate,
            'position' => $this->position,
            'department' => $this->department,
            'specialization' => $this->specialization,
            'qualification' => $this->qualification,
            'employment_status' => $this->employmentStatus,
            'salary' => $this->salary,
            'emergency_contact_name' => $this->emergencyContactName,
            'emergency_contact_phone' => $this->emergencyContactPhone,
            'address' => $this->address
        ];
    }

    public function getFullName(): string
    {
        return trim($this->firstName . ' ' . $this->lastName);
    }

    // Getters and Setters
    public function getId(): ?int { return $this->id; }
    public function setId(int $id): void { $this->id = $id; }
    
    public function getEmployeeNumber(): ?string { return $this->employeeNumber; }
    public function setEmployeeNumber(string $number): void { $this->employeeNumber = $number; }
    
    public function getEmploymentStatus(): ?string { return $this->employmentStatus; }
    public function setEmploymentStatus(string $status): void { $this->employmentStatus = $status; }
}
