<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeadHome;

class HeadHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.head_home');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,webp', 'dimensions:width=1900,height=1253'],
            'details' => 'nullable|string',
            'url' => ['nullable', 'url'],
        ], [
            // 'image.required' => 'กรุณาอัปโหลดภาพ',
            'image.image' => 'ไฟล์ที่เลือกต้องเป็นภาพ',
            'image.mimes' => 'ภาพต้องเป็นไฟล์ประเภท jpg, png, jpeg หรือ webp',
            'url.url' => 'กรุณากรอก URL ที่ถูกต้อง',
            'image.dimensions' => 'ภาพต้องมีขนาด 1900x1253 พิกเซล',
        ]);
        $member = new HeadHome;
        $member->details = $request['details'];
        $member->url = $request['url'];


        $dateImg = [];
        if ($request->hasFile('image')) {
            $imagefile = $request->file('image');

            foreach ($imagefile as $image) {
                $data =   $image->move(public_path() . '/backend/imgs/', $randomText . "" . $image->getClientOriginalName());
                $dateImg[] =  $randomText . "" . $image->getClientOriginalName();
            }
        }
        $member->image = json_encode($dateImg);
        $member->save();


        return redirect('home')->with('message', "บันทึกสำเร็จ");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}