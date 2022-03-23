@extends('Layouts.app')
@section('title', 'Corretores')
@section('body')
  <div class="container table-responsive my-3">
      <table class="table table-bordered table-striped table-hover caption-top">
          <caption>Lista de corretores do sistema</caption>
          <thead>
              <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nome</th>
                  <th scope="col">E-mail</th>
                  <th scope="col">E-mail Verificado</th>
                  <th scope="col">Ações</th>
              </tr>
          </thead>
          <tbody>
              @foreach($corretores as $corretor)
                  <tr>
                      <th scope="row">{{++$cont}}</th>
                      <td>{{$corretor->name}}</td>
                      <td>{{$corretor->email}}</td>
                      <td>{{$corretor->email_verified_at ? 'Sim' : 'Não'}}</td>
                      <td>
                          <a role="button" class="justify-content-center link-primary"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top" title="Enviar email para o corretor"> 
                              <i class="fa fa-envelope"></i>
                          </a>
                      </td>
                  </tr>
              @endforeach
          </tbody>
      </table>
  </div>
@endsection
