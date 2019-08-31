@extends('layouts.app')

@section('content')
  <pagina tamanho="10">
    <painel titulo="Painel">
      <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>

      <div class="row">
        @can('autor')
          <div class="col-md-4">
            <caixa qtd="{{$totalArtigos}}" titulo="Artigos" url="{{route('artigos.index')}}" cor="#00FA9A" icone="ion ion-pie-graph"></caixa>
          </div>
        @endcan
        @can('eAdmin')
          <div class="col-md-4">
            <caixa qtd="{{$totalUsuarios}}" titulo="Usuários" url="{{route('usuarios.index')}}" cor="blue" icone="ion ion-person-stalker"></caixa>
          </div>
          <div class="col-md-4">
            <caixa qtd="{{$totalAutores}}" titulo="Autores" url="{{route('autores.index')}}" cor="red" icone="ion ion-person"></caixa>
          </div>
          <div class="col-md-4">
            <caixa qtd="{{$totalAdmin}}" titulo="Admin" url="{{route('adm.index')}}" cor="green" icone="ion ion-person"></caixa>
          </div>
          <div class="col-md-4">
            <caixa qtd="{{$totalAdmin}}" titulo="Users" url="{{route('adm.index')}}" cor="black" icone="ion ion-person"></caixa>
          </div>
        @endcan

      </div>
    </painel>

  </pagina>
@endsection
