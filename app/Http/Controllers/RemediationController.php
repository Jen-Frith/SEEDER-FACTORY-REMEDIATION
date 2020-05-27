<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RemediationController extends Controller
{
    
public function index(){

// echo('je vous confirme que vous êtes bien dans l index de la pomme =)');
$pomme='je vous confirme que vous êtes bien dans l index de la pomme =)';

// echo($pomme);
// }
return view('pagesTest/pomme', compact('pomme'));

}





}