<div class="col-sm-4">
    <h4>Định nghĩa</h4>
    <p style="color:red"><b>Factory Pattern</b> thuộc nhóm khởi tạo (Creational Pattern)</p>

    <p style="color:red; text-align:justify"><b>Nhiệm vụ chính của Factory Pattern</b> là quản lý và trả về các đối tượng theo yêu cầu, giúp cho việc khởi tạo đổi tượng một cách linh hoạt hơn.</p>
    <p>Giải quyết vấn đề tạo một đối tượng mà không cần thiết chỉ ra một cách chính xác lớp nào sẽ được tạo.</p>
    <hr>
    <h4>Sử dụng khi nào ?</h4>
    <p>1. Tạo ra một cách mới trong việc khởi tạo các object thông qua một interface chung</p>
    <p>2. Bao gói được quá trình khởi tạo object, giấu đi được xử lý logic của việc khởi tạo</p>
    <p>3. Giảm sự phụ thuộc giữa các module, logic với các class cụ thể mà chỉ phụ thuộc với interface hoặc abstract class.</p>
    <hr>
    <h4>Ví dụ minh họa</h4>
    <pre class="text-info">
    Bạn có thể tưởng tượng như thế này cho dễ hiểu
    Khi bạn muốn mua một chiếc xe mới thay vì phải đến từng hãng xe để xem xe
    thì bạn có thể đến một đại lý xe và xem tất cả các loại xe bạn muốn chỉ ở đại lý xe đó

    Thì đại lý xe đó chính là factory tạo ra các loại xe
    dựa vào lớp interface khai báo thuộc tính mà bạn muốn
    </pre>
</div>