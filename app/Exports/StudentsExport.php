<?php

namespace App\Exports;

use App\Models\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Student::with(['class', 'selectedSchools'])
            ->get()
            ->map(function ($student) {
                return [
                    'index_number' => $student->index_number,
                    'first_name' => $student->first_name,
                    'middle_name' => $student->middle_name,
                    'last_name' => $student->last_name,
                    'phone_number' => $student->phone_number,
                    'email' => $student->email,
                    'class' => $student->class ? $student->class->class_name : 'N/A',
                    'schools' => $student->selectedSchools->pluck('sch_name')->implode(', '),
                ];
            });
    }

    public function headings(): array
    {
        return [
            'Index Number',
            'First Name',
            'Middle Name',
            'Last Name',
            'Phone Number',
            'Email',
            'Class',
            'Schools',
        ];
    }
}
