@extends('main.layout')
@section('content')
    <center>
        <h2>TAMBAH DATA KELAS</h2>
        <form action="/kelas/update/{{$kelas->id}}" method="POST">
            @csrf
            <table width="50%">
                <tr>
                    <td width="25%">KELAS</td>
                    <td width="25%"><input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}"></td>
                </tr>
                <tr>
                    <td width="25%">JURUSAN</td>
                    <td width="25%">
                        <select name="jurusan_id">
                            <option></option>
                            @foreach ($jurusan as $j)
                                @if ($kelas->jurusan_id == $j->id)
                                    <option value="{{ $j->id }}" selected>{{ $j->nama_jurusan }}</option> 
                                @else 
                                    <option value="{{ $j->id }}">{{ $j->nama_jurusan}}</option>      
                                @endif                                 
                            @endforeach
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center><button type="submit" class="button-primary">UBAH</button></center>
                    </td>
                </tr>
            </table>
        </form>
    </center> 
@endsection