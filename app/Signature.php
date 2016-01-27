<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Signature extends Model {

    protected $fillable = [
        'name','website','officephone','fax','address','address2',
        'email','twitter','facebook','youtube',
        'published_at','skype',
        'user_id','image','jobtittle','phone','company',
        'googleplus','linkedin','instagram','flickr',
        'stackoverflow','github', 'style'

    ];

    public static $rules = array(
        'name'=>'required|min:3', 'jobtitle'=> 'required|min:3', 'email'=> 'required|email|min:5',
        'phone'=> 'required|min:8','address'=> 'required|min:3','address2'=> 'required|min:3',

    );

    protected $dates = ['published_at'];

    //setter
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }


    public function scopePublished($query)
    {
        $query->where('published_at','<=', Carbon::now());

    }


    public function scopeUnpublished($query)
    {
        $query->where('published_at','>', Carbon::now());

    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
