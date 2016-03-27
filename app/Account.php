<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Account extends Model {

    public $guarded = ["id","created_at","updated_at"];

    public static function findRequested()
    {
        $query = Account::query();

        // search results based on user input
        \Request::input('id') and $query->where('id',\Request::input('id'));
        \Request::input('account_login') and $query->where('account_login','like','%'.\Request::input('account_login').'%');
        \Request::input('account_pass') and $query->where('account_pass','like','%'.\Request::input('account_pass').'%');
        \Request::input('account_status') and $query->where('account_status',\Request::input('account_status'));
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
            'account_login' => 'required|string|max:255',
            'account_pass' => 'required|string|max:255',
            'account_status' => 'required',
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
