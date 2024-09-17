<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index()
    {
        $productTypes = ProductType::with('translations')->get();

        return view('admin.product-types.index', compact('productTypes'));
    }

    public function create()
    {
        $languages = ['vi' => 'Tiếng Việt', 'en' => 'Tiếng Anh'];

        return view('admin.product-types.create', compact('languages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_vi' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_vi' => 'nullable|string',
        ]);

        // Tạo loại sản phẩm
        $productType = ProductType::create();

        // Lưu bản dịch cho tiếng Anh
        $productType->translations()->create([
            'locale' => 'en',
            'name' => $request->name_en,
            'description' => $request->description_en,
        ]);

        // Lưu bản dịch cho tiếng Việt
        $productType->translations()->create([
            'locale' => 'vi',
            'name' => $request->name_vi,
            'description' => $request->description_vi,
        ]);

        return redirect()->route('product-types.index')->with('success', 'Loại sản phẩm đã được tạo.');
    }


    public function show(ProductType $productType)
    {
        // Lấy thông tin loại sản phẩm và các bản dịch
        $translations = $productType->translations->keyBy('locale');

        return view('admin.product-types.show', compact('productType', 'translations'));
    }


    public function edit($id)
    {
        // Lấy loại sản phẩm theo ID và các bản dịch
        $productType = ProductType::with('translations')->findOrFail($id);

        $translation_vi = $productType->translations()->where('locale', 'vi')->first();
        $translation_en = $productType->translations()->where('locale', 'en')->first();
        //dd($productType);
        return view('admin.product-types.edit', compact('productType', 'translation_vi', 'translation_en'));
    }



    public function update(Request $request, ProductType $productType)
    {
        $request->validate([
            'name_en' => 'required|string|max:255',
            'name_vi' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'description_vi' => 'nullable|string',
        ]);

        // Cập nhật bản dịch cho tiếng Anh
        $productType->translations()->updateOrCreate(
            ['locale' => 'en'],
            ['name' => $request->name_en, 'description' => $request->description_en]
        );

        // Cập nhật bản dịch cho tiếng Việt
        $productType->translations()->updateOrCreate(
            ['locale' => 'vi'],
            ['name' => $request->name_vi, 'description' => $request->description_vi]
        );

        return redirect()->route('product-types.index')->with('success', 'Loại sản phẩm đã được cập nhật.');
    }


    public function destroy(ProductType $productType)
    {
        $productType->delete();
        return redirect()->route('product-types.index')->with('success', 'Loại sản phẩm đã bị xóa.');
    }
}
