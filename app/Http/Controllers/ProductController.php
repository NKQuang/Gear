<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Image;
use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with(['type.translations'])->get();
        // dd($products);
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $types = ProductType::with('translations')->get();
        return view('admin.products.create', compact('types'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'sku' => 'required',
            'price' => 'required_if:contact_for_price,false|numeric',
            'type_id' => 'required|exists:types,id',
            'name_vi' => 'required|string|max:255',
            'description_vi' => 'nullable|string',
            'name_en' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'contact_for_price' => 'nullable|boolean'
        ]);
        // Tạo sản phẩm
        $product = Product::create($request->only(['sku', 'price', 'type_id']));

        // Tạo các bản dịch
        $product->translations()->create([
            'locale' => 'vi',
            'name' => $request->input('name_vi'),
            'description' => $request->input('description_vi'),
        ]);

        $product->translations()->create([
            'locale' => 'en',
            'name' => $request->input('name_en'),
            'description' => $request->input('description_en'),
        ]);

        $product->contact_for_price = $request->has('contact_for_price'); // true nếu checkbox được chọn, false nếu không
        $product->save();
        // Xử lý hình ảnh
        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                // Đường dẫn đầy đủ tới thư mục public_html/storage/images
                $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/images';

                // Tạo tên file mới với thời gian để tránh trùng tên
                $fileName = time() . '_' . $image->getClientOriginalName();

                // Di chuyển file đến thư mục public_html/storage/images
                $image->move($destinationPath, $fileName);

                // Lưu đường dẫn tương đối vào cơ sở dữ liệu
                $product->images()->create(['url' => 'images/' . $fileName]);
            }
        }

        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được tạo.');
    }

    public function edit(Product $product)
    {
        $types = ProductType::with('translations')->get();

        $translation_vi = $product->translations()->where('locale', 'vi')->first();
        $translation_en = $product->translations()->where('locale', 'en')->first();

        return view('admin.products.edit', compact('product', 'types', 'translation_vi', 'translation_en'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'sku' => 'required',
            'price' => 'required_if:contact_for_price,false|numeric',
            'type_id' => 'required|exists:types,id',
            'name_vi' => 'required|string|max:255',
            'description_vi' => 'nullable|string',
            'name_en' => 'required|string|max:255',
            'description_en' => 'nullable|string',
            'contact_for_price' => 'nullable|boolean',
        ]);
        // dd($request->all());

        // Cập nhật sản phẩm
        $product->update($request->only(['sku', 'price', 'type_id']));

        // Cập nhật các bản dịch
        $product->translations()->where('locale', 'vi')->update([
            'name' => $request->input('name_vi'),
            'description' => $request->input('description_vi'),
        ]);

        $product->translations()->where('locale', 'en')->update([
            'name' => $request->input('name_en'),
            'description' => $request->input('description_en'),
        ]);
        $product->contact_for_price = $request->has('contact_for_price');
        $product->save();
        // Xử lý hình ảnh
        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                // Đường dẫn đầy đủ tới thư mục public_html/storage/images
                $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/images';

                // Tạo tên file mới với thời gian để tránh trùng tên
                $fileName = time() . '_' . $image->getClientOriginalName();

                // Di chuyển file đến thư mục public_html/storage/images
                $image->move($destinationPath, $fileName);

                // Lưu đường dẫn tương đối vào cơ sở dữ liệu
                $product->images()->create(['url' => 'images/' . $fileName]);
            }
        }
        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được cập nhật.');
    }

    public function destroy(Product $product)
    {
        $product->images()->delete(); // Xóa hình ảnh liên quan
        $product->translations()->delete(); // Xóa các bản dịch liên quan
        $product->delete(); // Xóa sản phẩm

        return redirect()->route('products.index')->with('success', 'Sản phẩm đã được xóa.');
    }

    public function show($id)
    {
        $product = Product::with('translations')->findOrFail($id);
        $translation = $product->getTranslation();

        return view('products.show', compact('product', 'translation'));
    }
    public function showdetail($id)
    {
        $product = Product::with(['translations', 'images'])->findOrFail($id);
        $relatedproducts = Product::inRandomOrder()->take(4)->get();
        // $locale = app()->getLocale(); // Hoặc bất kỳ cách nào bạn xác định locale
        $locale = app()->getLocale();
        // Truyền dữ liệu đến view
        $data = [
            'product' => $product,
            'locale' => $locale,
            'relatedproducts' => $relatedproducts
        ];
        // Truyền biến $product và $locale đến view
        return view('productdetail', $data);
    }
    public function getdata(Request $request)
    {
        // Lấy tất cả các loại sản phẩm
        $listtype = ProductType::with('translations')->get();

        // Lấy giá trị 'type' từ query string, mặc định là null nếu không có
        $typeId = $request->query('type');

        // Khởi tạo query để lấy sản phẩm và quan hệ type -> translation
        $productsQuery = Product::with('type.translations');

        // Lọc theo loại sản phẩm nếu typeId có giá trị
        if ($typeId !== null) {
            $productsQuery->where('type_id', $typeId);
        }

        // Lọc theo giá (ví dụ bạn có thể thêm min, max vào query nếu muốn)
        $min = $request->query('min', 0);
        $max = $request->query('max', 0);

        if ($min > 0) {
            $productsQuery->where('price', '>=', $min);
        }

        if ($max > 0) {
            $productsQuery->where('price', '<=', $max);
        }

        // Lấy kết quả, phân trang
        $products = $productsQuery->paginate(5);

        // Lấy locale hiện tại
        $locale = app()->getLocale();

        // Truyền dữ liệu đến view
        $data = [
            'products' => $products,
            'type' => $listtype,
            'locale' => $locale,
        ];

        return view('listproduct', $data);
    }
}
