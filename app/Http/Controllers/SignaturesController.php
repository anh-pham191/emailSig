<?php namespace App\Http\Controllers;

//use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Signature;
//use Illuminate\Http\Request;
use GeoIP;
use App;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class SignaturesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct()
    {
        $this->beforeFilter('locale');
    }


//    public function getIndex()
//    {
//        return view('main')
//            ->with('signatures', Signature::all());
//    }

    public function getIndex()
    {
        return view('signatures.index');
    }

    public function getAbout()
    {
        return view('signatures.about');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function postCreate()
    {
        $validator = Validator::make(Input::all(), Signature::$rules);

        if ($validator->passes()) {
            $signature = new Signature();
            $signature->name = Request::input('name');
            $signature->jobtitle = Input::get('jobtitle');
            $signature->email = Input::get('email');
            $signature->company = Input::get('company');
            $signature->phone = Input::get('phone');
            $signature->website = Input::get('website');
            $signature->officephone = Input::get('officephone');
            $signature->fax = Input::get('fax');
            $signature->address = Input::get('address');
            $signature->address2 = Input::get('address2');
            $signature->facebook = Input::get('facebook');
            $signature->twitter = Input::get('twitter');
            $signature->youtube = Input::get('youtube');
            $signature->skype = Input::get('skype');
            $signature->googleplus = Input::get('googleplus');
            $signature->linkedin = Input::get('linkedin');
            $signature->stackoverflow = Input::get('stackoverflow');
            $signature->github = Input::get('github');
            $signature->instagram = Input::get('instagram');

            if (Input::file()) {
                $image = Input::file('image');
//			$fileextension = Input::file('image')->getClientOriginalExtension();
                $filename = Input::file('image')->getClientOriginalName();
                $path = public_path('img/' . $filename);
//                $img->resize(intval($size), null, function($constraint) {
//                    $constraint->aspectRatio();
//                Image::make($image->getRealPath())->resize(468, 249)->save($path);

                $size = '200,200';
                Image::make($image->getRealPath())->resize(intval($size), null, function ($contstraint) {
                    $contstraint->aspectRatio();
                })->save($path);
                $signature->image = 'img/' . $filename;
            }
            $signature->save();
            $name = $signature->name;
            $jobtitle = $signature->jobtitle;
            $email = $signature->email;
            $company = $signature->company;
            $phone = $signature->phone;
            $website = $signature->website;
            $officephone = $signature->officephone;
            $fax = $signature->fax;
            $address = $signature->address;
            $address2 = $signature->address2;
            $facebook = $signature->facebook;
            $twitter = $signature->twitter;
            $youtube = $signature->youtube;
            $skype = $signature->skype;
            $googleplus = $signature->googleplus;
            $linkedin = $signature->linkedin;
            $stackoverflow = $signature->stackoverflow;
            $github = $signature->github;
            $instagram = $signature->instagram;
            $image2 = $signature->image;
            return view('signatures.result')->with('signatures', $signature)->with('name', $name)->with('image', $image2)
                ->with('jobtitle', $jobtitle)->with('email', $email)->with('company', $company)
                ->with('phone', $phone)->with('website', $website)->with('officephone', $officephone)
                ->with('fax', $fax)->with('address', $address)->with('address2', $address2)
                ->with('facebook', $facebook)->with('twitter', $twitter)->with('youtube', $youtube)
                ->with('skype', $skype)->with('googleplus', $googleplus)->with('linkedin', $linkedin)
                ->with('stackoverflow', $stackoverflow)->with('github', $github)->with('instagram', $instagram);
        }
        return view('signatures.index')->withErrors($validator)->with('signatures', Signature::all());
    }

    public function getLangEn()
    {
        $lang = 'vi';
        App::setLocale($lang);
        return view('signatures.index');

    }

    public function getLangVi()
    {
        $lang = 'vi';
        App::setLocale($lang);
        return view('signatures.index');
    }
}
