<?php

namespace App\Exports;

use App\Models\Contact;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ContactsExport implements FromCollection, WithHeadings
{
    /**
    * @return Collection
    */
    public function collection(): Collection
    {
        return Contact::all();
    }

    public function headings(): array
    {
        return [
            'id',
            'sources',
            'addresse ip',
            'email',
            'nom / prenom',
            'tel',
            'created_at',
            'updated_at'
        ];
    }
}
