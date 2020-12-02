<div class="col-sm-4">
    <h4>Định nghĩa</h4>
    <p style="color:red; text-align:justify">
        Đôi khi, trong quá trình phân tích thiết kế một hệ thống, chúng ta mong muốn có những đối tượng cần tồn tại duy nhất và có thể truy xuất mọi lúc mọi nơi. Làm thế nào để hiện thực được một đối tượng như thế khi xây dựng mã nguồn? Chúng ta có thể nghĩ tới việc sử dụng một biến toàn cục (global variable : public static final). Tuy nhiên, việc sử dụng biến toàn cục nó phá vỡ quy tắc của OOP (encapsulation). Để giải bài toán trên, người ta hướng đến một giải pháp là sử dụng <b>Singleton pattern.</b>

    </p>
    <p style="text-align:justify"><b>Singleton Pattern</b> thuộc nhóm mẫu thiết kế khởi tạo. Mẫu thiết kế phần mềm để hạn chế sự khởi tạo của lớp đối tượng </p>
    <hr>
    <h4>Đặc điểm của Singleton Pattern</h4>
    <p style="color:blue; text-align:justify">
        1. Hàm constructor của SingletonObject <b>PHẢI</b> là <code>Private</code><br>
        2. Giá trị biến static instance <b>PHẢI</b> là <code>Private</code><br>
        3. Chỉ có một phương thức <code>public static</code> để <code>return instance</code> được khởi tạo ở trên.
    </p>

    <hr>
    <h4>Sử dụng khi nào ?</h4>
    <p>1. Vì class dùng Singleton chỉ tồn tại 1 Instance (thể hiện) nên nó thường được dùng cho các trường hợp giải quyết các bài toán cần truy cập vào các ứng dụng như: Shared resource, Logger, Configuration, Caching, Thread pool, …</p>
    <p>2. Một số design pattern khác cũng sử dụng Singleton để triển khai: Abstract Factory, Builder, Prototype, Facade,…</p>
    <p>3. Đã được sử dụng trong một số class của core java như: java.lang.Runtime, java.awt.Desktop.</p>
    <hr>
</div>