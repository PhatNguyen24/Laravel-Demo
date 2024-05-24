Hôm nay, tôi sẽ giới thiệu về một trong những framework phổ biến và mạnh mẽ trong cộng đồng PHP - Laravel. Laravel là một framework PHP mã nguồn mở được phát triển bởi Taylor Otwell và được ra mắt vào năm 2011. Nó cung cấp một mô hình phát triển ứng dụng web MVC (Model-View-Controller) dễ hiểu, cùng với nhiều tính năng mạnh mẽ như hệ thống routing mạnh mẽ, Eloquent ORM, Blade template engine, Middleware, Authentication, và nhiều tính năng khác.

### Các Bước Cài Đặt Laravel

1. **Yêu Cầu Hệ Thống**: Trước hết, đảm bảo rằng hệ thống của bạn đáp ứng được các yêu cầu của Laravel. Laravel yêu cầu PHP phiên bản 7.4 trở lên và một số extension PHP cụ thể. Bạn cũng cần cài đặt Composer - một công cụ quản lý phụ thuộc PHP.
   
2. **Cài Đặt Composer**: Composer là một công cụ quản lý phụ thuộc PHP và được sử dụng rộng rãi trong cộng đồng Laravel. Bạn có thể cài đặt Composer bằng cách truy cập trang web chính thức của Composer và làm theo hướng dẫn cài đặt cho hệ điều hành của bạn.

3. **Cài Đặt Laravel**: Sau khi cài đặt Composer, bạn có thể sử dụng Composer để tạo một dự án Laravel mới. Mở terminal hoặc command prompt và chạy lệnh sau:

    ```bash
    composer create-project --prefer-dist laravel/laravel project-name
    ```

    Trong đó `project-name` là tên bạn muốn đặt cho dự án của mình.

4. **Chạy Ứng Dụng**: Sau khi cài đặt xong, bạn có thể chạy ứng dụng Laravel bằng cách sử dụng lệnh `php artisan serve`:

    ```bash
    cd project-name
    php artisan serve
    ```

    Bây giờ, bạn có thể truy cập ứng dụng của mình tại `http://localhost:8000`.

### Screenshot Màn Hình Chạy Project

![Laravel Project Screenshot](https://drive.google.com/file/d/1tMPNPyqq4u0LHgAirg4Y-dZ56Yi5VaQD/view?usp=sharing)

