<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Profile;

class ImageUploadController extends Controller
{
    public function index($user_id){
        $imageURL = Profile::where('user_id',$user_id)->value('image_url');
        return view('users/image',[
            'user_id'=>$user_id,
            'image_url'=>$imageURL
        ]);
    }   
    
    public function upload(Request $request){
    
        request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'user_id' => 'required'
        ]);

        $imageName = time().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);
        
        if(Profile::where('user_id',$request->user_id)->count()>0){
            $imageURL = Profile::where('user_id',$request->user_id)->value('image_url');
            $fileName = str_replace($imageURL, asset('images').'/', '');
            Profile::where('user_id',$request->user_id)->delete();
            Storage::delete($fileName);
        }

        $profile = new Profile;
        $profile->user_id = $request->user_id;
        $profile->image_url = asset('images').'/'.$imageName;
        $profile->save();

        return back()
            ->with('success','You have successfully upload image.')
            ->with('profile',$profile);
    }
}
