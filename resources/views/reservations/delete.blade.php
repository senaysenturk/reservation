@extends('layouts.main')

@section('content')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">{{ $reservation->id }}. Rezervasyon Silme </h1>
        </div>

        <form action="" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="summary">Ad Soyad</label>
                <input type="text" id="adsoyad" name="adsoyad" class="form-control" value="{{ $reservation->adsoyad }}" disabled/>
            </div>

            <div class="form-group">
                <label for="telefon">Telefon</label>
                <input type="text" id="telefon" name="telefon" class="form-control" value="{{ $reservation->telefon }}" disabled/>
            </div>

            <div class="form-group">
                <label for="tarih">Tarih</label>
                <input type="text" id="tarih" name="tarih" class="form-control" value="{{ $reservation->tarih }}" disabled/>
            </div>

            <button class="btn btn-primary" type="submit">Sil</button>
            <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Geri</a>

        </form>

    </main>

@endsection