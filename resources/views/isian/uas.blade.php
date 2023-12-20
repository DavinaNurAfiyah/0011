@extends('layout.dav')
@section('kontent')
<center><h2 style="padding: 10px;border-radius: 5px ; width: 360px; height:210px; border:2px solid #f4f4f4;background-color:#f4f4f4">Input Data Member NCT
<form method="POST" action="/isi" style="width: 300px; height:130px;margin: auto;padding: 30px;background: #f4f4f4;border-radius: 5px; border:2px solid grey">
    @csrf
    
    <div class='nb-3'>
        <label for="Nama" class='form-label' style="font-size: 18px">Nama:</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama Member" value="{{Session::get('Nama')}}">
    </div>
    <div class='nb-3'>
        <label for="Posisi" class='form-label' style="font-size: 18px">Posisi:</label>
        <input type="text" id="Posisi" name="Posisi" class="form-control" placeholder="Posisi Member" value="{{Session::get('Posisi')}}">
    </div>
    <div class='nb-3'>
        <label for="TTL" class='form-label' style="font-size: 18px">TTL:</label>
        <input type="Number" id="TTL" name="TTL" class="form-control" placeholder="Tanggal Lahir" value="{{Session::get('TTL')}}">
    </div>
    <div class='nb-3'>
        <label for="Unit" class='form-label' style="font-size: 18px">Unit:</label>
        <input type="text" id="Unit" name="Unit" class="form-control" placeholder="Unit yang Tergabung" value="{{Session::get('Unit')}}">
    </div>
    <div class='nb-3'>
        <button style="background-color: dimgrey;border-radius:18px;color: white">Submit</button>
    </div>
</form>
</h2></center>
@endsection
