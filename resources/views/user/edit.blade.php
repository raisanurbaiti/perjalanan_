@extends('layout.app')
@section('content')
<main id="main" class="main">
<div class="card-body">
              <h5 class="card-title">User</h5>

              <!-- Horizontal Form -->
              <form action="/user/update/{{$edit->id}}" method="post">
                  @csrf
                  {{method_field('PUT')}}
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">NIK</label>
                  <div class="col-sm-10">
                    <input type="number" name="nik" value="{{$edit->nik}}" class="form-control" id="inputText">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" value="{{$edit->name}}" class="form-control" id="inputEmail">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Telp</label>
                  <div class="col-sm-10">
                    <input type="number" name="telp" value="{{$edit->telp}}" class="form-control" id="inputPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" name="email" value="{{$edit->email}}" class="form-control" id="inputPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Foto</label>
                  <div class="col-sm-10">
                    <input type="text" name="foto" value="{{$edit->foto}}" class="form-control" id="inputPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" name="username" value="{{$edit->username}}" class="form-control" id="inputPassword">
                  </div>
                </div>

                
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="text" name="password" value="{{$edit->password}}" class="form-control" id="inputPassword">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Confim Password</label>
                  <div class="col-sm-10">
                    <input type="text" name="confirm_password" value="{{$edit->confirm_password}}" class="form-control" id="inputPassword">
                  </div>
                </div>
            
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
</main>
