@extends('layouts.layout')
@section('contains')
    <div style="display: flex;   justify-content: space-evenly;
    align-content: center;
    align-items: center;width: 45%;
    margin: 0 auto;
    min-width: 210px; flex-wrap: wrap; max-width:610px;">
        @include('includes.buttonnav', ['name' => 'Создать группу',                             'link' => route('groups.create')])
        @include('includes.buttonnav', ['name' => 'Редактировать группу и добавить студентов',  'link' => route('groups.edit', 1)])
        @include('includes.buttonnav', ['name' => 'Посмотреть группы',                          'link' => route('groups.show', 1)])
        @include('includes.buttonnav', ['name' => 'Группы индекс',                              'link' => route('groups.index')])
    </div>
@endsection