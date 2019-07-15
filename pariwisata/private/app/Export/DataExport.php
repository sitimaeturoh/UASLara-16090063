<?php
    namespace App\Export;
    use Maatwebsite\Excel\Concerns\FromCollection;

    class DataExport implements FromCollection {
        var $adata;

    public function __construct($data){
        $this->data = $data;
    }

    // public function collection()
    //     {
    //     return \App\Event::all();
    //     }
    public function collection()
        {
        return $this->data::all();
        }
}