<div class="col-sm-4">
    <h4>Định nghĩa</h4>
    <p style="color:blue; text-align:justify">Khi tạo một đối tượng mới các thuộc tính của đối tượng chưa được khởi tạo, ngoại trừ trường hợp default hoặc được khởi tạo trong
        trong constructor. Tuy nhiên chúng ta có một cách tha vì tạo một đối tượng mới thi ta muốn sao chép một đối tượng đã tồn tại chúng ta có thể làm được
        điều này khi implements theo <b>Proptotype Pattern</b>.
    <p style="text-align:justify">Pattern này cung cấp một trong những cách tốt nhất để tạo ra một đối tượng thay vì tạo ra Object <b>bằng từ khóa <code>new</code></b>, Prototype pattern sử dụng việc cloning (copy nguyên mẫu của Object). </p>
    <hr>
    <h4>Sử dụng khi nào ?</h4>
    <p>1. Khi việc tạo một object tốn nhiều chi phí và thời gian trong khi bạn đã có một object tương tự tồn tại.</p>
    <p>2. Khi copy từ object ban đầu sang object mới và thay đổi giá trị một số thuộc tính nếu cần</p>
    <h4> Ví dụ minh họa</h4>
    <pre class="text-info">
        Khi một hãng xe tung ra một sản phẩm mới, họ thường có đến 2 hoặc 3 sản phẩm
        Những sản phẩm này về mặt tổng thể thì không khác gì nhau là nhiểu
        Nó chỉ khác tên, một số màu cũng như một số tính năng nhỏ
        Tất cả những xe này đều được dưa trên một bộ khung và dựa vào bộ khung đó nhà sản xuất có thể thay đổi và phát triển thêm
    </pre>
</div>