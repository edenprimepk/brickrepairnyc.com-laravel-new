<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function ContactUs()
    {
        return view('contact-us');
    }
    public function ourServices()
    {
        return view('ourServices.our-services');
    }
    public function brickPointing()
    {
        return view('ourServices.brick-pointing');
    }

    public function tuckpointing()
    {
        return view('ourServices.tuckpointing');
    }

    public function spotPointing()
    {
        return view('ourServices.spot-pointing');
    }

    public function brickGrinding()
    {
        return view('ourServices.brick-grinding');
    }

    public function brickRepair()
    {
        return view('ourServices.brick-repair-replacement');
    }

    public function stoopPorchRepair()
    {
        return view('ourServices.stoop-porch-repair');
    }

    public function chimneyRepair()
    {
        return view('ourServices.chimney-repair');
    }

    public function parapetRestoration()
    {
        return view('ourServices.brick-parapet-restoration');
    }

    public function brickWallRepair()
    {
        return view('ourServices.brick-wall-repair');
    }

    public function brickStepsRepair()
    {
        return view('ourServices.brick-steps-repair');
    }
    public function PrivacyPolicy()
    {
        return view('privacy-policy');
    }
    public function TermsofUse()
    {
        return view('terms-of-use');
    }
}
