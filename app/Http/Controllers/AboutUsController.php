<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutUs;
use Illuminate\Support\Facades\DB;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataHeadHomes = DB::table('about_us')->get();

        // หากมีข้อมูลใน table ให้โยนไปที่ index
        return view('backend.aboutUs.index', ['dataHeadHomes' => $dataHeadHomes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.aboutUs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'image' => ['required', 'image', 'mimes:jpg,png,jpeg,webp'],
            'details' => 'nullable|string',
        ], [
            // 'image.required' => 'กรุณาอัปโหลดภาพ',
            'image.image' => 'ไฟล์ที่เลือกต้องเป็นภาพ',
            'image.mimes' => 'ภาพต้องเป็นไฟล์ประเภท jpg, png, jpeg หรือ webp',

        ]);
        $member = new AboutUs;
        $member->details = $request['details'];



        $file = $request->file('image');
        $filename = date('i_d_m_Y') . '_' . time() . '.' . $file->getClientOriginalExtension();
        $filePath = '/assets/backend/images/imgs/' . $filename;
        $file->move(public_path('/assets/backend/images/imgs/'), $filename);
        $member->image = $filePath;
        $member->save();


        return redirect('about-us')->with('message', "บันทึกสำเร็จ");
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
        $dataHeadHomes =  AboutUs::find($id);


        return view('backend.aboutUs.edit', ['dataHeadHomes' => $dataHeadHomes]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $request->validate([
            'image' => ['nullable', 'image', 'mimes:jpg,png,jpeg,webp'/* , 'dimensions:width=1900,height=1253' */],
            'details' => 'nullable|string',
            'url' => ['nullable', 'url'],
        ], [
            // 'image.required' => 'กรุณาอัปโหลดภาพ',
            'image.image' => 'ไฟล์ที่เลือกต้องเป็นภาพ',
            'image.mimes' => 'ภาพต้องเป็นไฟล์ประเภท jpg, png, jpeg หรือ webp',
            'url.url' => 'กรุณากรอก URL ที่ถูกต้อง',
            /*  'image.dimensions' => 'ภาพต้องมีขนาด 1900x1253 พิกเซล', */
        ]);


        $member =   AboutUs::find($id);
        $member->details = $request['details'];


        if ($request->hasFile('image')) {

            if ($member->image) {
                $existingImagePath = public_path($member->image);

                if (file_exists($existingImagePath)) {
                    unlink($existingImagePath);
                }
            }

            $file = $request->file('image');
            $filename = date('i_d_m_Y') . '_' . time() . '.' . $file->getClientOriginalExtension();
            $filePath = '/assets/backend/images/imgs/' . $filename;
            $file->move(public_path('/assets/backend/images/imgs/'), $filename);
            $member->image = $filePath;
        }
        $member->save();


        return redirect('about-us')->with('message', "บันทึกสำเร็จ");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}