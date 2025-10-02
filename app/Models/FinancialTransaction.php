<?php

namespace App\Models;

/**
 * FinancialTransaction Model
 * نموذج المعاملة المالية
 */
class FinancialTransaction
{
    private $id;
    private $transactionNumber;
    private $transactionType;
    private $category;
    private $amount;
    private $transactionDate;
    private $paymentMethod;
    private $referenceType;
    private $referenceId;
    private $description;
    private $status;
    private $createdBy;

    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->fill($data);
        }
    }

    public function fill(array $data): void
    {
        $this->id = $data['id'] ?? null;
        $this->transactionNumber = $data['transaction_number'] ?? null;
        $this->transactionType = $data['transaction_type'] ?? null;
        $this->category = $data['category'] ?? null;
        $this->amount = $data['amount'] ?? null;
        $this->transactionDate = $data['transaction_date'] ?? null;
        $this->paymentMethod = $data['payment_method'] ?? null;
        $this->referenceType = $data['reference_type'] ?? null;
        $this->referenceId = $data['reference_id'] ?? null;
        $this->description = $data['description'] ?? null;
        $this->status = $data['status'] ?? 'pending';
        $this->createdBy = $data['created_by'] ?? null;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'transaction_number' => $this->transactionNumber,
            'transaction_type' => $this->transactionType,
            'category' => $this->category,
            'amount' => $this->amount,
            'transaction_date' => $this->transactionDate,
            'payment_method' => $this->paymentMethod,
            'reference_type' => $this->referenceType,
            'reference_id' => $this->referenceId,
            'description' => $this->description,
            'status' => $this->status,
            'created_by' => $this->createdBy
        ];
    }

    public function isIncome(): bool
    {
        return $this->transactionType === 'income';
    }

    public function isExpense(): bool
    {
        return $this->transactionType === 'expense';
    }

    // Getters and Setters
    public function getId(): ?int { return $this->id; }
    public function setId(int $id): void { $this->id = $id; }
    
    public function getTransactionNumber(): ?string { return $this->transactionNumber; }
    public function setTransactionNumber(string $number): void { $this->transactionNumber = $number; }
    
    public function getAmount(): ?float { return $this->amount; }
    public function setAmount(float $amount): void { $this->amount = $amount; }
    
    public function getStatus(): ?string { return $this->status; }
    public function setStatus(string $status): void { $this->status = $status; }
}
