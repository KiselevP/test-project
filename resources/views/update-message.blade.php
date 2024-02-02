@extends('layout.app')

@section('title-block')
    Обновление записи
@endsection

@section('content')
    <h1>Обновление записи</h1>

    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
    @csrf

        <div class="form-group">
            <label for="name">Ведите имя</label>
            <input class="form-control" type="text" name="name" value="{{ $data->name }}" placeholder="Введите имя" id="name">
        </div>

        <div class="form-group">
            <label for="email">Ведите email</label>
            <input class="form-control" type="text" name="email" value="{{ $data->email }}" placeholder="Введите email" id="email">
        </div>

        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input class="form-control" type="text" name="subject" value="{{ $data->subject }}" placeholder="Тема сообщения" id="subject">
        </div>

        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea class="form-control" name="message" placeholder="Введите сообщение" id="message">{{ $data->message }}</textarea>
        </div>

        <button class="btn btn-success" type="submit">Обновить</button>
    </form>
@endsection
