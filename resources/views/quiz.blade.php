@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Hasil Perhitungan</div>


                    <div class="card-body">
                        <h3 class="text-center"><b><i>NIM : 8020170084</i></b></h3>
                        <h1 class="text-center">Hasil Perhitungan : {{ $hitung }}</h1>
                        <a href="{{ route('hitungluas') }}">
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn btn-danger">
                                        Back
                                    </button>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
