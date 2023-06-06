<?php

namespace App\Domain\Services;

use App\Domain\Repositories\EmployeeVacationRepositoryInterface;
use App\Domain\Models\EmployeeVacation;
use Illuminate\Database\Eloquent\Builder;

class EmployeeVacationService
{
    private EmployeeVacationRepositoryInterface $EmployeeVacationRepository;

    public function __construct(EmployeeVacationRepositoryInterface $EmployeeVacationRepository)
    {
        $this->EmployeeVacationRepository = $EmployeeVacationRepository;
    }

    public function getEmployeeVacationList(): array
    {
        return $this->EmployeeVacationRepository->getEmployeeVacationList();
    }

    public function getEmployeeVacationById(int $id): EmployeeVacation|Builder|null
    {
        return $this->EmployeeVacationRepository->getEmployeeVacationById($id);
    }

    public function createEmployeeVacation(array $data): EmployeeVacation|Builder|null
    {
        return $this->EmployeeVacationRepository->createEmployeeVacation($data);
    }

    public function updateEmployeeVacation(int $id, array $data): EmployeeVacation|Builder|null
    {
        return $this->EmployeeVacationRepository->updateEmployeeVacation($id, $data);
    }

    public function deleteEmployeeVacation($id): EmployeeVacation|Builder|null
    {
        return $this->EmployeeVacationRepository->deleteEmployeeVacation($id);
    }
}