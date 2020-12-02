<div class="col-sm-4">
    <h4>Định nghĩa</h4>
    <p>Adapter là một mẫu thiết kế cho phép chuyển đổi một interface có sẵn thành một interface khác thích hợp cho lớp đang viết.</p>
    <p>
        Một adapter cho phép các lớp làm việc với nhau, mà bình thường là không thể do sự không tương thích về interfaces, bằng cách bao đóng interface của riêng nó cho phù hợp với một lớp có sẵn
    </p>
    <hr>

    <h4 style="color: red">Object Adapter</h4>
    <p style="color: darkred">Dùng composition để implement. Adapter thực thi (implement) interface của một object và đóng gói một object khác.</p>
    <hr>
    <h4 style="color: red">Class Adapter</h4>
    <p style="color: darkred">Dùng kế thừa để implement. Adapter kế thừa các interface của các object cùng lúc (Cách này chỉ áp dụng cho các ngôn ngữ có hỗ trợ đa kế thừa).</p>
    <hr>

    <h4>Sử dụng khi nào ?</h4>
    <p>Mẫu adapter rất hữu ích trong những tình huống khi tồn tại sẵn một lớp cung cấp một số hay toàn bộ dịch vụ mà bạn cần nhưng không có interface mà bạn cần</p>
</div>