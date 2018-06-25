@extends('layouts.main')

@section('content')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Reservazyon</h1>
        </div>

        <div class="table-responsive">
            <a class="btn btn-primary" href="/reservation/create">Rezervasyon Ekle</a>
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Ad Soyad</th>
                    <th>Telefon</th>
                    <th>Tarih</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation -> id }}</td>
                    <td>{{ $reservation -> adsoyad }}</td>
                    <td>{{ $reservation -> telefon }}</td>
                    <td>{{ $reservation -> tarih }}</td>
                    <td>
                        <a href="/reservation/{{$reservation -> id}}" class="btn btn-primary">Güncelle</a>
                        <a href="/reservation/delete/{{$reservation -> id}}" class="btn btn-danger">Sil</a>
                    </td>
                </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>


@endsection