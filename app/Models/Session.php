<?php

namespace App\Models;

/**
 * Session Model
 * نموذج الجلسة
 */
class Session
{
    private $id;
    private $studentId;
    private $therapistId;
    private $sessionType;
    private $sessionDate;
    private $startTime;
    private $endTime;
    private $durationMinutes;
    private $status;
    private $notes;
    private $progressNotes;
    private $attendance;

    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->fill($data);
        }
    }

    public function fill(array $data): void
    {
        $this->id = $data['id'] ?? null;
        $this->studentId = $data['student_id'] ?? null;
        $this->therapistId = $data['therapist_id'] ?? null;
        $this->sessionType = $data['session_type'] ?? null;
        $this->sessionDate = $data['session_date'] ?? null;
        $this->startTime = $data['start_time'] ?? null;
        $this->endTime = $data['end_time'] ?? null;
        $this->durationMinutes = $data['duration_minutes'] ?? null;
        $this->status = $data['status'] ?? 'scheduled';
        $this->notes = $data['notes'] ?? null;
        $this->progressNotes = $data['progress_notes'] ?? null;
        $this->attendance = $data['attendance'] ?? 'present';
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'student_id' => $this->studentId,
            'therapist_id' => $this->therapistId,
            'session_type' => $this->sessionType,
            'session_date' => $this->sessionDate,
            'start_time' => $this->startTime,
            'end_time' => $this->endTime,
            'duration_minutes' => $this->durationMinutes,
            'status' => $this->status,
            'notes' => $this->notes,
            'progress_notes' => $this->progressNotes,
            'attendance' => $this->attendance
        ];
    }

    // Getters and Setters
    public function getId(): ?int { return $this->id; }
    public function setId(int $id): void { $this->id = $id; }
    
    public function getStudentId(): ?int { return $this->studentId; }
    public function setStudentId(int $studentId): void { $this->studentId = $studentId; }
    
    public function getTherapistId(): ?int { return $this->therapistId; }
    public function setTherapistId(int $therapistId): void { $this->therapistId = $therapistId; }
    
    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): void { $this->status = $status; }
}
