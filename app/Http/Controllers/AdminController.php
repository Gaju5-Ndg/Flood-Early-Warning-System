<?php
  
namespace App\Http\Controllers;
   
use App\Models\Admin;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

  
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::all();
    
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
        $admin=new Admin;
       $admin->first_name=$request->first_name;
       $admin->second_name=$request->second_name;
       $admin->gender=$request->gender;
       $admin->address=$request->address;
       $admin->level=$request->level;
       $admin->profession=$request->profession;
       $admin->password=$request->password;
       $admin->role=$request->role;
       $admin->mobile=$request->mobile;
       $admin->save();
    
        return redirect()->route('Admins.index')
                        ->with('success','admin created successfully');;
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
                        ->with('success','admin updated successfully');
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
   
