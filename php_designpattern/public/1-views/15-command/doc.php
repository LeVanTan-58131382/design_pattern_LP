<div class="col-sm-4">
    <h4>Định nghĩa</h4>
    <p>Command Pattern là một trong những Pattern thuộc nhóm hành vi (Behavior Pattern). Nó cho phép chuyển yêu cầu thành đối tượng độc lập, có thể được sử dụng để tham số hóa các đối tượng với các yêu cầu khác nhau như log, queue (undo/redo), transtraction.</p>
    <hr>
    <h4>Sử dụng khi nào ?</h4>
    <p>1. Khi cần tham số hóa các đối tượng theo một hành động thực hiện.</p>
    <p>2. Khi cần tạo và thực thi các yêu cầu vào các thời điểm khác nhau.</p>
    <p>3. Khi cần hỗ trợ tính năng undo, log , callback hoặc transaction.</p>
    <h4>Ví dụ minh họa</h4>
    <img src="../public/images/8.Command-Pattern/Capture.PNG">
    <pre class="text-info">
                    Khi bạn đến một nhà hàng và nhân viên phục vụ sẽ đến hỏi bạn muốn dùng gì
                    Bạn yêu cầu một phần cơm gà xối mỡ và bạn yêu cầu thêm nhiều mỡ gà, nhân viên sẽ đem yêu cầu của bạn xuống bếp
                    Lúc này nhà bếp sẽ nhìn thấy yêu cầu của bạn và làm phần cơm đó và đưa lên phục vụ cho bạn
                </pre>
</div>