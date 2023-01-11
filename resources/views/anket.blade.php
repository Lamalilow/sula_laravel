@extends('welcome')
@section('title', 'Анкета')
@section('content')
    <div class="container mt-5">

        <div class="d-flex justify-content-center">
            <div class="d-flex flex-column ">
                <img src="/storage/dwdwdwd.png" alt="фотография профиля">
                <p>Имя</p>
                <p>Возраст</p>
                <p>Пол</p>
                <p>Город</p>
                <p>Описание</p>
                <div class="d-flex">
                    <button>Нравится</button>
                    <button>Не нравится</button>
                </div>
            </div>



        </div>

    </div>
@endsection
