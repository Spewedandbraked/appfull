@extends('layouts.layout')
@section('contains')
    <div style="display: flex;   justify-content: space-evenly;
    align-content: center;
    align-items: center;width: 45%;
    margin: 0 auto;
    min-width: 210px; flex-wrap: wrap; max-width:610px;">
        @include('includes.buttonnav', ['name' => 'Редактировать группы'])
        @include('includes.buttonnav', ['name' => 'Добавить студентов'])
        @include('includes.buttonnav', ['name' => 'Редактировать рассписание'])
        @include('includes.buttonnav', ['name' => 'Смотреть рассписание'])
    </div>
@endsection