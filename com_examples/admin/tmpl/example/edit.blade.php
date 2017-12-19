@extends('form')

<?php $method = 'put' ?>

@section('toolbar')
    <?php
    JToolbarHelper::save('update')
    ?>
@endsection

@section('form')
    <input type="hidden" name="id" value="{{$item->id}}">
    <label>Title</label>
    <input type="text" name="title" placeholder="Example title" value="{{$item->title}}"/>
    <label>Body</label>
    <textarea name="body" placeholder="Example body">{{$item->body}}</textarea>
@endsection