@extends('layouts.app')
@section('content')

                            @foreach ($list as $item)
                                {{ $item->email }}
                            @endforeach


@endsection
