@extends('layout.app')
@section('content')
<main id="main" class="main">
<div class="card-body">
              <h5 class="card-title">Form</h5>

              <!-- Horizontal Form -->
              <form action="/perjalanan/store" method="post">
                  @csrf
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">User</label>
                  <div class="col-sm-10">
                    <select name="user_id" id="">
                      <option value="">-- User --</option>
                      @foreach($user as $p)
                      <option value="{{$p->id}}">{{$p->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
                  <div class="col-sm-10">
                    <input type="date" name="tanggal" class="form-control" id="inputText">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Jam</label>
                  <div class="col-sm-10">
                    <input type="time" name="jam" class="form-control" id="inputEmail">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Lokasi</label>
                  <div class="col-sm-10">
                    <input type="text" name="lokasi" class="form-control" id="inputPassword">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Suhu Tubuh</label>
                  <div class="col-sm-10">
                    <input type="number" name="suhu_tubuh" class="form-control" id="inputPassword">
                  </div>
                </div>
            
                <div class="text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
              </form><!-- End Horizontal Form -->

            </div>
          </main>
