<div class="col-sm-5">
    <h4>Định nghĩa</h4>
    <p>
        Flyweight pattern là một structural pattern có mục đích chính là giảm thiểu số lượng objects được tạo ra cũng như hạn chế sử dụng memory để tăng performance.
    </p>
    <hr>

    <h4 style="color: red">Hai trạng thái của Flyweight</h4>
    <p style="color: darkred"><strong>Trạng thái nội tại (Intrinsic state):</strong><br>
        - Được lưu trữ bên trong đối tượng flyweight.<br>
        - Chứa dữ liệu không phụ thuộc vào ngữ cảnh Flyweight (Flyweight's context), do đó có thể chia sẻ được.<br>
        - Dữ liệu không thể bị thay đổi bởi các đối tượng khác.
    </p>
    <p style="color: darkred"><strong>Trạng thái bên ngoài (Extrinsic state):</strong><br>
        - Được lưu trữ bên trong bộ nhớ.<br>
        - Chứa dữ liệu phụ thuộc vào ngữ cảnh Flyweight (Flyweight's context), do đó không thể chia sẻ được.<br>
        - Dữ liệu được truyền vào từ bên ngoài và có thể bị thay đổi.
    </p>
</div>