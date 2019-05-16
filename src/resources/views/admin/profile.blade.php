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
    <div class="card">
        {{--{{ Form::model(Auth::user(), ['route' => ['profile.update', Auth::user()]]) }}
        <div class="card-header">
            <h3 class="card-title">Update Profile</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        {{ Form::label('company',__('Company'),['class' => 'form-label']) }}
                        <div class="input-group">
                            {{ Form::text('company',Auth::user()->info->company,['class' => 'form-control '.($errors->has('company') ? ' is-invalid' : ''), 'style' => '']) }}
                            <error field="company"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        {{ Form::label('email',__('Email'),['class' => 'form-label']) }}
                        <div class="input-group">
                            {{ Form::text('email',Auth::user()->email,['class' => 'form-control '.($errors->has('email') ? ' is-invalid' : ''), 'style' => '', 'disabled']) }}
                            <error field="email"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        {{ Form::label('name',__('Name'),['class' => 'form-label']) }}
                        <div class="input-group">
                            {{ Form::text('name',null,['class' => 'form-control '.($errors->has('name') ? ' is-invalid' : ''), 'style' => '']) }}
                            <error field="name"/>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
                    <div class="form-group">
                        {{ Form::label('country_code',__('Country'),['class' => 'form-label']) }}
                        <div class="input-group">
                            {{ Form::select('country_code',$countries,Auth::user()->info->country_code,['class' => 'form-control custom-select'.($errors->has('country_code') ? ' is-invalid' : ''), 'style' => '']) }}
                            <error field="country"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <button type="submit" class="btn btn-primary">{{ __('Save Changes') }}</button>
        </div>
        {{ Form::close() }}--}}
    </div>
@stop