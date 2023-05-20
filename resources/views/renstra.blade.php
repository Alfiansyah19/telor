@extends('layouts.tamplate')

@section('judul')
    Renstra
@endsection

@section('renstra')

<section id="team" class="team">
  <div class="container">

    <div class="section-title" data-aos="fade-in" data-aos-delay="100">
      <h2>RENSTRA</h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>
    <!DOCTYPE html>
    <html>
      <head>
      </head>
      <body>
        <iframe src="{{asset('pdf/Renstra.pdf#toolbar=0')}}" width="100%" height="600px">
        </iframe>
      </body>
    </html>
    

  </div>
</section>
@endsection