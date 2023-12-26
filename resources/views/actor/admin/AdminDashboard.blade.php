@extends('layouts.default')

@section('title', 'Admin')

@section('content')
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/logout" id="logout">Logout</a></li>
    </ul>
    <h1>Halo, {{ auth()->user()->name }}</h1>

@endsection

@push('scripts')
    <script>
        const btnLogout = document.getElementById('logout');
        btnLogout.addEventListener('click', (e) => {
            e.preventDefault();
            const url = e.target.getAttribute('href');
            const form = document.createElement('form');
            form.action = url;
            form.method = 'POST';
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
            const csrfInput = document.createElement('input');
            csrfInput.type = 'hidden';
            csrfInput.name = '_token';
            csrfInput.value = csrfToken;
            form.appendChild(csrfInput);
            document.body.appendChild(form);
            form.submit();
        });
    </script>
@endpush
