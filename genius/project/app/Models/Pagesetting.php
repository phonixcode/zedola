<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use function GuzzleHttp\json_decode;

class Pagesetting extends Model
{
    protected $fillable = [
        'contact_success',
        'contact_email',
        'contact_title',
        'contact_text',
        'street',
        'phone',
        'fax',
        'email',
        'site',
        'phone_code',
        'login_banner',
        'login_title',
        'login_subtitle',
        'side_title',
        'side_text',
        'review_blog',
        'blog_subtitle',
        'blog_title',
        'blog_text',
        'about_photo',
        'about_photo1',
        'about_photo2',
        'about_photo3',
        'about_title',
        'about_text',
        'about_details',
        'about_link',
        'about_video_link',
        'footer_top_photo',
        'footer_top_title',
        'footer_top_text',
        'hero_title',
        'hero_subtitle',
        'hero_btn_url',
        'hero_link',
        'hero_photo',
        'call_title',
        'call_subtitle',
        'call_video_link',
        'call_phone',
        'transaction_title',
        'transaction_subtitle',
        'trade_title',
        'trade_subtitle',
        'newsletter_text',
        'latitude',
        'longitude',
        'home_module',
    ];

    public $timestamps = false;

    public function upload($name,$file,$oldname)
    {
        $file->move('assets/images',$name);
        if($oldname != null)
        {
            if (file_exists(public_path().'/assets/images/'.$oldname)) {
                unlink(public_path().'/assets/images/'.$oldname);
            }
        }
    }

    public function homeModuleCheck($value)
    {
        $sections = json_decode($this->home_module,true);
        if (in_array($value, $sections)){
            return true;
        }else{
            return false;
        }
    }

}
