@extends('layouts.main')

@section('container')
   <div class="title-top mb-5">
   <h2 class="fw-bold">Contact Us</h2>
   <h2 class="fw-bold">Contact Us</h2>
<form>
  <div class=" from-floating mb-3">
    <input type="text" class="form-control" id="inputname" placeholder="nama">
    <label for="inputname">nama</label> 
    
  </div>
  <div class="for-floating mb-3">
    <input type="email" class="form-control" id="inputemail">
    <label for="inputemail" class="form-label">Email</label">
  </div>
  <div class=" from-floating mb-3">
    <textarea class="form-control" placeholder="Tinggalkan pesan disini" id="floatingTextarea2" style="height: 100px"></textarea>
    <label for="floatingTextarea2">Pesan</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection