@extends("layouts.main")

@section("container")
    <div class="bg-danger bg-gradient">
        <div class="container-md pros">
            <p class="pro-sz1">My Project</p>
            <div class="container py-4">
              <div class="row g-4">
                <div class="col-12 col-md-6">
                  <!-- Isi kolom kiri -->
                  <div class="mids1 p-3 border rounded-3 h-100">
                    <img src="{{ asset('images/sumu1.png') }}" alt="Logo" class="d-inline-block align-text-top img-fluid rounded-2">
                    <p class="mids2">SUMU Dashboard (2025)</p>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <!-- Isi kolom kanan -->
                  <div class="mids1 p-3 border rounded-3 h-100">
                    <img src="{{ asset('images/travel2.png') }}" alt="Logo" width="1627" height="759" class="d-inline-block align-text-top img-fluid rounded-2">
                    <p class="mids2">TravelLabel (2024)</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="container py-4">
              <div class="row g-4">
                <div class="col-12 col-md-6">
                  <!-- Isi kolom kiri -->
                  <div class="mids1 p-3 border rounded-3 h-100">
                    <img src="{{ asset('images/dosify1.png') }}" alt="Logo" class="d-inline-block align-text-top img-fluid rounded-2">
                    <p class="mids2">Dosify (2024)</p>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <!-- Isi kolom kanan -->
                  <div class="mids1 p-3 rounded-3 h-100">
                    {{-- <img src="{{ asset('images/travel2.png') }}" alt="Logo" width="1627" height="759" class="d-inline-block align-text-top img-fluid rounded-2">
                    <p class="mids2">TravelLabel (2024)</p> --}}
                  </div>
                </div>
              </div>
            </div>

            {{-- <div class="grid">
                s
            </div> --}}
        </div>
    </div>
@endsection
