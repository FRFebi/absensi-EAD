@extends('layouts.app')

@section('content')
<div class="container">
    <div class ="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Log Absensi {{ $day }}</div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Asisten</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($log_absen as $data)
                            <tr>
                                <td>{{$data->kode_asisten}}</td>
                                <td>{{$data->time_in}}</td>
                                <td>{{$data->time_out}}</td>
                                <td>{{$data->status}}</td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">No Data Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection