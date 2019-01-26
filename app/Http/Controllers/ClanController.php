<?php

namespace App\Http\Controllers;

use App\Clan;
use App\User;
use Illuminate\Http\Request;

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
}
