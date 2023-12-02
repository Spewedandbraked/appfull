@extends('layouts.layout')
@section('contains')
    <div style="display: flex;   justify-content: space-evenly;
    align-content: center;
    align-items: center;width: 45%;
    margin: 0 auto;
    min-width: 210px; flex-wrap: wrap; max-width:610px;">
    </div>
    <div style="display: flex;   justify-content: space-evenly;
    align-content: center;
    align-items: center;width: 45%;
    margin: 0 auto;
    min-width: 210px; flex-wrap: wrap; max-width:610px;">
    @foreach ($groups as $item)   
        <div style="display: flex;   justify-content: space-evenly;
        width: 100%;    
        align-content: start;
        flex-direction: column;
        background-color: antiquewhite;
        margin-bottom: 20px;
        min-width: 210px; flex-wrap: wrap; max-width:610px;">
            <p>Имя игрппы:{{ $item->name }} </p>
            <p>Обзывалка дурачков этих:{{ $item->leader }}</p>
            <form action="{{route('groups.edit', $item->id)}}"><button style="width:250px; margin:2px;">Редактировать группу:</button></form>
            <form action="{{route('groups.show', $item->id)}}"><button style="width:250px; margin:2px;">Посмотреть группу:</button></form>
        </div>
    @endforeach
    </div>
@endsection