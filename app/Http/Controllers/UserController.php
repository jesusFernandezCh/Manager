<?php

namespace App\Http\Controllers;

use App\User;
use App\ProfitCenter;
use Illuminate\Http\Request;
use App\Http\Requests\User\createRequest;
use App\Http\Requests\User\updateRequest;
use App\Http\Requests\User\passwordUpdateRequest;
use Caffeinated\Shinobi\Models\Role;
use Image;
use Session;
use Redirect;

class UserController extends Controller
{
    private $user;
    private $role;

    /**
    * { function_description }
    */
    public function __construct(User $user, Role $role)
    {
        $this->middleware('auth');
        $this->user     = $user;
        $this->role     = $role;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = $this->role->get()->pluck('name', 'slug');
        $estatus = [
            'active'    => 'Active',
            'inactive'  => 'Inactive',
            'suspended' => 'Suspended'
        ];
        $users = $this->user->all();
        // dd($users);

        return view('pages.user.index', compact('users','roles','estatus'));  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createRequest $request)
    {
        $data = $request->all();

        $file = $request->file('file');
         
        if ($file != null) {
            // url file save
            $path = public_path().'/img/avatar/';
            // file extension
            $extension = $file->getClientOriginalExtension();
            // file name
            $fileName = $data['email']. '.' . $extension;
            // file save
            $file->move($path, $fileName);
            // add route avarat
            // $data = array_add($data, 'image', $fileName);
        }
        // encrypt password
        $data['password'] = bcrypt($data['password']);
        //create user
        $user = $this->user->create($data);
        //assig rol user
        $user->assignRoles($data['rol']);
        Session::flash('message-success',' User '. $request->fullname.' editado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return response()->json($user);  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // dd($user);
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateRequest $request, $id)
    {
        $user = $this->user->find($id);
        $data = $request->all();
        $file = $request->file('file');
        if ($file != null) {
            // $path = public_path().'/img/avatar/';
            $extension = $file->getClientOriginalExtension();
            $fileName = $data['email']. '.' . $extension;
            // $file->move($path, $fileName);
            $data = array_add($data, 'image', $fileName);
        }
        if (isset($data['password'])) {
            $data = array_set($data, 'password', bcrypt($data['password']));
            $user->update($data);
        }else{
            $data = array_except($data, ['password']);
            $user->update($data);
        }   
        $user->save();
        $user->syncRoles($data['rol']);
        Session::flash('message-success',' User '. $request->name.' editado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        Session::flash('message-success','Usuario elminado correctamente');
        return Redirect::to('user');
    }

    /**
     * [formPasswordReset description]
     * @return [type] [description]
     */
    public function formPasswordReset()
    {
        return view('pages.user.passwordReset');
    }

    /**
     * [passwordUpdate description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function passwordUpdate(passwordUpdateRequest $request)
    {
        $user = $this->user->where('email',$request->input('email'))->first();
        $password = bcrypt($request->input('password'));
        $user->update(['password' => $password]);
        $user->save();
        Session::flash('message-success',' User '. $user->name.' actualizado correctamente.');
    }
}
