<div class="col-sm-4">
    <h4>Định nghĩa</h4>
    <p>Mẫu thiết kế giúp bạn trừu tượng hóa những hành vi (behavior, method, function) của một đối tượng bằng cách đưa ra những cài đặt vào những lớp khác nhau. </p>
    <hr>
    <h4>Sử dụng khi nào ?</h4>
    <p>1. Khi muốn có thể thay đổi các thuật toán được sử dụng bên trong một đối tượng tại thời điểm run-time.</p>
    <p>2. Khi có một đoạn mã dễ thay đổi, và muốn tách chúng ra khỏi chương trình chính để dễ dàng bảo trì.</p>
    <p>3. Tránh sự rắc rối, khi phải hiện thực một chức năng nào đó qua quá nhiều lớp con.</p>
    <p>4. Cần che dấu sự phức tạp, cấu trúc bên trong của thuật toán.</p>
    <h4>Ví dụ minh họa</h4>
    <img src="../public/images/12.Strategy-Pattern/Capture.PNG">
    <pre class="text-info">

Hãy tưởng tượng rằng bạn phải đến sân bay.
     Bạn có thể bắt xe buýt, gọi taxi hoặc đi xe đạp.
     Đây là những chiến lược vận chuyển của bạn.
     Bạn có thể chọn một trong các chiến lược tùy thuộc vào các yếu tố như hạn chế về ngân sách hoặc thời gian.
 </pre>
</div>