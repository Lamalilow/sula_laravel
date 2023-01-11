@extends('welcome')
@section('title', 'Регистрация')
@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col"></div>
            <div class="col-6">
                <form action="" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Логин</label>
                        <input type="text" name="login" class="form-control @error('login') is-invalid @enderror" id="exampleFormControlInput1" >
                        @error('login')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Имя</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="exampleFormControlInput1" >
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Пароль</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="exampleFormControlInput1" >
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Пароль повторно</label>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" id="exampleFormControlInput1" >
                        @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Возраст</label>
                        <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" id="exampleFormControlInput1" >
                        @error('age')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <label for="genderMale"
                               class="col-md-4 col-form-label text-md-right">Пол</label>
                        <div class="col-md-6 ">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender"
                                       id="male" value="м">
                                <label class="form-check-label" for="male">Муж</label>
                            </div>

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender"
                                       id="female" value="ж">
                                <label class="form-check-label" for="female">Жен</label>
                            </div>

                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror

                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <label for="country"
                               class="col-md-4 col-form-label text-md-right">Откуды вы?</label>

                        <div class="md-6">
                            <select class="form-control" id="city" name="city">
                                <option value="Челябинск">Челябинск</option>
                                <option value="Москва">Москва</option>
                                <option value="Екатеринбург">Екатеринбург</option>
                            </select>
                        </div>
                        @error('city')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputFile" class="form-label">Фотография</label>
                        <input name="photo" class="form-control @error('photo') is-invalid @enderror" type="file" id="inputFile" aria-describedby="invalidInputFile">
                        @error('photo') <div id="invalidInputFile" class="invalid-feedback"> {{ $message }} </div> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="inputDescription" class="form-label">Описание</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="inputDescription" rows="3" aria-describedby="invalidInputDescription"></textarea>
                        @error('description')
                            <div id="invalidInputDescription" class="invalid-feedback"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-check">
                        <input class="form-check-input @error('rules') is-invalid @enderror" type="checkbox" name="rules" id="flexCheckDefault">
                        <label class="form-check-label " for="flexCheckDefault">
                            Согласие на обработку персональных данных
                        </label>
                        @error('rules')
                        <p class="alert alert-danger">
                            {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary mb-3">Регистрация</button>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>
    </div>
@endsection
