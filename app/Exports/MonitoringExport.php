<?php

namespace App\Exports;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;

class MonitoringExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function headings(): array
    {
        return [
            ['Monitoring Kesehatan Anak'], 
            [], 
            [
                'No', 
                'Nama Anak',
                'Jenis Kelamin',
                'Berat Badan (KG)',
                'Tinggi Badan (CM)',
                'Lingkar Kepala (CM)',
                'Kondisi Kesehatan',
                'Status Imunisasi',
                'Status Monitoring', 
                'Tanggal Diajukan',
                'Tanggal Selesai',
            ], 
        ];
    }

    public function map($row): array
    {
        static $i = 1; 

        return [
            $i++,
            $row['nama_anak'],
            $row['jenis_kelamin'],
            $row['berat_badan'],
            $row['tinggi_badan'],
            $row['lingkar_kepala'],
            $row['kondisi_kesehatan'],
            $row['status_imunisasi'],
            $row['status'],
            $row['created_at'],
            $row['updated_at'],
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getColumnDimension('A')->setWidth(5);   
        $sheet->getColumnDimension('B')->setWidth(30); 
        $sheet->getColumnDimension('C')->setWidth(25); 
        $sheet->getColumnDimension('D')->setWidth(25); 
        $sheet->getColumnDimension('E')->setWidth(25); 
        $sheet->getColumnDimension('F')->setWidth(25); 
        $sheet->getColumnDimension('G')->setWidth(25); 
        $sheet->getColumnDimension('H')->setWidth(25);  
        $sheet->getColumnDimension('I')->setWidth(25);  
        $sheet->getColumnDimension('J')->setWidth(25);  
        $sheet->getColumnDimension('K')->setWidth(25);  
    
        $sheet->getStyle('A1:K1000')->getFont()->setName('Times New Roman');
        $sheet->mergeCells('A1:K1');
        $sheet->getStyle('A1')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
    
        $sheet->getStyle('A3:K3')->getFont()->setBold(true)->setSize(12)->setName('Times New Roman')->getColor()->setARGB('FFFFFF');
        $sheet->getStyle('A3:K3')->getFill()->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)->getStartColor()->setARGB('2E5077');
        $sheet->getStyle('A3:K3')->getAlignment()->setHorizontal(\PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A3:K3')->getAlignment()->setVertical(\PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER);
    
        return [
            1    => [
                'font' => [
                    'bold' => true,
                    'size' => 16,
                    'name' => 'Times New Roman',
                ],
                'alignment' => [
                    'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                ],
            ],
        ];
    }
    

    public function collection()
    {
        return collect($this->data);
    }
}
