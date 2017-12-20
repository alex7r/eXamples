@extends('crud.edit')
@php
    /** @var \Joomplace\X\Model $item */
@endphp
@section('field.body')
    <label>@lang($item->getLabelFor('body'))</label>
    <textarea name="body" placeholder="@lang($item->getPlaceholderFor('body'))">{{$item->body}}</textarea>
@endsection
