<div class="col-sm-4">
    <h4>Định nghĩa</h4>
    <p>Thể hiện rõ sự phân cấp giữa giao diện trong cả interface và các thành phần implement</p>
    <hr>
    <h4>Sử dụng khi nào ?</h4>
    <p>1. Khi bạn muốn tách ràng buộc giữa Abstraction và Implementation, để có thể dễ dàng mở rộng độc lập nhau.</p>
    <p>2. Cả Abstraction và Implementation của chúng nên được mở rộng bằng subsclass</p>
    <p>3. Sử dụng ở những nơi mà những thay đổi được thực hiện trong implement không ảnh hưởng đến phía client</p>
    <p style="color:red;">4. Abstraction là tầng cấp cao, Implementation là tầng cấp thấp thực hiện công việc chi tiết</p>
    <hr>
    <h4>Ví dụ minh họa</h4>
    <img src="../public/images/4.Bridge-Pattern/Capture.PNG">
</div>