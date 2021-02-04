@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-5 text-dark">Votre profil</h1>

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">etage</th>
            <th scope="col">Email</th>
          </tr>
        </thead>
        <tbody>
            {{-- @foreach ($salle as $item)
            <tr>
              <th scope="row">{{$conter++}}</th>
              <td>{{$item->name}}</td>
              <td>{{$item->email}}</td>
            </tr>
           
       @endforeach --}}
     
        </tbody>
      </table>



@stop
