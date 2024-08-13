@extends('layouts.guest')
@section('content')
  <br>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Profil</li>
    </ol>
  </nav>

  <section id="profil-up2b" class="profil-up2b">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2>Profil PT PLN UP2B Kalselteng</h2>
          </div>

          <div class="profil-up2b-content">
            <p>{!! $profilUP2B->description !!}</p>

            @if ($profilUP2B->image)
              <div class="text-center">
                <img src="{{ asset($profilUP2B->image) }}" alt="Profil UP2B" class="img-fluid rounded">
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
