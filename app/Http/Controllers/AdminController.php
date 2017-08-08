<?php

namespace log\Http\Controllers;

use Illuminate\Http\Request;
use log\User;
use Auth;
use Redirect;
use DB;
use Session;
use log\Http\Requests\AdminFormRequest;

class AdminController extends Controller
{   
    
    public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tipo=Auth::user()->type;
        if($tipo == 'admin')
        {
            
            $query=trim($request->get('searchText'));
            $usuarios=DB::table('users as u')
            ->select('u.id','u.name','u.email','u.type')
            ->where('u.name','LIKE', '%'.$query.'%')
            ->orwhere('u.email','LIKE','%'.$query.'%')
            ->orderBy('u.name','asc')    
            ->paginate(4);
             
           
            
            $ordenar=trim($request->get('ordenar'));
            if($ordenar=='desc'){
             $ordenar=DB::table('users as u')
                ->orderBy('u.email','desc'); 
            }else if($ordenar=='asc'){
                $ordenar=DB::table('users as u')
                ->orderBy('u.email','asc'); 
            }
            
            return view('usuario.index',["usuarios"=>$usuarios,"searchText"=>$query]);
        }
        else{
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminFormRequest $request)
    {
        User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>$request['password'],
            'type'=>$request['type'],            
        ]);
        Session::flash('message','Usuario Creado Correctamente');
        return Redirect::to('admin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin=User::find($id);
        return view('usuario.forms.edit',['admin'=>$admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminFormRequest $request, $id)
    {
        $admin = User::find($id);
        $admin->fill($request->all());
        $admin->save();
        Session::flash('message','Usuario Actualizado Correctamente');
        return Redirect::to('admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('message','Usuario Eliminado Correctamente');
        return back();
    }
}
