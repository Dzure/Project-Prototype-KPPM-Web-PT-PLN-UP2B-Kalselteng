@extends('layouts.admin')

@section('content')
<div class="pagetitle text-center">
    <h1>Profil PT PLN (Persero) UP2B Kalselteng</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/beritakegiatan">Home</a></li>
            <li class="breadcrumb-item active">Profil</li>
        </ol>
    </nav>
</div>

<div class="container" >
    @if ($profilUP2B)
        <div class="card shadow p-4 mb-4" style="background: linear-gradient(135deg, #36d1dc, #5b86e5);">
            <p>{!! $profilUP2B->description !!}</p>

            @if ($profilUP2B->image)
                <div class="text-center" >
                    <img src="{{ asset($profilUP2B->image) }}" alt="Profil UP2B" class="img-fluid">
                </div>
            @endif

            <div class="text-center mt-4">
                <a href="/admin/profilup2b/edit/{{ $profilUP2B->id }}" class="btn btn-primary">Edit Profil UP2B</a>
            </div>
        </div>
    @else
        <div class="alert alert-warning">
            Profil UP2B belum tersedia. Silakan tambahkan profil terlebih dahulu.
        </div>
    @endif
</div>
@endsection
