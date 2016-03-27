<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    public $guarded = ["id","created_at","updated_at"];

    public static function findRequested()
    {
        $query = Post::query();

        // search results based on user input
        \Request::input('id') and $query->where('id',\Request::input('id'));
        \Request::input('post_author') and $query->where('post_author','like','%'.\Request::input('post_author').'%');
        \Request::input('post_title') and $query->where('post_title','like','%'.\Request::input('post_title').'%');
        \Request::input('post_content') and $query->where('post_content',\Request::input('post_content'));
        \Request::input('post_excerpt') and $query->where('post_excerpt','like','%'.\Request::input('post_excerpt').'%');
        \Request::input('guid') and $query->where('guid','like','%'.\Request::input('guid').'%');
        \Request::input('post_type') and $query->where('post_type','like','%'.\Request::input('post_type').'%');
        \Request::input('post_status') and $query->where('post_status','like','%'.\Request::input('post_status').'%');
        \Request::input('created_at') and $query->where('created_at',\Request::input('created_at'));
        \Request::input('updated_at') and $query->where('updated_at',\Request::input('updated_at'));
        
        // sort results
        \Request::input("sort") and $query->orderBy(\Request::input("sort"),\Request::input("sortType","asc"));

        // paginate results
        return $query->paginate(15);
    }

    public static function validationRules( $attributes = null )
    {
        $rules = [
            'post_author' => 'required|string|max:255',
            'post_title' => 'required|string|max:255',
            'post_content' => 'required',
            'post_excerpt' => 'required|string|max:255',
            'guid' => 'required|string|max:255',
            'post_type' => 'required|string|max:255',
            'post_status' => 'required|string|max:255',
        ];

        // no list is provided
        if(!$attributes)
            return $rules;

        // a single attribute is provided
        if(!is_array($attributes))
            return [ $attributes => $rules[$attributes] ];

        // a list of attributes is provided
        $newRules = [];
        foreach ( $attributes as $attr )
            $newRules[$attr] = $rules[$attr];
        return $newRules;
    }

}
