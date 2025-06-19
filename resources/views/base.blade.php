<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MDC Office Evaluation Portal</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">

        <style>
            .rating-item:has(.form-check-input:checked) {
                background-color: #1e738a !important;
                border: 1px solid #0b4498 !important;
                color: white !important;
                font-weight: bold !important;
            }
        </style>
    </head>
    <body>


        @include('_nav')

        @if ($errors->any())
            <div class="alert alert-danger mx-3 mt-3">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success mx-3 mt-3">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')


        <footer class="bg-primary text-white text-center py-3 mt-auto">
                &copy; {{ date('Y') }} Mater Dei College &mdash; All Rights Reserved
            </footer>
        </div>

        <!-- Button trigger modal -->

        <script src="{{asset('bootstrap-5.3.3-dist/js/bootstrap.bundle.js')}}"></script>
        @stack('scripts')
    </body>
</html>
