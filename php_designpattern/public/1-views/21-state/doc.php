<div class="row">
    <div class="col-sm-4">
        <h4>Định nghĩa</h4>
        <p>State Pattern là một trong những mẫu thiết kế thuộc nhóm behavioral cho phép một object có thể biến đổi hành vi của nó khi có những sự thay đổi trạng thái nội bộ.

            Mẫu thiết kế này có thể được hiểu gần giống như Strategy, nó có thể chuyển đổi các chiến lược thông qua các phương thức được định nghĩa trong interface </p>
        <hr>
        <h4>Sử dụng khi nào ?</h4>
        <p>1. Khi hành vi của đối tượng phụ thuộc vào trạng thái của nó và nó phải có khả năng thay đổi hành vi của nó lúc run-time theo trạng thái mới.</p>
        <p>2. Khi nhiều điều kiện phức tạp buộc đối tượng phụ thuộc vào trạng thái của nó.</p>
        <h4>Ví dụ minh họa</h4>
        <pre class="text-info">

Các nút và công tắc trong điện thoại thông minh của bạn hoạt động khác nhau tùy thuộc vào trạng thái hiện tại của thiết bị:

Khi điện thoại được mở khóa, việc nhấn các nút dẫn đến việc thực hiện các chức năng khác nhau.
Khi điện thoại bị khóa, nhấn bất kỳ nút nào sẽ dẫn đến màn hình mở khóa.
Khi điện thoại gần hết sạc, nhấn bất kỳ nút nào sẽ hiển thị màn hình sạc.
</pre>
    </div>