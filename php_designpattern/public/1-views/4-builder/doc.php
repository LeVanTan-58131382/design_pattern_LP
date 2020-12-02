<div class="col-sm-5">
    <h4>Định nghĩa</h4>
    <p><b>Builder Pattern</b> là một mẫu thiết kế thuộc nhóm khởi tạo. Mẫu thiết kế này cho phép lập trình viên tạo ra những đối tượng phức tạp nhưng chỉ cần thông qua các câu lệnh đơn giản để tác động nên các thuộc tính của nó
    </p>
    <p style="color:royalblue; text-align:justify">
        Các hàm constructor trong một class có thể lấy các tham số truyền vào <code> param </code> vấn đề đối tượng có rất là nhiều <code>param</code> giả sử đến hàng chục <code>param</code>
        <br>
        1. Một số tham số là <b>tùy chọn</b> và một số tham số là <b>bắt buộc</b><br>
        2. Chúng ta có thể viết nhiều constructor theo từng trường hợp những trường không bắt buộc thì gán <code>NULL</code>.  Tuy nhiên việc này khó đọc, nhiều constructor nếu tham số lớn, khó đọc, khó bảo trì, chương trình chạy chậm,<div class=""></div>
    </p>

    <p style="color:red; text-align:justify">
    Vì vậy, người ta mong muốn giao công việc này cho <b>một đối tượng</b> chịu trách nhiêm khởi tạo và chia việc khởi tạo đối tượng riêng lẽ, từng bước, để có thể tiến hành khởi tạo riêng biệt ở các hoàn cảnh khác nhau. Và giải pháp được đưa ra là sử dụng <code><b>Builder Pattern</b></code> như một người xây dựng.
    </p>
    <hr>
    <h4>Sử dụng khi nào ?</h4>
    <p>Muốn thay đổi thiết kế cho việc lồng nhau của các hàm khởi tạo (Telescoping Constructor Pattern). Vấn đề này phát sinh khi lập trình viên làm việc với một lớp mà có chứa rất nhiều các thuộc tính và cần phải tạo ra nhiều hàm khởi tạo với số lượng các thuộc tính tăng dần</p>
    <p>
        Khi cần tạo ra một đối tượng phức tạp, một đối tượng mà thuật toán để tạo tạo lập các thuộc tính là độc lập đối với các thuộc tính khác
    </p>
</div>