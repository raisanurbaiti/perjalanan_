@extends('layout.app')
@section('content')

<main id="main" class="main">
 <h1>General Tables</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Tables</li>
          <li class="breadcrumb-item active">General</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">User</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">NIK</th>
                    <th scope="col">Name</th>
                    <th scope="col">Telp</th>
                    <th scope="col">Email</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Username</th>
                    <th colspan="2">Aksi</th>
                  </tr>
                </thead>
                @foreach($user as $p)
            <tbody>
                <tr>
                    <td>{{$p->nik}}</td>
                    <td>{{$p->name}}</td>
                    <td>{{$p->telp}}</td>
                    <td>{{$p->email}}</td>
                    <td>{{$p->foto}}</td>
                    <td>{{$p->username}}</td>
                    <td>
                        <a href="/user/edit/{{$p->id}}">edit</a>
                        <a href="/user/delete/{{$p->id}}">delete</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
                  <center><a href="/user/create">tambah</a></center>
              <!-- End Default Table Example -->
            </div>
          </div>
</main>
@endsection