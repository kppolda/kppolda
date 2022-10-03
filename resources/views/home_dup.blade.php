@if (Auth::check())

    @if (Auth::user()->username === 'admin')
        @include('admin.home')
    @else
        @include('auth.data-personil')
    @endif

@else
    @include('login')
@endif
