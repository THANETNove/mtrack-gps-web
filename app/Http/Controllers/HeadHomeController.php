<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeadHome;
use Illuminate\Support\Carbon; // เพิ่มเพื่อใช้งาน Carbon



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


        $file = $request->file('image');
        $filename = date('i_d_m_Y') . '_' . time() . '.' . $file->getClientOriginalExtension();
        $filePath = '/assets/img/profile/' . $filename;
        $file->move(public_path('/assets/backend/images/imgs/'), $filename);
        $member->image = $filePath;
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