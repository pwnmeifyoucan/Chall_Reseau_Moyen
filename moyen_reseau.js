document.addEventListener("DOMContentLoaded", function () {
    document
        .getElementById("flagform")
        .addEventListener("submit", function (event) {
            event.preventDefault(); // Ngăn form gửi đi ngay lập tức

            var inputData = document.getElementById("inputflag").value; // Lấy giá trị nhập vào

            // Sử dụng fetch để gửi request POST
            fetch("./check_reseau.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
                body: "inputflag_reseau=" + encodeURIComponent(inputData),
            })
                .then((response) => response.text()) // Chuyển đổi phản hồi thành text
                .then((data) => {
                    document.getElementById("result").innerHTML = data; // Hiển thị kết quả
                })
                .catch((error) => console.error("Error:", error)); // Xử lý lỗi nếu có
        });
});
