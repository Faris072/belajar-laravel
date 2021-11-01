<!doctype html>
<html lang="id">

<head>
    <title>{{ $title }}</title>

    @include('/parts/cdntop')

    <style>

    </style>
</head>

<body>
    @include('/parts/navbar')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 pr-0">
                <div class="container-fluid-xl bg-light pt-3">
                    <div class="container">
                        @yield('cdn')
                    </div>
                </div>
            </div>
            @include('parts/sidebarindex')
        </div>
    </div>
    @include('/parts/cdnjs')
</body>

</html>
