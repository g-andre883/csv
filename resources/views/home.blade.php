@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                </div>
                @foreach ($list as $item)
                <table>
                    <tbody>
                        <tr>
                            <td>

                                {{ $item->id }}

                            </td>
                            <td>

                                {{ $item->name }}

                            </td>
                            <td>

                                {{ $item->email }}

                            </td>
                            <td>

                                {{ $item->phone }}

                            </td>
                            <td>

                                {{ $item->salary }}

                            </td>

                            <td>
                                {{ $item->department }}
                            </td>

                        </tr>
                    </tbody>
                </table>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
