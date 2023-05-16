@extends('layouts.app')


@include('shared.head')
<body>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-dark leading-tight">
            {{ __('Create order') }}
        </h2>
    </x-slot>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-12 col-md-9 col-lg-6">
    <form action="{{ route('superpowers.store')}}" method="post">
        @csrf
        <div class="mb-3">
        <label for="name" class="form-label text-white font-bold">Name *</label>
        <input type="text" name="name" class="form-control">
        </div>
        
        <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" cols="50" rows="5" class="form-control text-white font-bold"></textarea>
                </div>
      
   <!-- <button type="submit">Create Parents</button>-->
   <div class="text-end">
                    <button type="submit" class="btn btn-success">Create order</button>
                </div>
            </form>
        </div>
    </div>
</div>
</x-app-layout>
</body>
</html>