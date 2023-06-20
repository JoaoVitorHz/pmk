<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Cadastro para Doadores</h1>

        <div class="div-add-container">

            <div class="div-add-header">
                <span>Adicionar novo doador</span>
            </div>

            <div class="div-add-input-container">
                <form action="/create-user" method="POST">
                    @csrf
                    <div class="div-add-input-content">
                        <div>
                            <span>Nome</span>
                            <input type="text" name="user_name">
                        </div>
                        <div>
                            <span>Email</span>
                            <input type="text" name="user_email">
                        </div>
                        <div>
                            <span>CPF</span>
                            <input type="text" name="user_cpf">
                        </div>
                        <div>
                            <span>Telefone</span>
                            <input type="text" name="user_phone">
                        </div>
                        <div>
                            <span>Data de Nascimento</span>
                            <input type="text" name="user_birthday">
                        </div>
                        <div>
                            <span>Intervalo de doação</span>
                            <input type="text" name="user_donation_interval">
                        </div>
                        <div>
                            <span>Valor da doação</span>
                            <input type="text" name="user_donation_value">
                        </div>
                        <div>
                            <span>Endereço</span>
                            <input type="text" name="user_address">
                        </div>
                        <div>
                            <span>Bairro</span>
                            <input type="text" name="user_district">
                        </div>
                        <div>
                            <span>Numero</span>
                            <input type="text" name="user_number_address">
                        </div>
                        <div>
                            <span>CEP</span>
                            <input type="text" name="user_zip_code">
                        </div>

                        <!-- Dados do banco -->
                        <div>
                            <span>Numero do cartão</span>
                            <input type="text" name="user_card_number">
                        </div>
                        <div>
                            <span>Titular do cartão</span>
                            <input type="text" name="user_card_holder">
                        </div>
                        <div>
                            <span>Data de validade do cartão</span>
                            <input type="text" name="user_validation_data">
                        </div>
                        <div>
                            <span>Código de segurança</span>
                            <input type="text" name="user_security_code">
                        </div>
                        <div>
                            <span>Forma de pagamento</span>
                            <div class="div-type-payment-container">
                                <div class="div-type-payment-item">
                                    <span>Debito</span>
                                    <input type="radio" name="type_payment" checked value="debit">
                                </div>
                                <div class="div-type-payment-item">
                                    <span>Credito</span>
                                    <input type="radio" name="type_payment" value="credit">
                                </div>
                            </div>
                        </div>

                    </div>
                    <button>Adicionar</button>  
                </form>             
            </div>

        </div>

        <div class="div-list-container">
            <div class="div-list-header">
                <span>Lista de doadores</span>
            </div>

            <div class="div-list-table-container">
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
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>


    </div>
</body>
</html>