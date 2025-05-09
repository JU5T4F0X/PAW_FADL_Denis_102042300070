@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h5>Data Profil Mahasiswa</h5>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <!-- ==================4================== -->
                <!-- Tambahkan foto ke public/images, lalu tentukan pathnya -->
                <img src="{{ asset('images/pp.jpg') }}" 
                     alt="Profile Picture" 
                     width="150" height="150" 
                     class="rounded-circle border border-secondary" 
                     style="object-fit: cover;">
            </div>

            <table class="table table-bordered w-75">
                <tr>
                    <th>Nama</th>
                    <td>{{ $nama }}</td>
                </tr>
                <tr>
                    <th>NIM</th>
                    <td>{{ $nim }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $email }}</td>
                </tr>
                <tr>
                    <th>Jurusan</th>
                    <td>{{ $jurusan }}</td>
                </tr>
                <tr>
                    <th>Fakultas</th>
                    <td>{{ $fakultas }}</td>
                </tr>
            </table>
        </div>
    </div>
</div>
@endsection
