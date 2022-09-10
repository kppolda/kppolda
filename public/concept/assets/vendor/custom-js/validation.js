$(function() {

    $("#newModalForm").validate({
      rules: {
        nama_polres: {
          required: true
        },
        username: {
          required: true
        },
        password:{
          required: true,
          minlength: 8
        },
      },
      messages: {
        nama_polres: {
          required: "Please enter some data",
        },
        username: {
          required: "Please enter some data",
        },
        password: {
          required: "Please enter some data",
          minlength: "Your data must be at least 8 characters"
        },
      }
    });
  });
