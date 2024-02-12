<x-layout>
    {{-- Header Start --}}
    <header class="container">
        <div class="header" id="header">
            <div class="title">
                <a href="/">Dashboard</a>
            </div>
            @include('partials._logout')
        </div>
    </header>
    {{-- Header End --}}

    {{-- Bar Start --}}
    <x-bar>
        <div class="bar">
            <div class="bar-text">
                <p>Manage List</p>
            </div>
        </div>
    </x-bar>
    {{-- Bar End --}}
</x-layout>