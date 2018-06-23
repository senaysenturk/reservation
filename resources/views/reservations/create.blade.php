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

        <form action="" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="summary">Özet</label>
                <input type="text" id="summary" name="summary" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="description">Açıklama</label>
                <input type="text" id="description" name="description" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="status">Durum</label>
                <select class="form-control" id="status" name="status">
                    <option value="Aktif">Aktif</option>
                    <option value="Aktif Değil">Aktif Değil</option>
                </select>
            </div>

            <button class="btn btn-primary" type="submit">Ekle</button>
            <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Geri</a>
        </form>

    </main>

@endsection