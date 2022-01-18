@extends('layouts.app')

@section('page-title', 'packages')

@section('content')

<h1>I nostri pacchetti di viaggio</h1>

<section class="package">
   
        <div class="card-body">
            <h3>Città : {{$package->city}}</h3>
            <p>Paese : {{$package->country}}</p>
            <p>Compagnia aerea : {{$package->airline_company}}</p>
            <p>Hotel : {{$package->hotel}}</p>
        </div>
</section>

@endsection 