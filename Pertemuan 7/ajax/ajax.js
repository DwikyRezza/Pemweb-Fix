$(document).ready(function() {
  $("#shoutbutton").click(function() {
    $.ajax({
      type: "GET", // bisa diubah ke "POST"
      url: "reply.php",
      data: $("#form1").serialize(),
      success: function(rsp) {
        $("#data").append("<div class='msg'>" + rsp + "</div>");
        $("#msg").val(""); // kosongkan input
      },
      error: function(rsp) {
        alert("Terjadi kesalahan saat mengirim data!");
      }
    });
  });
});
