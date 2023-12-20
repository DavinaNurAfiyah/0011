@extends('layout.dav')
@section('kontent')
<center><h2 style=" width: 360px; height:210px;background-color:#f4f4f4; padding: 10px;border-radius: 5px">Edit Data Member NCT
<form method="POST" action="{{'/isi/'.$data->Nama}}" style="width: 300px; height:130px;margin: auto;padding: 30px;background: #f4f4f4;border-radius: 5px; border:2px solid grey">
    @csrf
    @method('PUT')
    <div class='nb-3' style="font-size: 18px">
        <label for="Nama" class='form-label'>Nama:</label>
        <input type="text" id="Nama" name="Nama" class="form-control" placeholder="Nama" value="{{$data->Nama}}">
    </div>
    <div class='nb-3' style="font-size: 18px">
        <label for="Posisi" class='form-label'>Posisi:</label>
        <input type="text" id="Posisi" name="Posisi" class="form-control" placeholder="Posisi" value="{{$data->Posisi}}">
    </div>
    <div class='nb-3' style="font-size: 18px">
        <label for="TTL" class='form-label'>TTL:</label>
        <input type="Number" id="TTL" name="TTL" class="form-control" placeholder="TTL" value="{{$data->TTL}}">
    </div>
    <div class='nb-3' style="font-size: 18px">
        <label for="Unit" class='form-label'>Unit:</label>
        <input type="text" id="Unit" name="Unit" class="form-control" placeholder="Unit" value="{{$data->Unit}}">
    </div>
    <div class='nb-3'>
        <input type="submit" name="submit" value="update" style="background-color: grey;

        border-radius:18px;
        
        color: white">
        <a class="btn btn-secondry" href="{{url ('/isi/')}}" style="font-size: 20px">Kembali</a>
    </div>
</form>
</h2></center>
@endsection