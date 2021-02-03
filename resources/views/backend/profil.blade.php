@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-5 text-dark">Votre profil</h1>

<div class="container">
        <div class="row">
                
            <div class="col-lg-8 pt-4 pt-lg-0 content">
              <h3>{{Auth::user()->name}}</h3>
              <p class="font-italic">
                Toute vos informations sont ci-dessus.
              </p>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Nom : {{Auth::user()->name}}</strong> </li>
                   
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><i class="icofont-rounded-right"></i> <strong>Email : {{Auth::user()->email}} </strong> </li>
                  </ul>
                </div>
              </div>

            </div>
         
          </div>
        </div>



@stop
