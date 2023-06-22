<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    function Read(Request $r){
        $user_data = new User();
        $user_data = $user_data->all();

        return view('list', [ 'user' => $user_data, 'error' => false]);
    }

    function Create(Request $request){
        $user_data = new User();
        $user_data = $user_data->all();

        $first_six_numbers =  substr(str_replace(' ', '', $request->user_card_number), 0, 6);
        $last_four_numbers = substr(str_replace(' ', '', $request->user_card_number), -4);

        foreach($user_data as $i){
           if($i['first_six_numbers'] ==  $first_six_numbers ){
                return view('list', [ 'user' => $user_data, 'error' => true, 'errorTxt' => 'Já existe um  cartão com os 6 primeiros numeros cadastrado!']);
            }
            else if($i['last_four_numbers'] == $last_four_numbers){
                return view('list', [ 'user' => $user_data, 'error' => true, 'errorTxt' => 'Já existe um cartão com os 4 ultimos numeros cadastrados']);
            }
        }

        $card_banner = UserController::GetCardBanner($request->user_card_number);

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

        if($request->type_payment == "credit"){
            $new_user['card_banner'] = $card_banner;
            $new_user['first_six_numbers'] = $first_six_numbers;
            $new_user['last_four_numbers'] = $last_four_numbers;
        } else {
            $new_user['card_number'] = $request->user_card_number;
            $new_user['card_banner'] = $card_banner;
            $new_user['card_holder'] = $request->user_card_holder;
            $new_user['validation_data'] = $request->user_validation_data;
            $new_user['security_code'] = $request->user_security_code;
        }

        $user = new User($new_user);
        $user->save();

        return redirect('');
    }

    private function GetCardBanner($number){

        $number = str_replace(' ', '', $number);

        $data = array(
            "AMERICAN_EXPRESS" => "/^3[47]\d{13}$/",
            "DINERS_CLUB" => "/^3(?:0[0-5]|[68]\d)\d{11}$/",
            "ELO" => "/(4011|431274|438935|451416|457393|4576|457631|457632|504175|627780|636297|636368|636369|(6503[1-3])|(6500(3[5-9]|4[0-9]|5[0-1]))|(6504(0[5-9]|1[0-9]|2[0-9]|3[0-9]))|(650(48[5-9]|49[0-9]|50[0-9]|51[1-9]|52[0-9]|53[0-7]))|(6505(4[0-9]|5[0-9]|6[0-9]|7[0-9]|8[0-9]|9[0-8]))|(6507(0[0-9]|1[0-8]))|(6507(2[0-7]))|(650(90[1-9]|91[0-9]|920))|(6516(5[2-9]|6[0-9]|7[0-9]))|(6550(0[0-9]|1[1-9]))|(6550(2[1-9]|3[0-9]|4[0-9]|5[0-8]))|(506(699|77[0-8]|7[1-6][0-9))|(509([0-9][0-9][0-9])))/",
            "HIPERCARD" => "/^(606282\d{10}(\d{3})?)|(3841\d{15})$/",
            "MASTERCARD" => "/^5[1-5]\d{14}$|^2(?:2(?:2[1-9]|[3-9]\d)|[3-6]\d\d|7(?:[01]\d|20))\d{12}$/",
            "VISA" => "/^4\d{12}(?:\d{3})?$/",
            "AMEX" => "/^3[47][0-9]{13}/" ,
            "JCB" => "/^(?:2131|1800|35\d{3})\d{11}/" ,
            "AURA" => "/^(5078\d{2})(\d{2})(\d{11})$/",
            "DISCOVER" => "/^6(?:011|5[0-9]{2})[0-9]{12}/"
        );
      
        foreach ($data as $key => $item) {
          if(preg_match($item, $number))
            return $key;
        }

        return "Bandeira Desconhecida";
    }
}
