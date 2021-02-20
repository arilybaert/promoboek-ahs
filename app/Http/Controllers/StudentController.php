<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;

        $user = User::where('id', $id)->first();
        $images = Image::where('student_id', $id)->get();
        return view('backoffice.student', [
            'user' => $user,
            'images' => $images
        ]);
    }

    // Update porfolio
    public function postUser(User $user, Request $r)
    {
        $validationRules = [
            'catchphrase'=> 'required',
            'bio'=> 'required',
        ];
        $data = [
            'catchphrase' => $r->catchphrase,
            'bio'=> $r->bio,
        ];
        $r->validate($validationRules);

        if($r->id){
            $user = User::where('id', $r->id)->first();
            $user->update($data);
        }

        return redirect()->route('student');
    }


    public function getUserImage(Image $image)
    {

        return view('backoffice.student-image', [
            'image' => $image
        ]);
    }

    // update porfolio image
    public function postUserImage(Image $image, Request $r)
    {
        $id = Auth::user()->id;

        $validationRules = [
            'title'=> 'required',
            'description'=> 'required',

        ];

        $data = [];

        /*
        Turn current image thumbnail on
        + all other off
        */
        if($r->thumbnail === 'on') {
            $image = Image::where('id', $r->id)->first();
            $images = Image::where('student_id', $id)->get();
            foreach ($images as $image) {
                $thumb_data = [
                    'thumbnail' => false
                ];
                $image->update($thumb_data);
            }
            $data = [
                'title' => $r->title,
                'tags' => $r->tags,
                'content'=> $r->description,
                'thumbnail' => true
            ];
            $r->validate($validationRules);

        /*
        Turn current image thumbnail off
        */
        }else {

            $data = [
                'title' => $r->title,
                'tags' => $r->tags,
                'content'=> $r->description,
                'thumbnail' => false
            ];
            $r->validate($validationRules);
        }


        if($r->id){
            $image = Image::where('id', $r->id)->first();
            $image->update($data);
        }

        return redirect()->route('student');
    }


    // upload image form
    public function createUserImage()
    {
        return view('backoffice.student-new-image');
    }

    // upload image
    public function postUserNewImage(Request $r)
    {

        var_dump($r->file->hashName());

        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();

        $course_directory = $user->course->title_short;
        $r->file->store($course_directory, ['disk' => 'portfolio_files']);

        $validationRules = [
            'title'=> 'required',
            'description'=> 'required',
        ];
        $data = [];
        /*
        Turn current image thumbnail on
        + all other off
        */
        if($r->thumbnail === 'on') {
            $image = Image::where('id', $r->id)->first();
            $images = Image::where('student_id', $id)->get();
            foreach ($images as $image) {
                $thumb_data = [
                    'thumbnail' => false
                ];
                $image->update($thumb_data);
            }
            $data = [
                'title' => $r->title,
                'tags' => $r->tags,
                'content'=> $r->description,
                'url' => 'src/img/portfolio/' . $course_directory . '/' . $r->file->hashName(),
                'thumbnail' => true,
                'student_id' => $id
            ];
            $r->validate($validationRules);

        /*
        Turn current image thumbnail off
        */
        }else {

            $data = [
                'title' => $r->title,
                'tags' => $r->tags,
                'content'=> $r->description,
                'url' => 'src/img/portfolio/' . $course_directory . '/' . $r->file->hashName(),
                'thumbnail' => false,
                'student_id' => $id
            ];
            $r->validate($validationRules);
        }
        $r->validate($validationRules);

        Image::create($data);


        return redirect()->route('student');

    }

    // delete image
    public function imageDelete(Request $r) {

        Image::find($r->id)->delete();

        return redirect()->route('student');
    }

    // show pending verification
    public function getPendingVerification()
    {
        return view('backoffice.student-pending-verification');
    }
}
