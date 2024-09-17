// public/js/ckeditor.js
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

document.addEventListener('DOMContentLoaded', function () {
    // Khởi tạo CKEditor cho tất cả các textarea có id tương ứng
    ClassicEditor
        .create(document.querySelector('#content_en'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#content_vi'))
        .catch(error => {
            console.error(error);
        });
});
