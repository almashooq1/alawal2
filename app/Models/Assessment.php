<?php

namespace App\Models;

/**
 * Assessment Model
 * نموذج التقييم
 */
class Assessment
{
    private $id;
    private $studentId;
    private $assessorId;
    private $assessmentType;
    private $assessmentDate;
    private $category;
    private $score;
    private $maxScore;
    private $performanceLevel;
    private $strengths;
    private $areasForImprovement;
    private $recommendations;
    private $goals;
    private $nextAssessmentDate;

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
        $this->assessorId = $data['assessor_id'] ?? null;
        $this->assessmentType = $data['assessment_type'] ?? null;
        $this->assessmentDate = $data['assessment_date'] ?? null;
        $this->category = $data['category'] ?? null;
        $this->score = $data['score'] ?? null;
        $this->maxScore = $data['max_score'] ?? null;
        $this->performanceLevel = $data['performance_level'] ?? null;
        $this->strengths = $data['strengths'] ?? null;
        $this->areasForImprovement = $data['areas_for_improvement'] ?? null;
        $this->recommendations = $data['recommendations'] ?? null;
        $this->goals = $data['goals'] ?? null;
        $this->nextAssessmentDate = $data['next_assessment_date'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'student_id' => $this->studentId,
            'assessor_id' => $this->assessorId,
            'assessment_type' => $this->assessmentType,
            'assessment_date' => $this->assessmentDate,
            'category' => $this->category,
            'score' => $this->score,
            'max_score' => $this->maxScore,
            'performance_level' => $this->performanceLevel,
            'percentage' => $this->getPercentage(),
            'strengths' => $this->strengths,
            'areas_for_improvement' => $this->areasForImprovement,
            'recommendations' => $this->recommendations,
            'goals' => $this->goals,
            'next_assessment_date' => $this->nextAssessmentDate
        ];
    }

    public function getPercentage(): ?float
    {
        if ($this->score !== null && $this->maxScore !== null && $this->maxScore > 0) {
            return round(($this->score / $this->maxScore) * 100, 2);
        }
        return null;
    }

    // Getters and Setters
    public function getId(): ?int { return $this->id; }
    public function setId(int $id): void { $this->id = $id; }
    
    public function getStudentId(): ?int { return $this->studentId; }
    public function setStudentId(int $studentId): void { $this->studentId = $studentId; }
    
    public function getPerformanceLevel(): ?string { return $this->performanceLevel; }
    public function setPerformanceLevel(string $level): void { $this->performanceLevel = $level; }
}
