@extends('layout.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kota</h1>
     
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
       

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table</h5>

              <!-- Default Table -->
              <table class="table table-strip">
                <thead>
                <th>KOta</th>
                <th colspan="2">Aksi</th>
                    
                </thead>
                @foreach($Kota as $p)
                <tbody>
                  <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->Kota}}</td>
                    <td>
                        <a href="/kota/edit/{{$p->id}}">edit</a>
                        <a href="/kota/delete/{{$p->id}}">delete</a>
                    </td>
                  </tr>   
                </tbody>
                @endforeach
              </table>
                <center><a href="/kota/create">tambah</a></center>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection
