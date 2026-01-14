<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\DesignExpertise;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;


class DesignExpController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:designexp-index,admin');
        $this->middleware('permission:designexp-store,admin')->only('store');
        $this->middleware('permission:designexp-update,admin')->only(['edit', 'update', 'updateStatus']);
        $this->middleware('permission:designexp-delete,admin')->only('destroy');
    }
    /** 
     * Display a listing of the resource.
     */
    public function index()
    {
        $designexp = DesignExpertise::first();
        return view('backend.blade.pages.designexp', compact('designexp'));
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
    public function store(Request $data)
    {
        $dir = getDirectoryLink('homepage/designexp');
        createDirectory($dir);

        $imageName = null;

        if (!empty($data->image)) {

            $image = $data->image;
            $ext   = strtolower($image->getClientOriginalExtension());
            $imageName = 'designexp' . time() . '.' . $ext;
            $imagePath = $dir . '/' . $imageName;

            // ✅ SVG → store directly
            if ($ext === 'svg') {
                $image->move($dir, $imageName);
            }
            // ✅ PNG / JPG → Intervention
            else {
                $manager = new ImageManager(new Driver());
                $manager
                    ->read($image)
                    ->save($imagePath, 100);
            }
        }

        $create = DesignExpertise::updateOrCreate(
            ['id' => 1],   // condition (unique key)
            [
                'title'             => $data->title,
                'short_description' => $data->short_description,
                'button_text'       => $data->button_text,
                'image'             => $imagePath ?? DB::raw('image')
            ]
        );

        return back();
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
