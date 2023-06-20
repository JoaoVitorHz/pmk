<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function read(Request $r){
        $user_data = new User();
        $user_data = $user_data->all();

        return view('list', [ 'user' => $user_data]);
    }

    function create(Request $request){
        if($request->types_payment == "credit"){
            $new_user = [
                'name' => $request->user_name,
                'email' => $request->user_email,
                'cpf' => $request->user_cpf,
                'phone' => $request->user_phone,
                'birthday' => $request->user_birthday,
                'registration_date' => date('d/m/Y'),
                'donation_interval' => $request->user_donation_interval,
                'donation_value' => $request->user_donation_value,
                'address' => $request->user_address,
                'district' => $request->user_district,
                'number_address' => $request->user_number_address,
                'zip_code' => $request->user_zip_code,

            ];
        } else {
            $new_user = [
                'name' => $request->user_name,
                'email' => $request->user_email,
                'cpf' => $request->user_cpf,
                'phone' => $request->user_phone,
                'birthday' => $request->user_birthday,
                'registration_date' => date('d/m/Y'),
                'donation_interval' => $request->user_donation_interval,
                'donation_value' => $request->user_donation_value,
                'address' => $request->user_address,
                'district' => $request->user_district,
                'number_address' => $request->user_number_address,
                'zip_code' => $request->user_zip_code,
                'card_number' => $request->user_zip_code,
                'card_holder' => $request->user_zip_code,
                'validation_data' => $request->user_zip_code,
                'security_code' => $request->user_zip_code,
            ];
        }

       


        $user = new User($new_user);
        $user->save();

       return redirect('');
    }
}
