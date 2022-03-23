@extends('Layouts.app')
@section('title', 'Usuários do Sistema')
@section('body')
    <div class="container table-responsive my-3">
        <table class="table table-bordered table-striped table-hover caption-top">
            <caption>Lista de usuários do sistema</caption>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">E-mail Verificado</th>
                    <th scope="col">Conta criada em</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->email_verified_at ? 'Sim' : 'Não'}}</td>
                        <td>{{ \Carbon\Carbon::parse($user->created_at)->format('d/m/Y')}}</td>
                        <td>
                            <a role="button" class="justify-content-end link-primary"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Enviar email para o usuário"> 
                                <i class="fa fa-envelope"></i>
                            </a>
                            <a href="route('destruir_user', ['user' => $user])" role="button" 
                            class="justify-content-end link-danger" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="Deletar usuário"> 
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection