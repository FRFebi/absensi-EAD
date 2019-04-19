@extends('layouts.app')

@section('content')
<div class="container">
    <div class ="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    <form action="/absen" method="post">
                        <table class="table table-borderless">
                            {{csrf_field()}}
                            <tr>
                                <td>
                                    <button type ="submit" value="In" class="btn btn-flat btn-primary" name="btnIn" {{ $toggle['btnIn'] }}>Absen Masuk</button>
                                </td>
                                <td>
                                    <button type ="submit" value="Out" class="btn btn-flat btn-primary" name="btnOut" {{ $toggle['btnOut'] }}>Absen Keluar</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class ="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Log Absensi</div>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Jam Masuk</th>
                                <th>Jam Keluar</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($log_absen as $data)
                            <tr>
                                <td>{{$data->date}}</td>
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
                    {!! $log_absen->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
