@extends('vendor.crud.single-page-templates.common.app')

@section('content')

	<h2>Posts</h2>

	@include('post.create')

	<table class="table table-striped grid-view-tbl">
	    
	    <thead>
		<tr class="header-row">
			{!!\Nvd\Crud\Html::sortableTh('id','post.index','Id')!!}
			{!!\Nvd\Crud\Html::sortableTh('post_author','post.index','Post Author')!!}
			{!!\Nvd\Crud\Html::sortableTh('post_title','post.index','Post Title')!!}
			{!!\Nvd\Crud\Html::sortableTh('post_content','post.index','Post Content')!!}
			{!!\Nvd\Crud\Html::sortableTh('post_excerpt','post.index','Post Excerpt')!!}
			{!!\Nvd\Crud\Html::sortableTh('guid','post.index','Guid')!!}
			{!!\Nvd\Crud\Html::sortableTh('post_type','post.index','Post Type')!!}
			{!!\Nvd\Crud\Html::sortableTh('post_status','post.index','Post Status')!!}
			{!!\Nvd\Crud\Html::sortableTh('created_at','post.index','Created At')!!}
			{!!\Nvd\Crud\Html::sortableTh('updated_at','post.index','Updated At')!!}
			<th></th>
		</tr>
		<tr class="search-row">
			<form class="search-form">
				<td><input type="text" class="form-control" name="id" value="{{Request::input("id")}}"></td>
				<td><input type="text" class="form-control" name="post_author" value="{{Request::input("post_author")}}"></td>
				<td><input type="text" class="form-control" name="post_title" value="{{Request::input("post_title")}}"></td>
				<td><input type="text" class="form-control" name="post_content" value="{{Request::input("post_content")}}"></td>
				<td><input type="text" class="form-control" name="post_excerpt" value="{{Request::input("post_excerpt")}}"></td>
				<td><input type="text" class="form-control" name="guid" value="{{Request::input("guid")}}"></td>
				<td><input type="text" class="form-control" name="post_type" value="{{Request::input("post_type")}}"></td>
				<td><input type="text" class="form-control" name="post_status" value="{{Request::input("post_status")}}"></td>
				<td><input type="text" class="form-control" name="created_at" value="{{Request::input("created_at")}}"></td>
				<td><input type="text" class="form-control" name="updated_at" value="{{Request::input("updated_at")}}"></td>
				<td style="min-width: 6em;">@include('vendor.crud.single-page-templates.common.search-btn')</td>
			</form>
		</tr>
	    </thead>

	    <tbody>
	    	@forelse ( $records as $record )
		    	<tr>
					<td>
						{{ $record->id }}
						</td>
					<td>
						<span class="editable"
							  data-type="text"
							  data-name="post_author"
							  data-value="{{ $record->post_author }}"
							  data-pk="{{ $record->{$record->getKeyName()} }}"
							  data-url="/post/{{ $record->{$record->getKeyName()} }}"
							  >{{ $record->post_author }}</span>
						</td>
					<td>
						<span class="editable"
							  data-type="text"
							  data-name="post_title"
							  data-value="{{ $record->post_title }}"
							  data-pk="{{ $record->{$record->getKeyName()} }}"
							  data-url="/post/{{ $record->{$record->getKeyName()} }}"
							  >{{ $record->post_title }}</span>
						</td>
					<td>
						<span class="editable"
							  data-type="text"
							  data-name="post_content"
							  data-value="{{ $record->post_content }}"
							  data-pk="{{ $record->{$record->getKeyName()} }}"
							  data-url="/post/{{ $record->{$record->getKeyName()} }}"
							  >{{ $record->post_content }}</span>
						</td>
					<td>
						<span class="editable"
							  data-type="text"
							  data-name="post_excerpt"
							  data-value="{{ $record->post_excerpt }}"
							  data-pk="{{ $record->{$record->getKeyName()} }}"
							  data-url="/post/{{ $record->{$record->getKeyName()} }}"
							  >{{ $record->post_excerpt }}</span>
						</td>
					<td>
						<span class="editable"
							  data-type="text"
							  data-name="guid"
							  data-value="{{ $record->guid }}"
							  data-pk="{{ $record->{$record->getKeyName()} }}"
							  data-url="/post/{{ $record->{$record->getKeyName()} }}"
							  >{{ $record->guid }}</span>
						</td>
					<td>
						<span class="editable"
							  data-type="text"
							  data-name="post_type"
							  data-value="{{ $record->post_type }}"
							  data-pk="{{ $record->{$record->getKeyName()} }}"
							  data-url="/post/{{ $record->{$record->getKeyName()} }}"
							  >{{ $record->post_type }}</span>
						</td>
					<td>
						<span class="editable"
							  data-type="text"
							  data-name="post_status"
							  data-value="{{ $record->post_status }}"
							  data-pk="{{ $record->{$record->getKeyName()} }}"
							  data-url="/post/{{ $record->{$record->getKeyName()} }}"
							  >{{ $record->post_status }}</span>
						</td>
					<td>
						{{ $record->created_at }}
						</td>
					<td>
						{{ $record->updated_at }}
						</td>
					@include( 'vendor.crud.single-page-templates.common.actions', [ 'url' => 'post', 'record' => $record ] )
		    	</tr>
			@empty
				@include ('vendor.crud.single-page-templates.common.not-found-tr',['colspan' => 11])
	    	@endforelse
	    </tbody>

	</table>

	@include('vendor.crud.single-page-templates.common.pagination', [ 'records' => $records ] )

<script>
	$(".editable").editable({ajaxOptions:{method:'PUT'}});
</script>
@endsection