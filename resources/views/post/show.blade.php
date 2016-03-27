@extends('vendor.crud.single-page-templates.common.app')

@section('content')

    <h2>Post: {{$post->post_author}}</h2>

    <ul class="list-group">

        <li class="list-group-item">
            <h4>Id</h4>
            <h5>{{$post->id}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Post Author</h4>
            <h5>{{$post->post_author}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Post Title</h4>
            <h5>{{$post->post_title}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Post Content</h4>
            <h5>{{$post->post_content}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Post Excerpt</h4>
            <h5>{{$post->post_excerpt}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Guid</h4>
            <h5>{{$post->guid}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Post Type</h4>
            <h5>{{$post->post_type}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Post Status</h4>
            <h5>{{$post->post_status}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Created At</h4>
            <h5>{{$post->created_at}}</h5>
        </li>
        <li class="list-group-item">
            <h4>Updated At</h4>
            <h5>{{$post->updated_at}}</h5>
        </li>
        
    </ul>

@endsection