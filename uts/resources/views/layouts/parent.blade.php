<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<body>
    <div id="app">
        @section('sidebar')
        Ini adalah master sidebar
        @show
        <main class="py-4">
            @yield('content')
        </main>
        <main class="py-4">
           <p align=center>Hallo nama saya Sahira Rana Zafirah, sekarang saya sedang
			mengenyam pendidikan di Politeknik Negeri Malang, jurusan M.Informatika
			Teknologi Informasi. Disini saya akan mendalami web dan pemrograman dengan tekun.
			Semoga lancar ya!</p>
        </main>
        <main class="py-4">
            <br><br><br><br><br>
        <p align=center>ABOUT : </p>
            @extends('about')
        </main>
    </div>
</body>
</html>