@extends('form')

<?php $method = 'post' ?>

@section('toolbar')
    <?php
        JToolbarHelper::save('store')
    ?>
@endsection

@section('form')
    <label>Title</label>
    <input type="text" name="title" placeholder="Example title" />
    <label>Body</label>
    <textarea name="body" placeholder="Example body"></textarea>
@endsection