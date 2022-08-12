<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\User;

use Response;
use Http;




class UserApiController extends Controller
{


  public function GetUsers(Request $request)
  {

      $users = User::All();

      if(isset($users)) {

          return Response::json(["success" => true, "message" => '', 'data' => $users], 200);
        }

     else {
        return Response::json(["success" => false, "message" => 'No data found', "data" => ''], 200);
      }
   
  }


    


}
