$(document).ready(function () {
  $("#errors").hide();
  $("#check_form").on("submit", function (event) {
    event.preventDefault();
    var errors = "";

    if ($("#strA").val() == "") {
      errors += "Please enter your first input!\n";
    } else if ($("#strB").val() == "") {
      errors += "Please enter your second input! \n";
    }
    if (errors !== "") {
      $("#errors").html(errors);
      $("#errors").show();
    } else {
      var form_data = $(this).serialize();
      $.ajax({
        url: "web_call.php",
        method: "GET",
        data: form_data,
        success: function (data) {
          $("#result").text(data);
        },
      });
    }
  });
});
