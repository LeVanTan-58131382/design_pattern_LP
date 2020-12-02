<div class="col-sm-4">
    <h4>Định nghĩa</h4>
    <p>Template Method Pattern là một trong những Pattern thuộc nhóm hành vi (Behavior Pattern).
        Pattern này nói rằng “Định nghĩa một bộ khung của một thuật toán trong một chức năng,
        chuyển giao việc thực hiện nó cho các lớp con.
        Mẫu Template Method cho phép lớp con định nghĩa lại cách thực hiện của một thuật toán,
        mà không phải thay đổi cấu trúc thuật toán“.
    </p>
    <hr>
    <h4>Sử dụng khi nào ?</h4>
    <p>
        Khi có một thuật toán với nhiều bước và mong muốn cho phép tùy chỉnh chúng trong lớp con.
        Mong muốn chỉ có một triển khai phương thức trừu tượng duy nhất của một thuật toán.
        Mong muốn hành vi chung giữa các lớp con nên được đặt ở một lớp chung.
        Các lớp cha có thể gọi các hành vi trong các lớp con của chúng một cách thống nhất (step by step).
    </p>
</div>