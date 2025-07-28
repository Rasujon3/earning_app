<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Log;

class AccessController extends Controller
{
    public function adminLogin(Request $request)
    {
    	try
        {
        	$data = $request->all();
		    	if(Auth::attempt(['username' => $data['username'], 'password' => $data['password']])){

		    		$notification = array(
		                     'messege' => 'Successfully Logged In',
		                     'alert-type' => 'success'
		                    );

		           return redirect('/dashboard')->with($notification);
		    	} else {
		    		$notification = array(
		                     'messege' => 'Username or Password Invalid',
		                     'alert-type' => 'error'
		                    );

		          return Redirect()->back()->with($notification);
	    	}
	   } catch(Exception $e){
            // Log the error
            Log::error('Error in Login: ', [
                'message' => $e->getMessage(),
                'code' => $e->getCode(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);

            $notification=array(
                'messege' => 'Something went wrong!!!',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function Logout()
    {
    	try
    	{
    		Auth::logout();
    		return redirect('/');
    	}catch(Exception $e){

                $message = $e->getMessage();

                $code = $e->getCode();

                $string = $e->__toString();
                return response()->json(['message'=>$message, 'execption_code'=>$code, 'execption_string'=>$string]);
                exit;
        }
    }
}
