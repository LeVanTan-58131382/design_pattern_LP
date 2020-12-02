<div class="col-sm-4">
            <h4>Định nghĩa</h4>
            <p>Service Locator là một pattern giải quyết vấn đề về sự phụ thuộc trong lập trình với việc áp dụng nguyên lý Inversion of Control.
                Nó cũng là một thuật ngữ hay được nhắc đến cùng với nguyên lý Dependency Inversion trong SOLID, IoC Container, DI container.
                Service Locator chính là một cách thực hiện của IoC Container</p>
            <hr>
            <h4>Sử dụng khi nào ?</h4>
            <p>
                Sự phụ thuộc của các class vào các service sẽ có một số vấn đề cần phải giải quyết:
            </p>
            <p>
                Nếu thay thế hoặc cập nhật các service phụ thuộc, chúng ta cần thay đổi mã nguồn của class A.
            </p>
            <p>
                Các lớp cụ thể của một phụ thuộc có thể dùng được trong thời gian chạy hay không?
            </p>
            <p>
                Các class như vậy không tách biệt và rất khó cho unit test bởi chúng phụ thuộc trực tiếp, như vậy các phụ thuộc không thể thay thế bởi các stub hoặc mock trong test.
            </p>
            <p>
                Các class cần phải viết những đoạn mã cho việc tạo, tìm kiếm và quản lý các phụ thuộc.
            </p>
                Giải pháp cho vấn đề này chính là áp dụng Service Locator pattern, nó tạo ra một class chứa các tham chiếu đến các service và nó đóng gói các xử lý nghiệp vụ để xác định các service. Hình dưới đây mô tả cách thức Service Locator hoạt động.
            </p>
        </div>