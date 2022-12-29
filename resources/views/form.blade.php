@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Form Hitung Luas Jajargenjang</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('hitungHasil') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Alas</label>

                                <div class="col-md-6">
                                    <input id="alas" type="number"
                                        class="form-control @error('name') is-invalid @enderror" name="alas"
                                        value="{{ old('alas') }}" required autocomplete="name" autofocus>

                                    @error('alas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="tinggi" class="col-md-4 col-form-label text-md-end">Tinggi</label>

                                <div class="col-md-6">
                                    <input id="tinggi" type="number"
                                        class="form-control @error('tinggi') is-invalid @enderror" name="tinggi"
                                        value="{{ old('tinggi') }}" required autocomplete="tinggi">

                                    @error('tinggi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Hitung!
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
