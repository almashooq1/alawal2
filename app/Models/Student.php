<?php

namespace App\Models;

/**
 * Student Model
 * نموذج الطالب
 */
class Student
{
    private $id;
    private $firstName;
    private $lastName;
    private $dateOfBirth;
    private $gender;
    private $disabilityType;
    private $guardianName;
    private $guardianPhone;
    private $guardianEmail;
    private $address;
    private $enrollmentDate;
    private $status;
    private $medicalNotes;

    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->fill($data);
        }
    }

    public function fill(array $data): void
    {
        $this->id = $data['id'] ?? null;
        $this->firstName = $data['first_name'] ?? null;
        $this->lastName = $data['last_name'] ?? null;
        $this->dateOfBirth = $data['date_of_birth'] ?? null;
        $this->gender = $data['gender'] ?? null;
        $this->disabilityType = $data['disability_type'] ?? null;
        $this->guardianName = $data['guardian_name'] ?? null;
        $this->guardianPhone = $data['guardian_phone'] ?? null;
        $this->guardianEmail = $data['guardian_email'] ?? null;
        $this->address = $data['address'] ?? null;
        $this->enrollmentDate = $data['enrollment_date'] ?? null;
        $this->status = $data['status'] ?? 'active';
        $this->medicalNotes = $data['medical_notes'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'full_name' => $this->getFullName(),
            'date_of_birth' => $this->dateOfBirth,
            'gender' => $this->gender,
            'disability_type' => $this->disabilityType,
            'guardian_name' => $this->guardianName,
            'guardian_phone' => $this->guardianPhone,
            'guardian_email' => $this->guardianEmail,
            'address' => $this->address,
            'enrollment_date' => $this->enrollmentDate,
            'status' => $this->status,
            'medical_notes' => $this->medicalNotes
        ];
    }

    public function getFullName(): string
    {
        return trim($this->firstName . ' ' . $this->lastName);
    }

    // Getters and Setters
    public function getId(): ?int { return $this->id; }
    public function setId(int $id): void { $this->id = $id; }
    
    public function getFirstName(): ?string { return $this->firstName; }
    public function setFirstName(string $firstName): void { $this->firstName = $firstName; }
    
    public function getLastName(): ?string { return $this->lastName; }
    public function setLastName(string $lastName): void { $this->lastName = $lastName; }
    
    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): void { $this->status = $status; }
}
