<?php

namespace App\Imports;

use App\Models\Student;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class StudentsImport implements ToCollection,WithHeadingRow,WithValidation
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach($rows as $row){
            $data=[
                'name'=>$row['name'],
                'gender' => $row['gender'],
                'email' => $row['email'],
                'grade'=> $row['grade'],
                'mobile_number'=> $row['mobile_number'],
            ];
            Student::create($data);
        }
    }

    public function rules(): array
    {
        return[
            'name'=>'required',
            'gender' => 'required',
                'email' => 'required',
                'grade'=>'required',
                'mobile_number'=> 'required',
        ]
    }


}
