<form action="/create-user" method="POST" id="input-form">

  @csrf
    <div class="div-add-input-container">

        <div class="div-add-input-content">
            <span>Informações Pessoais</span>
            <input type="text" name="user_name" id="user_name" placeholder="Nome"/>
            <input type="email" name="user_email" id="user_email" placeholder="E-mail"/>
            <input type="text" name="user_cpf" id="user_cpf" placeholder="CPF"/>
            <input type="text" name="user_phone" id="user_phone" placeholder="Telefone"/>
            <input type="text" name="user_birthday" placeholder="Aniversario"/>
            <input type="text" name="user_donation_interval" placeholder="Intervalo de doação"/>
            <input type="text" name="user_donation_value" placeholder="Valo da doação"/>
        </div>

        <div class="div-add-input-content">
            <span>Endereço</span>
            <input type="text" name="user_address" placeholder="Endereço"/>
            <input type="text" name="user_district" placeholder="Bairro"/>
            <input type="text" name="user_number_address" placeholder="Numero"/>
            <input type="text" name="user_zip_code" placeholder="CEP"/>
        </div>

        <div class="div-add-input-content">
            <span>Dados Bancarios</span>
            <input type="text" name="user_card_number" placeholder="Número do cartão"/>
            <input type="text" name="user_card_holder" placeholder="Titular do cartão"/>
            <input type="text" name="user_validation_data" placeholder="Data de validade"/>
            <input type="text" name="user_security_code" placeholder="Codigo de segurança"/>

            <div class="div-type-payment-container">
                <div class="div-type-payment-item">
                    <span>Debito</span>
                    <input
                        type="radio"
                        name="type_payment"
                        checked
                        value="debit"
                    />
                </div>
                <div class="div-type-payment-item">
                    <span>Credito</span>
                    <input
                        type="radio"
                        name="type_payment"
                        value="credit"
                    />
                </div>
            </div>
        </div>
    </div>
    <button> <i class="fa-solid fa-user-plus"></i> Adicionar</button>
</form>
