<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    //
    public function index() {
        dd(time());
    }

    public function upload() {

    }

    public function delete($video_id) {
        dd($video_id);
    }

}
