<?php

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
	return view('auth.login');
});

Route::get('pdf/{name}', function ($name) {
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadView('pages.operation.pdf.'.$name);
    return $pdf->stream();
})->name('pdf');

Route::get('pdf1', function () {
    $pdf = App::make('dompdf.wrapper');
    $pdf->loadView('pages.operation.pdf.factura6');
    return $pdf->stream();
})->name('pdf1');

Route::get('factura', function () {
	return view('pages.operation.pdf.factura6');
});
Route::get('factura1', function () {
	return view('pages.operation.pdf.factura1');
});

Route::get('login', function () {
	return view('auth.login');
});

Route::get("lang/{locale}", function ($locale) {
	Session::put("locale", $locale);
	return redirect()->back();
})->name("lang");

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
	// password reset
	Route::get('reset', 'UserController@formPasswordReset')->name('passwordReset');
	Route::put('passwordUpdate', 'UserController@passwordUpdate')->name('passwordUpdate');
	// users, roles, presmissions
	Route::resource('user', 'UserController');
	Route::resource('rol', 'RolController');
	Route::resource('permission', 'PermissionController');
	// home
	Route::get('/home', 'HomeController@index')->name('home');
	// modules
	Route::resource('empleados', 'EmpleadoController');
	Route::get('combosBox/{id}/{tipo}','NomencladorController@getCombos');

	Route::resource('eventos', 'EventosController');
	
	// Route::get("metaEdit/{meta?}/{account?}", "AccountMetaController@metaEdit")->name("metaEdit");
	
	Route::get('operation/documents/edit/{docuemnt?}/{operation?}', 'DocumentController@documentOperationEdit')->name("documentOperationEdit");
	Route::get('docsIntruccionEditAsoc/{docsIntruccion_id?}/', 'DocsInstructionController@editAsoc')->name('docsIntruccionEditAsoc');

	Route::get('/document/download/{id}', 'DocumentController@download')->middleware('auth');
	Route::resource('documentsType', 'DocumentsTypeController');
	/* Laguage */
	Route::get("language/{id?}", "LangController@index")->name("language");
	Route::post("language", "LangController@update")->name("language.update");
	// export excel
	Route::get('downloadExcel/{type}', 'excelController@downloadExcel');

	Route::post('verifyBalance', 'PaymentsController@verifyBalance');
});


Route::get('shipTotals',function(){
    return datatables()
    ->collection(App\OperationShipTotal::all()->where('operation_id',10))
    ->addColumn('btn','pages.operation.shipTotal.partials.actions')
    ->rawColumns(['btn'])
    ->toJson();
});
