<?php

namespace App\Imports;

use App\Point;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PointImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    public function headingRow() : int
    {
        return 1;
    }
    public function model(array $row)
    {

        return new Point([
            'user_id' => $row['ma_hoc_sinh'],
            'class_id' => $row['ma_lop'],
            'subject_id' => $row['ma_mon_hoc'],
            'term_id' => $row['ma_hoc_ky'],
            'dm' => $row['diem_mieng'],
            'd15' => $row['diem_15_phut'],
            'd45' => $row['diem_45_phut'],
            'dhk' => $row['diem_hoc_ky'],
            'dtbhk' => $row['diem_tbhk'],
        ]);
    }
}
