<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index() {
        return view('members.index');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
        ]);

        Member::create($validated);
        return redirect()->route('members.index')->with('success', 'Anggota berhasil disimpan.');
    }


}
