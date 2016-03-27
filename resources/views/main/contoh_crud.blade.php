@extends('vendor.crud.single-page-templates.common.app')

@section('content')

	<h2>Customers</h2>

	@include('customer.create')

	<div class="col-md-12" style="padding-left: 0">
		<table class="table table-striped grid-view-tbl">
			
			<thead>
			<tr class="header-row">
				{!!\Nvd\Crud\Html::sortableTh('id','customer.index','Id')!!}
				{!!\Nvd\Crud\Html::sortableTh('title','customer.index','Title')!!}
				{!!\Nvd\Crud\Html::sortableTh('body','customer.index','Body')!!}
				{!!\Nvd\Crud\Html::sortableTh('created_at','customer.index','Created At')!!}
				{!!\Nvd\Crud\Html::sortableTh('updated_at','customer.index','Updated At')!!}
				<th></th>
			</tr>
			<tr class="search-row">
				<form class="search-form">
					<td><input type="text" class="form-control" name="id" value="{{Request::input("id")}}"></td>
					<td><input type="text" class="form-control" name="title" value="{{Request::input("title")}}"></td>
					<td><input type="text" class="form-control" name="body" value="{{Request::input("body")}}"></td>
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
								  data-name="title"
								  data-value="{{ $record->title }}"
								  data-pk="{{ $record->{$record->getKeyName()} }}"
								  data-url="/customer/{{ $record->{$record->getKeyName()} }}"
								  >{{ $record->title }}</span>
							</td>
						<td>
							<span class="editable"
								  data-type="textarea"
								  data-name="body"
								  data-value="{{ $record->body }}"
								  data-pk="{{ $record->{$record->getKeyName()} }}"
								  data-url="/customer/{{ $record->{$record->getKeyName()} }}"
								  >{{ $record->body }}</span>
							</td>
						<td>
							{{ $record->created_at }}
							</td>
						<td>
							{{ $record->updated_at }}
							</td>
						@include( 'vendor.crud.single-page-templates.common.actions', [ 'url' => 'customer', 'record' => $record ] )
					</tr>
				@empty
					@include ('vendor.crud.single-page-templates.common.not-found-tr',['colspan' => 6])
				@endforelse
			</tbody>

		</table>
	</div>

	@include('vendor.crud.single-page-templates.common.pagination', [ 'records' => $records ] )

<script>
	$(".editable").editable({ajaxOptions:{method:'PUT'}});
</script>
@endsection