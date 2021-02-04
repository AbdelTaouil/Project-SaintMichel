@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-5 text-dark">Liste des utilisateur</h1>

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($user as $item)
            <tr>
              <th scope="row">{{$counter++}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->email}}</td>
            </tr>
           
       @endforeach
        </tbody>
      </table>



@stop
