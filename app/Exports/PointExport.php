<?php

namespace App\Exports;


use App\Point;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;



class PointExport implements FromCollection, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event){
                $cellRange = 'A1:J1';
                $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(14);
            },
        ];
    }
    public function headings(): array
    {
        return [
            'Mã học sinh',
            'Tên học sinh',
            'Mã lớp',
            'Mã môn học',
            'Mã học kỳ',
            'Điểm miệng',
            'Điểm 15 phút',
            'Điểm 45 phút',
            'Điểm học kỳ',
            'Điểm TBHK',
        ];
    }
    public function collection()
    {   

        return Point::join('users','point.user_id','users.id')
        ->join('terms','point.term_id','terms.id')
        ->select('user_id','name','class_id','subject_id','term_id','dm','d15','d45','dhk','dtbhk')->get();
    }
}
