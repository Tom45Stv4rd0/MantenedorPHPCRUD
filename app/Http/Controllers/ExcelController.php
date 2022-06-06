<?php
namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Resources\Views\Usuario\descargaExcel;
class ExcelController extends Controller
{
    /**
     * Muestra la lista de usuarios registrados.
     *
     * @return Response
     */
    public function descargaExcel()
    {       
    
        return Excel::download(new descargaExcel, 'users.xlsx');


    
    }
}