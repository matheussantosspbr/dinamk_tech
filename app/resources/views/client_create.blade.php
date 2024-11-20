@extends('layouts.app')
@section('content')
    <div class="container container_main">
        <form action="" class="form form-control" style="width: 40rem; height: 23rem; position: absolute; top: 25%; left: 25%;">
            <h3 style="text-align: center;">Cadastro de Cliente</h3>
            <div style="display: flex; flex-direction: column; margin-bottom: 1rem;">
                <label for="nome">Nome:</label>
                <input style="padding: 4px 8px; border-radius: 10px; border: 1px 1px 1px 1px black" type="text" name="name" id="nome" placeholder="Example" minlength="3" required>
            </div>
            <div style="display: flex; flex-direction: column; margin-bottom: 1rem;">
                <label for="email">Email:</label>
                <input style="padding: 4px 8px; border-radius: 10px; border: 1px 1px 1px 1px black" type="email" name="email" id="email" placeholder="example@example.com" required>
            </div>
            <div style="display: flex; flex-direction: column; margin-bottom: 1rem;">
                <label for="telefone">Telefone:</label>
                <input style="padding: 4px 8px; border-radius: 10px; border: 1px 1px 1px 1px black" type="text" id="telefone" name="phone" placeholder="(XX) XXXXX-XXXX" required>
            </div>
            <button id="teste" type="submit" class="btn btn-primary">Criar</button>
        </form>
        
    </div>
    <script>
        $(document).ready(function () {
            $('#telefone').mask('(00) 00000-0000');
        });



        $("#teste").click((event) => {
            event.preventDefault();

            const name = $('#nome').val();
            const email = $('#email').val();
            const phone = $('#telefone').val();

            // Verificar se algum campo está vazio
            if (!name || !email || !phone) {
                alert('Preencha todos os campos!');
                return;
            }

            // Validar telefone (exemplo de validação básica)
            if (phone.trim().length < 15) { 
                alert('Telefone inválido');
                return;
            }

            $.ajax({
                type: "POST",
                url: "/client/create",
                data: JSON.stringify({
                    name: name,
                    email: email,
                    phone: phone,
                }),
                dataType: "json",
                contentType: "application/json",
                headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}' // Insere o token direto no JavaScript
                },
                success: function (response) {
                    alert(response.message);
                },
                error: function (error) {
                    alert('Erro ao criar o cliente.');
                    console.log(error.responseJSON);
                }
            });
        }); 


        
    </script>
@endsection
