
    <div class="row">
        <div class="col-sm-4">
            <h4>Định nghĩa</h4>
            <p>Composite Pattern là một sự tổng hợp những thành phần có quan hệ với nhau để tạo ra thành phần lớn hơn.</p>
            <p style="color: darkred">"Sắp xếp các đối tượng theo cấu trúc cây để thể hiện hệ thống phân cấp.
                Composite cho phép client xử lý các đối tượng riêng lẻ và các tập hợp đối tượng một cách đồng nhất."</p>
            <hr>
            <h4>Sử dụng khi nào ?</h4>
            <p>1. Composite Pattern chỉ nên được áp dụng khi nhóm đối tượng phải hoạt động như một đối tượng duy nhất (theo cùng một cách).</p>
            <p>2. Composite Pattern có thể được sử dụng để tạo ra một cấu trúc giống như cấu trúc cây.</p>
            <hr>
            <h4>Ví dụ minh họa</h4>
            <h4>Kết quả demo</h4>
            <img src="image/Capture.PNG">
            <pre class="text-info">
                 Một hệ thống tập tin là một cấu trúc cây có chứa các nhánh là các thư mục (folder – composite), cũng như
                    các nút lá là các tệp (file – leaf). Một folder có thể chứa một hoặc nhiều file hoặc folder.
                    Do đó, folder là một đối tượng phức tạp và file là một đối tượng đơn giản. File và Folder có nhiều thao
                    tác và thuộc tính chung, chẳng hạn như: di chuyển (cut) , sao chép (copy), liệt kê (view) hoặc các thuộc tính
                    thư mục như tên tệp và kích thước.

                Với cấu trúc như vậy sẽ dễ dàng và thuận tiện hơn để quản lý file và folder thống nhất bằng cách
                    xây dựng một Interface có đầy đủ các phương thức và thuộc tính chung cho cả file và folder.
        </pre>

</div>