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

    {{-- Main Content Start --}}
    <main class="container">
        <div class="season-list-container">
            {{-- Mobile Season List --}}
            <div class="season-list-mobile">
                <div class="season-list-year">
                    <p>2024</p>
                </div>
                <div class="season-list-period">
                    <p>Winter 2024</p>
                    <a href="/dashboard/season/2024/winter"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <hr>
                <div class="season-list-period">
                    <p>Spring 2024</p>
                    <a href="/dashboard/season/2024/spring"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <hr>
                <div class="season-list-period">
                    <p>Summer 2024</p>
                    <a href="/dashboard/season/2024/summer"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <hr>
                <div class="season-list-period">
                    <p>Fall 2024</p>
                    <a href="/dashboard/season/2024/fall"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>

            <div class="season-list-mobile">
                <div class="season-list-year">
                    <p>2023</p>
                </div>
                <div class="season-list-period">
                    <p>Winter 2023</p>
                    <a href="/dashboard/season/2023/winter"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <hr>
                <div class="season-list-period">
                    <p>Spring 2023</p>
                    <a href="/dashboard/season/2023/spring"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <hr>
                <div class="season-list-period">
                    <p>Summer 2023</p>
                    <a href="/dashboard/season/2023/summer"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
                <hr>
                <div class="season-list-period">
                    <p>Fall 2023</p>
                    <a href="/dashboard/season/2023/fall"><i class="fa-solid fa-chevron-right"></i></a>
                </div>
            </div>

            {{-- Dekstop Season List --}}
            <div class="season-list-dekstop">
                <div class="season-list-period-dekstop">
                    <a href="/dashboard/season/2024/winter">
                        <p>Winter 2024</p>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
                <div class="season-list-period-dekstop">
                    <a href="/dashboard/season/2024/spring">
                        <p>Spring 2024</p>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
                <div class="season-list-period-dekstop">
                    <a href="/dashboard/season/2024/summer">
                        <p>Summer 2024</p>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
                <div class="season-list-period-dekstop">
                    <a href="/dashboard/season/2024/fall">
                        <p>Fall 2024</p>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
            </div>

            <div class="season-list-dekstop">
                <div class="season-list-period-dekstop">
                    <a href="/dashboard/season/2023/winter">
                        <p>Winter 2023</p>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
                <div class="season-list-period-dekstop">
                    <a href="/dashboard/season/2023/spring">
                        <p>Spring 2023</p>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
                <div class="season-list-period-dekstop">
                    <a href="/dashboard/season/2023/summer">
                        <p>Summer 2023</p>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
                <div class="season-list-period-dekstop">
                    <a href="/dashboard/season/2023/fall">
                        <p>Fall 2023</p>
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </main>
    {{-- Main Content End --}}
</x-layout>