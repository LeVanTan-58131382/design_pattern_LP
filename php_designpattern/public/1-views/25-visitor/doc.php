<div class="col-sm-4">
    <h4>Định nghĩa</h4>
    <p>Visitor là mẫu thiết kế (Design Patterns) cho phép định nghĩa các thao tác (operations) trên một tập hợp các đối tượng (objects) không đồng nhất (về kiểu) mà không làm thay đổi định nghĩa về lớp (classes) của các đối tượng đó.</p>
    <hr>
    <h4>Sử dụng khi nào ?</h4>
    <p>1. Khi có một cấu trúc đối tượng phức tạp với nhiều class và interface. Người dùng cần thực hiện một số hành vi cụ thể của riêng đối tượng, tùy thuộc vào concrete class của chúng.</p>
    <p>2. Khi chúng ta phải thực hiện một thao tác trên một nhóm các loại đối tượng tương tự. Chúng ta có thể di chuyển logic hành vi từ các đối tượng sang một lớp khác.</p>
    <p>3. Khi cấu trúc dữ liệu của đối tượng ít khi thay đổi nhưng hành vi của chúng được thay đổi thường xuyên.</p>
    <p>4. Khi muốn tránh sử dụng toán tử instanceof.
</div>