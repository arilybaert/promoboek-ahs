<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;

        $user = User::where('id', $id)->first();
        if($user->course_id === 2) {
            $files = Video::where('student_id', $id)->get();
        } else {
            $files = Image::where('student_id', $id)->get();
        }
        return view('backoffice.student', [
            'user' => $user,
            'files' => $files
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
                'thumbnail' => true,
                'href' => $r->href
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
                'thumbnail' => false,
                'href' => $r->href
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
        $user = Auth::user();
        return view('backoffice.student-new-image', [
            'user' => $user
            ]);
    }

    // upload image
    public function postUserNewImage(Request $r)
    {
        // dd($r->file->hashName());

        var_dump($r->file->hashName());

        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();

        $course_directory = $user->course->title_short;

        $r->file->store($course_directory, ['disk' => 'portfolio_files']);

        // compress image
        $filepath = public_path('/src/img/portfolio/'. $course_directory . '/' . $r->file->hashName());
        $mime = mime_content_type($filepath);
        $output = new \CURLFile($filepath, $mime, $r->file->hashName());
        $data = ["files" => $output];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://api.resmush.it/?qlty=50');
        curl_setopt($ch, CURLOPT_POST,1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            $result = curl_error($ch);
        }
        curl_close ($ch);

        $arr_result = json_decode($result);

        // store the optimized version of the image
        $ch = curl_init($arr_result->dest);
        $fp = fopen($filepath, 'wb');
        curl_setopt($ch, CURLOPT_FILE, $fp);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_exec($ch);
        curl_close($ch);
        fclose($fp);

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
    public function imageDelete(Image $image) {

        Storage::disk('portfolio_files')->delete(substr($image->url, 17));
        Image::find($image->id)->delete();


        return redirect()->route('student');
    }

    // upload video form
    public function createUserVideo()
    {
        return view('backoffice.student-new-video');
    }

    // upload image
    public function postUserNewVideo(Request $r)
    {

        $id = Auth::user()->id;
        $user = User::where('id', $id)->first();

        $course_directory = $user->course->title_short;
        $r->file->store($course_directory, ['disk' => 'portfolio_video_files']);
        $r->file_thumbnail->store($course_directory, ['disk' => 'portfolio_thumbnail_files']);
        $validationRules = [
            'title'=> 'required',
            'description'=> 'required',
            'file_thumbnail'=> 'required',
            'file'=> 'required',
        ];
        $data = [];
        /*
        Turn current image thumbnail on
        + all other off
        */
        if($r->thumbnail === 'on') {
            $video = Video::where('id', $r->id)->first();
            $videos = Video::where('student_id', $id)->get();
            foreach ($videos as $video) {
                $thumb_data = [
                    'thumbnail' => false
                ];
                $video->update($thumb_data);
            }
            $data = [
                'title' => $r->title,
                'content'=> $r->description,
                'url' => 'src/video/portfolio/' . $course_directory . '/' . $r->file->hashName(),
                'thumbnail' => true,
                'thumbnail_image' => 'src/img/thumbnails/' . $course_directory . '/' . $r->file_thumbnail->hashName(),
                'student_id' => $id
            ];
            $r->validate($validationRules);

        /*
        Turn current image thumbnail off
        */
        }else {

            $data = [
                'title' => $r->title,
                'content'=> $r->description,
                'url' => 'src/video/portfolio/' . $course_directory . '/' . $r->file->hashName(),
                'thumbnail_image' => 'src/img/thumbnails/' . $course_directory . '/' . $r->file_thumbnail->hashName(),
                'thumbnail' => false,
                'student_id' => $id
            ];
            $r->validate($validationRules);
        }
        $r->validate($validationRules);

        Video::create($data);


        return redirect()->route('student');

    }
    public function getUserVideo(Video $video)
    {
        return view('backoffice.student-video', [
            'video' => $video
        ]);
    }
    // update porfolio video
    public function postUserVideo(Video $video, Request $r)
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
            $video = Video::where('id', $r->id)->first();
            $videos = Video::where('student_id', $id)->get();
            foreach ($videos as $video) {
                $thumb_data = [
                    'thumbnail' => false
                ];
                $video->update($thumb_data);
            }
            $data = [
                'title' => $r->title,
                'content'=> $r->description,
                'thumbnail' => true
            ];
            $r->validate($validationRules);

        /*
        Turn current video thumbnail off
        */
        }else {

            $data = [
                'title' => $r->title,
                'content'=> $r->description,
                'thumbnail' => false
            ];
            $r->validate($validationRules);
        }


        if($r->id){
            $video = Video::where('id', $r->id)->first();
            $video->update($data);
        }

        return redirect()->route('student');
    }

    // delete video
    public function videoDelete(Video $video) {

        Storage::disk('portfolio_thumbnail_files')->delete(substr($video->thumbnail_image, 19));
        Storage::disk('portfolio_video_files')->delete(substr($video->url, 19));

        Video::find($video->id)->delete();

        return redirect()->route('student');
    }
    // show pending verification
    public function getPendingVerification()
    {
        return view('backoffice.student-pending-verification', [
            'sub_header' => 'Pending verification'
        ]);
    }
}
