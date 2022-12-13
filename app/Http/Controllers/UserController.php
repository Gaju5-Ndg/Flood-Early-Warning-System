<?php
  
namespace App\Http\Controllers;
   
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
  
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::latest()->paginate(5);
    
        return view('Users.index',compact('user'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        return view('Users.create')->with('roles',$roles);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'firstname' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);
        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'gender'=>$request->gender,
           ' address'=>$request->address,
            'profession'=>$request->profession,
            'role'=>$request->role,
            'mobile'=>$request->mobile
        ]);
        $user->assignRole($request->role);
        return redirect()->route('Users.index')
                        ->with('success','farmer created successfully');
    }
     
    /**
     * Display the specified resource.
     *
    
     * @return \Illuminate\Http\Response
     */
    public function show($id){

    
    $user=User::find($id);
    
        return view('Users.show')->with('user',$user);
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     
     * @return \Illuminate\Http\Response
     */
    public function edit( Request $request ,$id)
    {
        $user=User::find( $id);
        $user->assignRole($request->role);
        return view('Users.edit')->with('user',$user);
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $user=User::where($id)->get();
        $input=$request->all();
        $user->update($input);
       
        return redirect()->route('Users.index')
                        ->with('success','farmer updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
    
        return redirect()->route('Users.index')
                        ->with('success','farmer deleted successfully');
    }
}
   
