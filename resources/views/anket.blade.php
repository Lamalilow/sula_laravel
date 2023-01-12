@extends('welcome')
@section('title', 'Анкета')
@section('content')
    <div class="container">
        <div class="row">

            @if($user->info->photo == null)
                <div class="col-8 offset-2 text-center" id="no_picture">
                    <h1>Please complete your profile by adding a profile picture!</h1>
                </div>
            @else
                <div class="row justify-content-center">
                    <div class="col-6 text-right">
                            <img class="d-block w-100" src="{{'public/storage/'.$otherUser->info->photo }}" alt="фото профиля">

                    </div>
                    <div class="col-6">
                        <h2>{{ $otherUser->info->name . ' ' . $otherUser->info->surname . ', ' . $otherUser->info->age }}</h2>
                        <br>
                        <div class="row">
                            <div class="col-4">
                                <h5>Город: {{ $otherUser->info->city }}</h5>
                            </div>
                            <div class="col-4">
                                <h5>Возраст: {{ $otherUser->info->age }}</h5>
                            </div>
                            <div class="col-4">
                                <h5>Пол: {{ $otherUser->info->gender }}</h5>
                            </div>
                        </div>
                        <br>
                        <h3>Обо мне:</h3>
                        <p id="description">{{ $otherUser->info->description}}</p>
                        <div class="row reaction">
                            <div class="col-4">
                                <form action="#" method="post">
                                    @csrf
                                    <button class="btn" type="submit"><img
                                            src="{{ $likeEmoji }}"
                                            alt="Like button picture"
                                            id="like_button"></button>
                                </form>
                            </div>

                            <div class="col-4 offset-4">
                                <form action="#" method="post">
                                    @csrf
                                    <button class="btn" type="submit"><img
                                            src="{{ $dislikeEmoji }}"
                                            alt="Dislike button picture"
                                            id="dislike_button"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

    </div>
@endsection
<style>
    .row.justify-content-center {
        width: 100%;
    }

    #no_picture {
        padding-top: 30px;
    }

    .col-6.text-right img {
        width: 100%;
        max-height: 100%;
        border-radius: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    #description {
        font-size: 18px;
    }

    #like_button {
        width: 100px;
    }

    #dislike_button {
        width: 100px;
    }
</style>

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
