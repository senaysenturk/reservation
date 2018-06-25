@extends('layouts.main')

@section('content')

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Reservazyon</h1>
        </div>

        <form action="" method="post">
            {{csrf_field()}}

            <div class="form-group">
                <label for="adsoyad" class="requiredField">Ad Soyad
                    <span class="asteriskField">*</span>
                </label>
                <input type="text" id="adsoyad" name="adsoyad" class="form-control {{ $errors->has('adsoyad') ? 'is-invalid' : '' }}"/>

                @if($errors->has('adsoyad'))
                    <span class="help-block">
                        <strong>
                            {{ $errors->first('adsoyad') }}
                        </strong>
                    </span>
                @endif

            </div>

            <div class="form-group">
                <label for="telefon" class="requiredField">Telefon
                    <span class="asteriskField">*</span>
                </label>
                <input type="text" id="telefon" name="telefon" class="form-control {{ $errors->has('telefon') ? 'is-invalid' : '' }}"/>

                @if($errors->has('telefon'))
                    <span class="help-block">
                        <strong>
                            {{ $errors->first('telefon') }}
                        </strong>
                    </span>
                @endif

            </div>

            <div class="form-group">
                <label class="control-label">Randevu Tarihi</label>
                <div class='input-group date' id='datetimepicker1'>
                    <label for="tarih"></label>
                    <input type='text' class="form-control" name="tarih" id="tarih {{ $errors->has('tarih') ? 'is-invalid' : '' }}"/>
                    <span class="input-group-addon">
                     <span class="glyphicon glyphicon-calendar"></span>
                     </span>
                </div>
                @if($errors->has('tarih'))
                    <span class="help-block">
                        <strong>
                            {{ $errors->first('tarih') }}
                        </strong>
                    </span>
                @endif
            </div>

            <button class="btn btn-primary" type="submit">Ekle</button>
            <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Geri</a>
        </form>

    </main>

@endsection