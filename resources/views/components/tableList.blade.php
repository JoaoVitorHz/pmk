<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
        <th>CPF</th>
        <th>Telefone</th>
        <th>Data de Nascimento</th>
        <th>Data de cadastro</th>
        <th>Intervalo de Doação</th>
        <th>Valor da Doação</th>
        <th>Endereço</th>
        <th>Bairro</th>
        <th>Numero da Residencia</th>
        <th>CEP</th>
        <th>Numero do Cartão</th>
        <th>Titular do Cartão</th>
        <th>Data de validate</th>
        <th>Codigo de segurança</th>
        <th>Bandeira do cartão</th>
        <th>6 primeiros numeros do cartão</th>
        <th>4 ultimos numeros</th>
    </tr>
    @foreach($user as $i)
    <tr>
        <td>{{$i['id']}}</td>
        <td>{{$i['name']}}</td>
        <td>{{$i['email']}}</td>
        <td>{{$i['cpf']}}</td>
        <td>{{$i['phone']}}</td>
        <td>{{$i['birthday']}}</td>
        <td>{{$i['registration_date']}}</td>
        <td>{{$i['donation_interval']}}</td>
        <td>{{$i['donation_value']}}</td>
        <td>{{$i['address']}}</td>
        <td>{{$i['district']}}</td>
        <td>{{$i['number_address']}}</td>
        <td>{{$i['zip_code']}}</td>
        <td>{{$i['card_number']}}</td>
        <td>{{$i['card_holder']}}</td>
        <td>{{$i['validation_data']}}</td>
        <td>{{$i['security_code']}}</td>
        <td>{{$i['card_banner']}}</td>
        <td>{{$i['first_six_numbers']}}</td>
        <td>{{$i['last_four_numbers']}}</td>
    </tr>
    @endforeach
</table>