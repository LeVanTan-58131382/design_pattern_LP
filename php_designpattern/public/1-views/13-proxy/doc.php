<div class="col-sm-4">
    <h4>Định nghĩa</h4>
    <p>Proxy có nghĩa là “ủy quyền” hay “đại diện”. Mục đích xây dựng Proxy pattern cũng chính vì muốn tạo ra một đối tượng sẽ ủy quyền, thay thế cho một đối tượng khác.</p>
    <hr>
    <h4>Sử dụng khi nào ?</h4>
    <p>1. Khi muốn bảo vệ quyền truy xuất vào các phương thức của object thực</p>
    <p>2. Khi cần một số thao tác bổ sung trước khi thực hiện phương thức của object thực.</p>
    <p>3. Khi tạo đối tượng ban đầu là theo yêu cầu hoặc hệ thống yêu cầu sự chậm trễ khi tải một số tài nguyên nhất định (lazy loading)</p>
    <p>4. Khi có nhiều truy cập vào đối tượng có chi phí khởi tạo ban đầu lớn.</p>
    <p>5. Khi đối tượng gốc tồn tại trong môi trường từ xa (remote).</p>
    <p>6. Khi đối tượng gốc nằm trong một hệ thống cũ hoặc thư viện của bên thứ ba.</p>
    <p>7. Khi muốn theo dõi trạng thái và vòng đời đối tượng.</p>
    <hr>
    <h4>Ví dụ minh họa</h4>
    <img src="../public/images/7.Proxy-Pattern/Capture.PNG">
    <pre class="text-info">
    Thay vì phải đem theo tiền mặt thì bạn có thể đem theo thẻ ngân hàng
    thẻ ngân hàng là đại diện cho tài khoản ngân hàng, cũng như đại diện cho tiền mặt
    </pre>
</div>