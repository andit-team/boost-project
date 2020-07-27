<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Exports\CategoryExport;
use App\Imports\CategoryImport;

class CategoryExportImportController extends Controller
{
    public function CategoryImportView()
    {
        return view('admin.categories.import');   
    }
 
    /**
    * @return \Illuminate\Support\Collection
    */
    public function export()
    {
        return Excel::download(new CategoryExport, 'categories.xlsx');
    }
 
    /**
    * @return \Illuminate\Support\Collection
    */
    public function import()
    {
        Excel::import(new CategoryImport,request()->file('file'));
 
        return back();
    }
}
