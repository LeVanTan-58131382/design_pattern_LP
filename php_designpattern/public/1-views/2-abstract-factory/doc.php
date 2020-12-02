<div class="col-sm-5">
    <h4>Định nghĩa</h4>
    <p>Abstract Factory là một mẫu thiết kế thuộc nhóm khởi tạo cho phép tạo ra họ các đối tượng liên quan mà không cần chỉ định các lớp cụ thể của chúng.</p>
    <p class="text-warning">Nó là phương pháp tạo ra một Super-factory dùng để tạo ra các Factory khác. Điều này có nghĩa là một nhà máy lớn tạo ra các nhà máy con và mỗi nhà máy con tạo ra một object con</p>

    <p style="color:red; text-align:justify">Trong Abstract Factory một interface có nhiệm vụ tạo ra một Factory của các object liên quan tới nhau mà không cần tạo trực tiếp các class của Object đó.
        Mỗi Factory được tạo ra có thể tạo ra các object bằng phương pháp <u><b>GIỐNG NHƯ </b></u> Factory Pattern.
    </p>
    <hr>
    <h4>Vấn đề của Abstract Factory</h4>
    <p>Giả lập một của hàng nội thất gồm những lớp sau đây:
    </p>
    <p><br>
        1. Danh sách những sản phẩm nội thất là các class: <code>Chair</code>, <code>Sofa</code>, <code>CoffeeTable</code></p>
    2. Mỗi loại nội thất có các biến thể khác nhau như là: <code>Mordern</code>, <code>Victorian</code>, <code>ArtDeco</code></p>
    <img src="../public/images/19.AbstractFactory-Pattern/Abstact-Factory Item.png" alt="Hình minh họa" style="margin-top: 2%;">
    <p style="color:red">Vấn đề ở đây là làm sao: có cách để tạo ra các đồ vật nội thất riêng lẻ để chúng phù hợp với các đồ vật khác trong cùng một gia đình.</p>
    <p style="color:red">Hơn nửa bạn không muốn thay đổi code hiện tại khi thêm một sản phẩm mới trong chương trình, hoặc là các nhà cung cập nội thất không muốn thay đổi <code>
            core code
        </code> xảy ra nhiều lần</p>
    <hr>
    <h4>Sử dụng khi nào ?</h4>
    <p>
        Khi cần taọ các đối tượng tương tự nhau
    </p>
    <p class="text-warning">
        Khi cần tạo ra một Factory của các object có liên quan tới nhau mà không cần phải chỉ ra trực tiếp các class của object
    </p>
    <p>
        Khi cần cung cấp các phương thức hoàn chỉnh (có thể tổng hợp thành library) để sinh các đối tượng
    </p>
</div>