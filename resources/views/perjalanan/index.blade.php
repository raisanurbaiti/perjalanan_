@extends('layout.app')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Data Perjalanan</h1>
     
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
       

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Table</h5>

              <!-- Default Table -->
              <table class="table table-strip">
                <thead>
                <th>Id</th>
                <th>User Id</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Lokasi</th>
                <th>Suhu Tubuh</th>
                <th colspan="2">Aksi</th>
                    
                </thead>
                @foreach($perjalanan as $p)
                <tbody>
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$p->user_id}}</td>
                    <td>{{$p->tanggal}}</td>
                    <td>{{$p->jam}}</td>
                    <td>{{$p->lokasi}}</td>
                    <td>{{$p->suhu_tubuh}}</td>
                    <td>
                        <a href="/perjalanan/edit/{{$p->id}}">edit</a>
                        <a href="/perjalanan/delete/{{$p->id}}">delete</a>
                    </td>
                  </tr>   
                </tbody>
                @endforeach
              </table>
                <center><a href="/perjalanan/create">tambah</a></center>
              <!-- End Default Table Example -->
            </div>
          </div>
        </div>
      </div>
    </section>

  </main>
@endsection
