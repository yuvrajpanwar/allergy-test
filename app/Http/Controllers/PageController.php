<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function itching()
{
    return view('itching'); // This will return the itching.blade.php view
}
public function hives()
{
    return view('hives'); // This will return the hives.blade.php view

}
// Add the rest of the methods here
public function sneezing()
{
    return view('sneezing'); // This will return the sneezing.blade.php view

}
public function wheezing()
{
    return view('wheezing'); // This will return the wheezing.blade.php view

}
//cough
public function cough()
{
    return view('cough'); // This will return the cough.blade.php view

}
//swolleneye
public function swolleneye()
{
    return view('swolleneye'); // This will return the swolleneye.blade.php view

}
//skirashes
public function skinrashes()
{
    return view('skinrashes'); // This will return the skinrashes.blade.php view
}
//swollenface
public function swollenface()
{
    return view('swollenface'); // This will return the swollenface.blade.php view

}
//runnynose
public function runnynose()
{
    return view('runnynose'); // This will return the runnynose.blade.php view

}
//chesttight
public function chesttight()
{
    return view('chesttight'); // This will return the chesttight.blade.php view

}
//shortnessbreath
public function shortnessbreath()
{
    return view('shortnessbreath'); // This will return the shortnessbreath.blade.php view

}
//swollenlips
public function swollenlips()
{
    return view('swollenlips'); // This will return the swollenlips.blade.php view

}
//allergy-symptoms
public function allergySymptoms()
{
    return view('allergysymptoms'); // This will return the allergy-symptoms.blade.php view

}

//allergy-panels
public function allergypanel()
{
    return view('allergypanel');
}


//food-intolerance
public function foodintolerance()
{
    return view('food-intolerance');

}
public function landing1()
{
    return view('landing1');
}

}