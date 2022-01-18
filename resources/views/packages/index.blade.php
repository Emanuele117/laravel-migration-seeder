@extends('layouts.app')

@section('page-title', 'packages')

@section('content')

<h1>I nostri pacchetti di viaggio</h1>

<section class="packages">
    <!-- qui tutti i pacchetti -->

    @forelse($packages as $package)

    <div class="card package">
        <div class="card-body">
            <h3>Città : {{$package->city}}</h3>
            <p>Paese : {{$package->country}}</p>
            <p>Compagnia aerea : {{$package->airline_company}}</p>
            <p>Hotel : {{$package->hotel}}</p>
            <a href="{{route('package', ['package' => $package->id])}}">Visualizza il pacchetto</a>
        </div>
    </div>

    @empty

    <p>nessun pacchetto da vedere..!</p>

    @endforelse
</section>

@endsection 