<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = array('title', 'source', 'abstract','views','feature','content','user_id');

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function views()
    {
        return $this->hasMany('App\PostView');
    }


    /**
     * @param $ip
     * @return bool
     */
    public function isReadByIpToday($ip){
        $is_read = $this->views()->where('ip',$ip)->first();
        if($is_read){
            $now_time = Carbon::now();
            if ( $now_time->subHours(24)->lt($is_read->updated_at)){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    
    public function viewsIncrement($ip){
        $this->increment('views', 1);
        $post_view = $this->views()->where('ip',$ip)->first();

        if($post_view){
            $post_view->increment('views', 1);
        }else{
            $post_view = new PostView();
            $post_view['ip'] = $ip;
            $post_view['views'] = 1;
            $this->views()->save($post_view);
        }

    }
    

}
