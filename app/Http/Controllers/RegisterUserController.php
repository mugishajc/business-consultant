<?php
namespace App\Http\Controllers;
use Auth;
use Validator;
use App\User;
use App\Categories;
use Illuminate\Support\Facades\Hash;
use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function add(Request $request){

        $request->validate([
           'name' => 'required',
           'email' => 'required|email|unique:users',
           'Phone_number' => 'required|min:10',
           'password' => 'required|min:3',
       ]);       
    
    
       
                  $user = new User([
                      'name'    =>  $request->get('name'),
                      'email'     =>  $request->get('email'),
                      'phone_number'     =>  $request->get('Phone_number'),
                      'role'     =>$request->get('usertype'),
                      'level'     =>  '1',
                      'password'  =>  Hash::make($request->get('password')),
                      'status'=>'pending',
                      
                      ]);
                  $user->save(); 
    
            return redirect()->back()->with('message', 'Account created successfully !');
    
    }
   

    public function adduser(Request $request){

        $request->validate([
           'name' =>['required', 'string', 'max:255'],
           'phone_number' => 'required',
           'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           'password' => ['required', 'string', 'min:8', 'confirmed'],
           ]);       
       
       $user = new User([
                      'name'  =>$request->get('name'),
                      'email'  =>  $request->get('email'),
                      'phone_number'  =>  $request->get('phone_number'),
                      'password'  =>  $request->get('password'),
                      ]);
                  $use->save(); 
   
            return redirect()->back()->with('message', $request->get('name').'account is created successfully !!!');
       }   

       public function addclient(Request $request){

        $request->validate([
           'name' => 'required',
           'email' => 'required|email|unique:users',
           'Phone_number' => 'required|min:10',
           'password' => 'required|min:3',
           ]);       
    
    
       
                  $user = new User([
                      'name'    =>  $request->get('name'),
                      'email'     =>  $request->get('email'),
                      'phone_number'     =>  $request->get('Phone_number'),
                      'role'     =>'client',
                      'level'     =>  '2',
                      'password'  =>  Hash::make($request->get('password')),
                      'status'=>'active',
                      
                      ]);
                  $user->save(); 
    
            return redirect()->back()->with('message', 'Account created successfully !');
    
    }
   
    
    public function showuser($id) {
 
        $ikiciro=Categories::get()->all();
        $users = DB::select('select * from users where id = ?',[$id]);
        return view('EditUser',['users'=>$users])->with('ikiciro',$ikiciro);
        }


        public function updateuser(Request $request,$id) {
 
            $name = $request->input('name');
            $email = $request->input('email');
            $phone_number = $request->input('phone_number');
            $activate = $request->input('activate');
            $usertype = $request->input('role');
            
            DB::update('update users set name = ?,email=?,phone_number=?,level=?,role=?,status=? 
            where id = ?',[$name,$email,$phone_number,'1',$usertype,$activate,$id]);
            return redirect()->back()->with('message', 'User is updated successfully !');
        }

}
