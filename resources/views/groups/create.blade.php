@extends('layouts.layout')
@section('contains')
<form style="display: flex;   justify-content: space-evenly;
align-content: center;
align-items: center;width: 45%;
margin: 0 auto;
min-width: 210px; flex-wrap: wrap; max-width:610px;" action="{{ route('groups.store') }}" method="post">
@CSRF
<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Введите имя группе:</label>
    <input type="text" class="form-control" name="newgroupname" placeholder="Имя группы">
  </div>
  <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Введите обзывалку группе:</label>
    <input type="text" class="form-control" name="newgroupleadname" placeholder="Смешная обзывалка">
  </div>
  <button type="submit" class="btn btn-primary">Создать группу:</button>

</form>
@endsection