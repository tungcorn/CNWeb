<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Sửa phương thức showHomepage() của Chương 6
    public function showHomepage()
    {
        // TODO 7: Thay vì "return 'Chào mừng...'", chúng ta sẽ
        // chuẩn bị dữ liệu để truyền cho View

        $viewTitle = 'PHT Chương 7 - Blade Template';
        $pageTitle = 'Chào mừng bạn đến với Blade!';
        $pageDescription = 'Đây là trang chủ được render bằng Blade Template Engine.';
        $tasks = [
            'Cài đặt Laravel',
            'Hiểu về Routing & Controller',
            'Tạo Layout với Blade',
            'Truyền dữ liệu cho View'
        ];
        // TODO 8: Trả về một View
        // Gợi ý: Dùng hàm view('ten_view', $data_array)
        // 'homepage' tương đương 'homepage.blade.php'

//        return view('homepage', [
//            'title' => $viewTitle,
//            'pageTitle' => $pageTitle,
//            'pageDescription' => $pageDescription,
//            'tasks' => $tasks,
//        ]);
        // TODO 9: (Cách khác) Dùng hàm compact() cho gọn
        // return view('homepage', compact('viewTitle', 'pageTitle','pageDescription', 'tasks'));
        // (Lưu ý: khi dùng compact, tên biến ở Controller và View phải khớp nhau)
        return view('homepage', compact('viewTitle', 'pageTitle', 'pageDescription', 'tasks'));
    }

}
