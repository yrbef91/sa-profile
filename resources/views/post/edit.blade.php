@extends('vendor.crud.single-page-templates.common.app')

@section('content')

    <h2>Update Post: {{$post->post_author}}</h2>

    <form action="{{ url('/post/' . $post->id) }}" method="post">

        {{ csrf_field() }}

        {{ method_field("PUT") }}

        {!! \Nvd\Crud\Form::input('post_author','text')->model($post)->show() !!}

        {!! \Nvd\Crud\Form::input('post_title','text')->model($post)->show() !!}

        {!! \Nvd\Crud\Form::input('post_content','text')->model($post)->show() !!}

        {!! \Nvd\Crud\Form::input('post_excerpt','text')->model($post)->show() !!}

        {!! \Nvd\Crud\Form::input('guid','text')->model($post)->show() !!}

        {!! \Nvd\Crud\Form::input('post_type','text')->model($post)->show() !!}

        {!! \Nvd\Crud\Form::input('post_status','text')->model($post)->show() !!}

        <button type="submit" class="btn btn-default">Submit</button>

    </form>

@endsection