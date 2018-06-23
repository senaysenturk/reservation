@extends('layouts.main')

@section('content')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Reservazyon</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
                    <span data-feather="calendar"></span>
                    Bu hafta
                </button>
            </div>
        </div>

        <div class="table-responsive">
            <a class="btn btn-primary" href="/reservation/create">Rezervasyon Ekle</a>
            <table class="table table-striped table-sm">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Özet</th>
                    <th>Açıklama</th>
                    <th>Durum</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach($reservations as $reservation)
                <tr>
                    <td>{{ $reservation -> id }}</td>
                    <td>{{ $reservation -> summary }}</td>
                    <td>{{ $reservation -> description }}</td>
                    <td>{{ $reservation -> status }}</td>
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