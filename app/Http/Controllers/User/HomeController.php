<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function blogs(){
        return view('blog.blog');
    }

    public function post1(){
        return view('blog.post-1');
    }

    public function post2(){
        return view('blog.post-2');
    }

    public function post3(){
        return view('blog.post-3');
    }

    public function post4(){
        return view('blog.post-4');
    }

    public function post5(){
        return view('blog.post-5');
    }

     public function services(){
        return view('ourServices.services');
    }



         public function brickPointing() {
         return view('ourServices.brick-pointing');
        }

        public function tuckpointing() {
            return view('ourServices.tuckpointing');
        }

        public function spotPointing() {
            return view('ourServices.spot-pointing');
        }

        public function brickGrinding() {
            return view('ourServices.brick-grinding');
        }

        public function brickRepair() {
            return view('ourServices.brick-repair-replacement');
        }

        public function stoopPorchRepair() {
            return view('ourServices.stoop-porch-repair');
        }

        public function chimneyRepair() {
            return view('ourServices.chimney-repair');
        }

        public function parapetRestoration() {
            return view('ourServices.brick-parapet-restoration');
        }

        public function brickWallRepair() {
            return view('ourServices.brick-wall-repair');
        }

        public function brickStepsRepair() {
            return view('ourServices.brick-steps-repair');
        }



}
