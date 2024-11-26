<?php

namespace App\Exports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentsExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Student::select('index_number', 'first_name', 'middle_name', 'last_name', 'phone_number', 'email')
                      ->get();
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
        ];
    }
}
