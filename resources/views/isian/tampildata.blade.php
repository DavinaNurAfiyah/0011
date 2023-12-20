@extends('layout.dav')
@section('kontent')
<center><h2 style="padding: 10px;border-radius: 10px ; width: 500px; height:500px; border:2px solid lightgrey;background-color:#f4f4f4; color:dimgrey">Daftar Member NCT
<table  class=table border='2' cellpading='10' cellspacing='0' style="font-size: 15px ; border:2px solid grey; background-color:#f4f4f4" >
    <thead>
        <tr>
            <th>Nama</th>
            <th>Posisi</th>
            <th>TTL</th>
            <th>Unit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item) 
        <tr>    
            <td>{{$item->Nama}}</td>
            <td>{{$item->Posisi}}</td>
            <td>{{$item->TTL}}</td>
            <td>{{$item->Unit}}</td>
            <td>
                <a class="btn btn-warning btn-sm" href="{{url ('/isi/'.$item->Nama.'/edit')}}">Edit</a>
            <form onsubmit="return confirm('Yakin?')" class="d-inline" action="{{'/isi/'.$item->Nama.'/'}}" method="POST" >@csrf @method('DELETE') 

            <button class="btn btn-danger btn-sm" style="background-color: crimson;border-radius:18px;color: white">Hapus</button>
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<a href="/" style="font-size: 18px">Tambah Data Member!</a>
</h2>
</center>
@endsection
