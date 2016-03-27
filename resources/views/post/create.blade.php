<div class="panel-group col-md-6 col-sm-12" id="accordion" style="padding-left: 0">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    <i class="fa fa-plus"></i>
                    Add a New Post                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">

                <form action="{{ url('/post') }}" method="post">

                    {{ csrf_field() }}

                    {!! \Nvd\Crud\Form::input('post_author','text')->show() !!}

                    {!! \Nvd\Crud\Form::input('post_title','text')->show() !!}

                    {!! \Nvd\Crud\Form::input('post_content','text')->show() !!}

                    {!! \Nvd\Crud\Form::input('post_excerpt','text')->show() !!}

                    {!! \Nvd\Crud\Form::input('guid','text')->show() !!}

                    {!! \Nvd\Crud\Form::input('post_type','text')->show() !!}

                    {!! \Nvd\Crud\Form::input('post_status','text')->show() !!}

                    <button type="submit" class="btn btn-primary">Create</button>

                </form>

            </div>
        </div>
    </div>
</div>