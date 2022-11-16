<?php
  
namespace App\Http\Controllers;
   
use App\Models\Admin;
use Illuminate\Http\Request;
  
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::latest()->latest()->paginate(5);
    
        return view('Admins.index',compact('admin'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admins.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'second_name'=>'required',
            'gender'=>'required',
            'address'=>'required',
            'level'=>'required',
            
            'profession'=>'required',
            'password'=>'required',
            'role'=>'required',
            'mobile'=>'required'
        ]);
    
        $admin->store($request);
    
        return redirect()->route('Admins.index')
                        ->with('success','admins created successfully');;
    }
     
    /**
     * Display the specified resource.
     *
    
     * @return \Illuminate\Http\Response
     */
    public function show($id){

    
    $admin=Admin::find($id);
    
        return view('Admins.show')->with('admin',$admin);
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin=Admin::find($id);
    
        return view('Admins.edit')->with('admin',$admin);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $admin=Admin::find($id);
        $input=$request->all();
        $admin->update($input);
    
        return redirect()->route('Admins.index')
                        ->with('success','admins updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::destroy($id);
    
        return redirect()->route('Admins.index')
                        ->with('success','admin deleted successfully');
    }
}
   
