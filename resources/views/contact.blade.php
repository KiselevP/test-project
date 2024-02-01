@extends('layout.app')

@section('title-block')
    Страница контактов
@endsection

@section('content')
    <h1>Страница контактов</h1>

    <form action="{{ route('contact-form') }}" method="post">
    @csrf

        <div class="form-group">
            <label for="name">Ведите имя</label>
            <input class="form-control" type="text" name="name" placeholder="Введите имя" id="name">
        </div>

        <div class="form-group">
            <label for="email">Ведите email</label>
            <input class="form-control" type="text" name="email" placeholder="Введите email" id="email">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input class="form-control" type="text" name="subject" placeholder="Тема сообщения" id="subject">
        </div>

        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea class="form-control" name="message" placeholder="Введите сообщение" id="message"></textarea>
        </div>

        <button class="btn btn-success" type="submit">Отправить</button>
    </form>
@endsection
