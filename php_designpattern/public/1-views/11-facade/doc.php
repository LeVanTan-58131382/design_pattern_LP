<div class="col-sm-4">
    <h4>Định nghĩa</h4>
    <p>Mẫu thiết kế sử dụng việc xây dựng một giao diện chung để client giao tiếp với một hệ thống phức tạp.</p>
    <hr>
    <h4>Sử dụng khi nào ?</h4>
    <p>1. Khi hệ thống có rất nhiều lớp làm người sử dụng rất khó để có thể hiểu được quy trình xử lý của chương trình. Và khi có rất nhiều hệ thống con mà mỗi hệ thống con đó lại có những giao diện riêng lẻ của nó nên rất khó cho việc sử dụng phối hợp. Khi đó có thể sử dụng Facade Pattern để tạo ra một giao diện đơn giản cho người sử dụng một hệ thống phức tạp.</p>
    <p>2. Khi người sử dụng phụ thuộc nhiều vào các lớp cài đặt. Việc áp dụng Façade Pattern sẽ tách biệt hệ thống con của người dùng và các hệ thống con khác, do đó tăng khả năng độc lập và khả chuyển của hệ thống con, dễ chuyển đổi nâng cấp trong tương lai.</p>
    <p>3. Khi bạn muốn phân lớp các hệ thống con. Dùng Façade Pattern để định nghĩa cổng giao tiếp chung cho mỗi hệ thống con, do đó giúp giảm sự phụ thuộc của các hệ thống con vì các hệ thống này chỉ giao tiếp với nhau thông qua các cổng giao diện chung đó.</p>
    <p>4. Khi bạn muốn bao bọc, che giấu tính phức tạp trong các hệ thống con đối với phía Client.</p>
</div>