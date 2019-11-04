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
	Route::resource('profitCenter', 'ProfitCenterController');
	Route::resource('account', 'AccountController');
	Route::resource('logunit', 'LogunitController');
	Route::resource('country', 'CountryController');
	Route::resource('port', 'PortController');
	Route::resource('incoterm', 'IncotermController');
	Route::resource('accountCategory', 'AccountCategoryController');
	Route::resource('accountMetaType', 'AccountMetaTypeController');
	Route::resource('accountMeta', 'AccountMetaController');
	Route::resource('accountContact', 'AccountContactController');
	Route::resource('accountOperator', 'AccountOperatorController');
	Route::resource('operations', 'OperationController');
	Route::resource('status', 'OperationStatusController');
	Route::resource('business', 'BusinessLineController');
	Route::resource('cargoUnit', 'CargoUnitController');
	Route::resource('orderPmtTerm', 'OrderPmtTermController');
	Route::resource('operationShip', 'OperationShipController');
	Route::resource('docsInstruction', 'DocsInstructionController');
	Route::resource('accountCourrier', 'AccountCourrierController');
	Route::resource('operationDocument', 'OperationDocumentController');
    Route::resource('shipDetails', 'ShipDetailsController');
    Route::resource('operationShipTotals', 'OperationShipTotalController');

	Route::get("metaEdit/{meta?}/{account?}", "AccountMetaController@metaEdit")->name("metaEdit");
	Route::get("contactAsoc/{id?}", "AccountContactController@contactAsoc")->name("contactsAsoc");
	Route::get('contactEdit/{countact?}/{account?}', 'AccountContactController@contactAsocEdit')->name("contactEdit");
	Route::get('operation/documents/{operation?}', 'DocumentController@documentsOperation')->name("documentsAsoc");
	Route::get('operation/documents/edit/{docuemnt?}/{operation?}', 'DocumentController@documentOperationEdit')->name("documentOperationEdit");
	Route::get('operationIndexAsoc', 'OperationController@indexAsoc')->name('operationIndexAsoc');
	Route::get('comboCustomerBank/{customer_id?}/', 'OperationController@customer_bank')->name('comboCustomerBank');
	Route::get('supplierComercial/{supplier_id?}/', 'OperationController@supplierComercial')->name('supplierComercial');
	Route::get('docsIntruccionEditAsoc/{docsIntruccion_id?}/', 'DocsInstructionController@editAsoc')->name('docsIntruccionEditAsoc');
	Route::get('AccountCourrierEditAsoc/{accountCourrier_id?}/', 'AccountCourrierController@editAsoc')->name('AccountCourrierEditAsoc');

	/* Currency route */
	Route::resource('currency', 'CurrencyController');
	Route::resource('document', 'DocumentController');
	Route::resource('payments', 'PaymentsController');
	Route::resource('bank', 'BanksController');
	Route::resource('partner_bank', 'PartnerBankController');
	Route::resource('bank_transaction', 'BanksTransactionController');
	Route::resource('bank_account_type', 'BankAccountTypeController');
	Route::resource('product_line', 'ProductLineController');
	Route::resource('product_gen', 'ProductGenController');
	Route::resource('doc_status', 'DocStatusController');
	Route::resource('shelf_life', 'ShelfLifeController');
	Route::resource('order_details', 'OrderDetailController');
	Route::resource('currier', 'CurrierController');
	Route::get('/document/download/{id}', 'DocumentController@download')->middleware('auth');
	Route::resource('documentsType', 'DocumentsTypeController');
	/* Laguage */
	Route::get("language/{id?}", "LangController@index")->name("language");
	Route::post("language", "LangController@update")->name("language.update");
	// export excel
	Route::get('downloadExcel/{type}', 'excelController@downloadExcel');

	Route::post('verifyBalance', 'PaymentsController@verifyBalance');
});
