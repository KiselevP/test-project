@extends('layout.app')

@section('title-block')
    Главная страница
@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>Вариантов создания страницы-заглушки несколько. Выбор зависит, например, от того, работает ли сайт на готовой CMS,
    есть ли под нее соответствующие плагины и т.д. Но в целом, заглушка является полноценной страницей сайта и к ее разработке
    стоит подходит аналогичным образом. Первоначально проектируется прототип шаблона. На нем в графическом виде располагаются
    элементы будущей заглушки, также прорабатывается юзабилити. Далее, на основе прототипа создается макет шаблона с уже
    законченным оформлением.</p>
@endsection

@section('aside')
    @parent
    <p>Дополнительный текст</p>
@endsection
