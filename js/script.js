// script.js

document.getElementById("submit").addEventListener("click", function () {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  var xhr = new XMLHttpRequest();
  xhr.open("POST", "save-data.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      // Xử lý phản hồi từ máy chủ (nếu cần)
      console.log(xhr.responseText);
    }
  };

  var data =
    "username=" +
    encodeURIComponent(username) +
    "&password=" +
    encodeURIComponent(password);
  xhr.send(data);
});
