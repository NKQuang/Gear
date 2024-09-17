<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // Hiển thị danh sách tin tức
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', compact('news'));
    }

    // Hiển thị form tạo tin mới
    public function create()
    {
        return view('admin.news.create');
    }


    // Lưu tin tức mới
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title_en' => 'required|string|max:255',
            'content_en' => 'required|string',
            'title_vi' => 'required|string|max:255',
            'content_vi' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $news = new News();
        $news->title_en = $validated['title_en'];
        $news->content_en = $validated['content_en'];
        $news->title_vi = $validated['title_vi'];
        $news->content_vi = $validated['content_vi'];

        if ($request->hasFile('image')) {
            // Lấy file ảnh từ yêu cầu
            $image = $request->file('image');

            // Đường dẫn đầy đủ tới thư mục public_html/storage/images
            $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/images';

            // Tạo tên file mới với thời gian để tránh trùng tên
            $fileName = time() . '_' . $image->getClientOriginalName();

            // Di chuyển file đến thư mục public_html/storage/images
            $image->move($destinationPath, $fileName);

            // Cập nhật đường dẫn ảnh vào bảng 'news'
            $news->image = 'images/' . $fileName;
            $news->save();
        }

        $news->is_published = $request->has('is_published');
        $news->save();

        return redirect()->route('news.index')->with('success', 'Tin tức đã được tạo thành công.');
    }

    // Hiển thị form chỉnh sửa tin tức
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    // Cập nhật tin tức
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title_en' => 'required|string|max:255',
            'content_en' => 'required|string',
            'title_vi' => 'required|string|max:255',
            'content_vi' => 'required|string',
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $news->title_en = $validated['title_en'];
        $news->content_en = $validated['content_en'];
        $news->title_vi = $validated['title_vi'];
        $news->content_vi = $validated['content_vi'];

        if ($request->hasFile('image')) {
            // Lấy file ảnh từ yêu cầu
            $image = $request->file('image');

            // Đường dẫn đầy đủ tới thư mục public_html/storage/images
            $destinationPath = $_SERVER['DOCUMENT_ROOT'] . '/storage/images';

            // Tạo tên file mới với thời gian để tránh trùng tên
            $fileName = time() . '_' . $image->getClientOriginalName();

            // Di chuyển file đến thư mục public_html/storage/images
            $image->move($destinationPath, $fileName);

            // Cập nhật đường dẫn ảnh vào bảng 'news'
            $news->image = 'images/' . $fileName;
            $news->save();
        }

        $news->is_published = $request->has('is_published');
        $news->save();

        return redirect()->route('news.index')->with('success', 'Tin tức đã được cập nhật.');
    }

    // Xóa tin tức
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index')->with('success', 'Tin tức đã được xóa.');
    }
    public function publicIndex()
    {
        // Lấy tất cả tin tức đã được xuất bản
        $news = News::where('is_published', true)->get();
        //dd($news);
        return view('blog', compact('news'));
    }

    public function publicShow($id)
{
    // Tìm tin tức theo ID
    $news = News::findOrFail($id);

    // Kiểm tra xem tin tức có được xuất bản không
    if (!$news->is_published) {
        abort(404); // Nếu không, trả về lỗi 404
    }

    // Lấy các tin tức trending (ví dụ: lấy 5 tin mới nhất, có thể điều chỉnh)
    $trending_news = News::where('is_published', true)
        ->orderBy('created_at', 'desc')
        ->take(5)
        ->get();

    // Trả về view với dữ liệu của tin tức và trending
    return view('public_show', [
        'news' => $news,
        'trending_news' => $trending_news
    ]);
}


}
