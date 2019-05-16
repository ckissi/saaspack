@extends('tabler::layouts.main')
@push('scripts')
    <script src="{{ asset('admin/assets/plugins/charts-c3/plugin.js') }}"></script>
    <script type="text/javascript">
        require(['c3', 'jquery'], function (c3, $) {
            $(document).ready(function () {
                var chart = c3.generate({
                    bindto: '#chart-employment',
                    data: {
                        ...
                    }
                });
            });
        });
    </script>
@endpush
@push('styles')
    <link href="{{ asset('admin/assets/plugins/charts-c3/plugin.css') }}" rel="stylesheet"/>
@endpush

@section('content')
    <div class="my-3 my-md-5">
        <div class="container">
            <div class="page-header">
                <h1 class="page-title">
                    Charts
                </h1>
            </div>
            <div class="row row-cards">
                <div class="col-lg-6 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Employment Growth</h3>
                        </div>
                        <div class="card-body">
                            <div id="chart-employment" style="height: 16rem"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop