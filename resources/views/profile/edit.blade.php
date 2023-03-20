@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Profile') }}
        </h2>
        <div class="card p-4 mb-4 bg-white shadow rounded-lg">

            @include('partials.user-form', [
                'specializations' => $specializations,
                'title' => 'Edit',
                'method' => 'put',
                'routeName' => 'profile.edit',
            ])

        </div>

        <div class="card p-4 mb-4 bg-white shadow rounded-lg">

            @include('partials.profile-form', [
                'title' => 'Edit',
                'method' => 'put',
                'routeName' => 'profile.edit',
            ])

        </div>

        <div class="card p-4 mb-4 bg-white shadow rounded-lg">


            @include('profile.partials.update-password-form')

        </div>

        <div class="card p-4 mb-4 bg-white shadow rounded-lg">


            @include('profile.partials.delete-user-form')

        </div>
    </div>
@endsection
