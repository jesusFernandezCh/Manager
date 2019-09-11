<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use DB;
use Excel;

class excelController extends Controller
{
	/**
	 * { function_description }
	 * @return     <type>  ( description_of_the_return_value )
	 */
	public function importExport()
	{
		$datosPag = ['titlePag'=> 'Usuarios', 'titleBox'=>'Registros'];
		return view('importExport',compact('datosPag'));
	}

	/**
	 * Downloads an excel.
	 * @param      <type>  $type   The type
	 * @return     <type>  ( description_of_the_return_value )
	 */
	public function downloadExcel($type)
	{
		$data = User::get()->toArray();
		return Excel::create('Users', function($excel) use ($data){
			$excel->sheet('Users', function($sheet) use ($data){
				$sheet->fromArray($data);
			});
		})->download($type);
	}
	
	/**
	 * { function_description }
	 * @return     <type>  ( description_of_the_return_value )
	 */
	public function importExcel()
	{
		$path = Input::file('import_file')->getRealPath();
		Excel::load($path, function($reader) {
		// Getting all results
		$results = $reader->select(array('title', 'description'))->get();
		//Recorre los resultados
		foreach ($results as $result) {
			if (isset($result->title)) {
				$item = [
					'title' 		=> $result->title,
					'description' 	=> $result->description
				];
				Item::create($item); //guarda el registro
				dd($item);
			}else{
				dd('Error al tratar de almacenar los datos del archivo');
			}
		}
		});
		if(Input::hasFile('import_file')){
			$path = Input::file('import_file')->getRealPath();
				$data = Excel::load($path, function($reader) {})->get(['title','description']);
				if(!empty($data) && $data->count()){
					foreach ($data as $key => $value) {
						$insert[] = ['title' => $value->title, 'description' => $value->description];
					}
					if(!empty($insert)){
						// DB::table('user')->insert($insert);
						foreach ($insert as $key => $item) {
							User::create($item);
						}
						dd('Insert Record successfully.');
					}
					}
		}
		return back();
	}
}