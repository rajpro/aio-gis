<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Facades\Hash;

class UserImport implements ToModel, WithStartRow
{

    public function startRow(): int
    {
        return 2; // Start reading from the second row
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name' => $row[3],
            'email' => $row[6],
            'password' => Hash::make("1234"), // Assuming the third column is the password
            'phone' => $row[7] ?? null, // Optional phone number
            'username' => $row[1] ?? null, // Optional username
            'surveyor' => $row[3] ?? null, // Optional surveyor field
            'ngo' => $row[4] ?? null, // Optional NGO field
        ]);
    }
}
