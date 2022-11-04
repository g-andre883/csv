<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\UserController::class, 'index'])->name('home');

// バリエーション
Route::get('/student', [StudentController::class, 'index']);
Route::get('/import', [StudentController::class, 'import']);


Route::get('/add-employee', [App\Http\Controllers\EmployeeController::class, 'addEmployee']);

// エクポート
Route::get('/export-excel', [App\Http\Controllers\EmployeeController::class, 'exportIntoExcel']);
Route::get('/export-csv', [App\Http\Controllers\EmployeeController::class, 'exportIntoCSV']);


// インポート
Route::get('/import-form', [App\Http\Controllers\EmployeeController::class, 'importForm']);
Route::post('/import', [App\Http\Controllers\EmployeeController::class, 'import'])->name('employee.import');





// test
Route::get('excel', function () {


    $spreadsheet = new Spreadsheet();
    $sheet = $spreadsheet->getActiveSheet();
    $sheet->setCellValue('A1', 'Hello World !');

    $writer = new Xlsx($spreadsheet);

    // redirect output to client browser
    header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition: attachment;filename="test.xlsx"');
    header('Cache-Control: max-age=0');
});
