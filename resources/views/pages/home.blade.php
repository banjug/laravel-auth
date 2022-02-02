@extends('layouts.main-layout')
@section('content')
    <main>
        @auth
            <h2>Benvenuto {{Auth::user()->name}}</h2>
            <a href="{{route('logout')}}" class="btn btn-primary">Logout</a>
        @else
            <section>
                <h2>Effettua la registrazione</h2>
                <form action="{{ route('register') }}" method="POST">
                    @method('POST')
                    @csrf

                    <div>
                        <label for="name">Nome</label>
                        <input type="text" name="name">
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password">
                    </div>
                    <div>
                        <label for="password_confirmation">Conferma Password</label>
                        <input type="password" name="password_confirmation">
                    </div>
                    <input type="submit" value="Registrati" class="btn btn-primary">
                </form>
            </section>
            <section>
                <h2>Effettua il login</h2>
                <form action="{{ route('login') }}" method="POST">
                    @method('POST')
                    @csrf

                                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password">
                    </div>
                    
                    <input type="submit" value="Login" class="btn btn-primary">
                </form>
            </section>
        @endauth
    </main>
@endsection