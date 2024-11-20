@extends('layouts.app')
@section('content')
    <div class="container container_main">
        <div class="row justify-content-center">
            @role('admin')
                <ul style="display: flex; align-items: center; justify-content: space-between; margin: 2rem 0;">
                    <li style="width: 20rem; height: 10rem; background-color: rgb(69, 69, 244); list-style: none; border-radius: 10px; padding: 20px 40px;">
                        <h3 style="font-size: 1rem; font-weight: 500">Clientes</h3>
                        <p style="font-size: 1.5rem; text-align: center; font-weight: 800; position:relative; top:20%; left:0%;">{{$clients}}</p>
                    </li>
                    <li style="width: 20rem; height: 10rem; background-color: rgb(40, 239, 40); list-style: none; border-radius: 10px; padding: 20px 40px;">
                        <h3 style="font-size: 1rem; font-weight: 500">Chamados Abertos</h3>
                        <p style="font-size: 1.5rem; text-align: center; font-weight: 800; position:relative; top:20%; left:0%;">20</p>
                    </li>
                    <li style="width: 20rem; height: 10rem; background-color: rgb(235, 235, 50); list-style: none; border-radius: 10px; padding: 20px 40px;">
                        <h3 style="font-size: 1rem; font-weight: 500">Chamados em Andamento</h3>
                        <p style="font-size: 1.5rem; text-align: center; font-weight: 800; position:relative; top:20%; left:0%;">324</p>
                    </li>
                    <li style="width: 20rem; height: 10rem; background-color: rgb(238, 59, 59); list-style: none; border-radius: 10px; padding: 20px 40px;">
                        <h3 style="font-size: 1rem; font-weight: 500">Chamados Fechado</h3>
                        <p style="font-size: 1.5rem; text-align: center; font-weight: 800; position:relative; top:20%; left:0%;">423</p>
                    </li>
                </ul>
                <div style="height: 1px; width: 100%; background: rgb(197, 197, 197);"></div>
                <div style="margin: 2rem 0;">
                    <h3>Chamados Abertos</h3>
                    <table style="width:100%; border-collapse: collapse;">
                        <tr style="background-color: #f2f2f2;">
                            <th style="width: 20%; border: 1px solid black;">ID</th>
                            <th style="width: 30%; border: 1px solid black;">Título</th>
                            <th style="width: 20%; border: 1px solid black;">Status</th>
                            <th style="width: 20%; border: 1px solid black;">Data de Abertura</th>
                        </tr>
                    </table>
                </div>
            @else
                <div style="display: flex; align-items: center; justify-content: flex-end; margin:2rem 0;">
                    <button class="btn btn-primary">Criar Chamado</button>
                </div>
                <div>
                    <h3>Chamados criados por mim</h3>
                    <table style="width:100%; border-collapse: collapse;">
                        <tr style="background-color: #f2f2f2;">
                            <th style="width: 20%; border: 1px solid black;">ID</th>
                            <th style="width: 30%; border: 1px solid black;">Título</th>
                            <th style="width: 20%; border: 1px solid black;">Status</th>
                            <th style="width: 20%; border: 1px solid black;">Data de Abertura</th>
                        </tr>
                    </table>
                </div>
            @endrole
        </div>
    </div>
@endsection
