<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-black leading-tight">
            {{ __('Order') }}
        </h2>
    </x-slot>
@extends('layouts.master')

@section('botones')
<div class="row justify-content-center mb-4">
    <div class="col-12 col-md-9 col-lg-6">
        <a href="{{ route('superpowers.index') }}" class="btn btn-secondary"><< Volver</a>
    </div>
</div>
@endsection

@section('content')
<div class="row justify-content-center mb-4">
    <div class="col-12 col-md-9 col-lg-6">
    <h1 class="text-white" style="font-size: 36px">{{$order->name}}</h1>
        <p class="text-white">{{ $order->description }}</p>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-12 col-md-9 col-lg-6 text-end">
        <ul class="list-inline">
            <li class="list-inline-item">
                <a href="{{ route('superpowers.edit', $superpower->id) }}" class="btn btn-warning">Edit</a>
            </li>
            <li class="list-inline-item">
                <form action="{{ route('superpowers.destroy', $superpower->id) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                </form>
            </li>
        </ul>
    </div>
</div>
</x-app-layout>
@endsection