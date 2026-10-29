<!DOCTYPE html>
<html lang="en">
<head>
{{-- bagian head --}}
@include('produk.partials.head')

<body>
    <div class="app">
        {{-- bagian sidebar --}}
        @include('produk.components.sidebar')

        {{-- main content  --}}
        @yield('content')
    </div>
</body>

</html>
