<?php

namespace App\Exports;

use App\Siswa;
use App\Matkul;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SiswaExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Siswa::all();
    }

    public function map($siswa): array{
    	return[
    		$siswa->nama,
    		$siswa->nim,
    		$siswa->email,
    		$siswa->jurusan
    	];
    }

     public function headings(): array{
    	return[
    		'Nama Lengkap',
    		'NIM',
    		'Email',
    		'Jurusan'
    	];
    }
}
