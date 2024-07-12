@extends('layouts.app')

@section('content')

<div class="page-wrapper">

    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-5">
                <h4 class="page-title">Dashboard</h4>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Home</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-7">
                <div class="text-end upgrade-btn">

                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="d-md-flex">
                            <div>
                                {{-- <h4 class="card-title">Top Selling Products</h4>
                                <h5 class="card-subtitle">Overview of Top Selling Items</h5> --}}
                            </div>
                            <div class="ms-auto">
                                <div class="dl">
                                    <select class="form-select shadow-none">
                                        <option value="0" selected>Monthly</option>
                                        <option value="1">Daily</option>
                                        <option value="2">Weekly</option>
                                        <option value="3">Yearly</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="table-responsive p-4">
                        {{-- {{ var_dump($cdrs) }} --}}
                        <table class="table v-middle table-striped table-hover" id="dataTable">
                            <thead>
                                <tr class="bg-light">
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Date</th>
                                    <th class="border-top-0">Time</th>
                                    <th class="border-top-0">Source</th>
                                    <th class="border-top-0">Destination</th>
                                    <th class="border-top-0">Disposition</th>
                                    <th class="border-top-0">Cnum</th>
                                    <th class="border-top-0">Duration (s)</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cdrs as $key => $cdr)
                                <tr>
                                    <td>{{ ++$key }}</td>
                                    <td>{{ $cdr->calldate }}</td>
                                    <td>{{ $cdr->calldate }}</td>
                                    <td>{{ $cdr->src }}</td>
                                    <td>{{ $cdr->dst }}</td>
                                    <td>{{ $cdr->disposition }}</td>
                                    <td>{{ $cdr->cnum }}</td>
                                    <td>{{ $cdr->duration }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>

@endsection

@push('css')
    <style>

    </style>
@endpush

@push('scripts')
    <script>
        new DataTable('#dataTable', {
            pagingType: 'simple_numbers'
        });
    </script>
@endpush

