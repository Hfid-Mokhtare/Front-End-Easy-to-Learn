<script>
      var name = prompt("please enter your name : ");
      var age = parseInt(prompt("please enter your age : "));
      var client = ["ali", "mohamed", "rida"];

      function client_Find() {
        return new Promise((resolve, reject) => {
          for (name_c of client) {
            if (name === name_c) {
              document.write(`<br>`);
              resolve("client is found :)");
              break;
            } else {
              document.write(`<br>`);
              reject("client is not found :(");
            }
          }
        });
      }

      function FillData() {
        return new Promise((resolve, reject) => {
          if (name != null && age != null) {
            document.write(`<br>`);
            resolve("all Data are Fill");
          } else {
            document.write(`<br>`);
            reject("Date are stel empty");
          }
        });
      }

      client_Find()
        .then((value) => {
          document.write(value);
          document.write(
            FillData().then((value1) => {
              document.write(`My Client ${value1}`);
            })
          );
        })
        .catch((error) => {
          document.write(error);
          document.write(
            FillData().catch((error1) => {
              document.write(`My Client ${error1}`);
            })
          );
        });
    </script>
