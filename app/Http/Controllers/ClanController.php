<?php

namespace App\Http\Controllers;

use App\Clan;
use App\Image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClanController extends Controller
{
    public function index()
    {
        $clans = Clan::all();
        return response()->json(['data' => $clans]);
    }

    public function clansMembers($id)
    {
        $members = User::where('clan_id',$id)->get()->toArray();
        return response()->json(['data' => $members]);
    }

    public function uploadFile(Request $request)
    {
        $path = $request->file('file')->store('avatars','public');
        $avatar = new Image();
        $avatar->user_id = auth()->id();
        $avatar->image = $path;
        $avatar->save();

        return response()->json(['data' => $path]);
    }
}
