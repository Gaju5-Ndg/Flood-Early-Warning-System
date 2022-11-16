<?php
  
namespace App\Http\Controllers;
   
use App\Models\People;
use Illuminate\Http\Request;
  
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }
     
   
    public function create(Request $request)
    {
        $user=new People;
        $user->first_name=$request->first_name;
        $user->second_name=$request->second_name;
        $user->address=$request->address;
        $user->profession=$request->profession;
        $user->password=$request->password;
        $user->mobile=$request->mobile;
        $user->station_id=$request->station_id;
        $result=$user->save();
        return $user;
    }
    
  
    public function store(Request $request)
    {
     
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function showpeople()
    {
        return People::all();
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\users  $usrs
     * @return \Illuminate\Http\Response
     */
    public function edit(users $users)
    {
       ;
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\users  $users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, users $users)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'detail' => 'required',
        // ]);
    
        // $users->update($request->all());
    
        // return redirect()->route('users.index')
        //                 ->with('success','users updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(users $users)
    {
        // $users->delete();
    
        // return redirect()->route('users.index')
        //                 ->with('success','users deleted successfully');
    }
}