<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function home()
    {
        return view('member.template.body', [
            'seoTitle' => 'gopizza — selling pizza',
            'seoDescription' => 'gopizza: selling pizza. Fresh, hot, and delivered fast.',
            'seoImage' => asset('favicon.ico'),
            'content' => 'member.home',
        ]);
    }

    public function story()
    {
        return view('member.template.body', [
            'content' => 'member.story',
        ]);
    }

    public function contact()
    {
        return view('member.template.body', [
            'content' => 'member.contact',
        ]);
    }

    public function menu()
    {
        return view('member.template.body', [
            'content' => 'member.menu',
        ]);
    }

    public function event()
    {
        return view('member.template.body', [
            'content' => 'member.event',
        ]);
    }
}


