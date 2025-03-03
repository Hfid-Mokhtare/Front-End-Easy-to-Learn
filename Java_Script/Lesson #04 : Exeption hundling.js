// Exercice 1 :
      function SafeDivide(num, numD) {
        try {
          if (numD === 0) {
            throw new Error("Ziro Division Error ");
          }
          return num / numD;
        }
        catch (Error) {
          document.write("the error is " + Error.message);
        }
        finally {
          document.write("<br> programme is end ");
        }
      }
      document.write(`the resulte is : ${SafeDivide(5, 0)}`);

      // Exercice 2 :
      var t_number=[10,20,30,40,50];

      function ValidateNumbers(T_Number){
        try{
          for(num of T_Number){
            if(typeof num !== 'number'){
              throw new Error("element is not a number")
              break;
            }
          }
          document.write("all element are numbers :-)")
        }
        catch(Error){
          document.write(`error : ${Error.message}`)
        }
        finally{
          document.write("<br>Programmen is end")
        }
      }

      ValidateNumbers(t_number);

      // Exercie 3 :
      function Reseau(connecter) {
        return new Promise((resolve, reject) => {
          try {
            if (connecter == true) {
              resolve("connecte avec succes !");
            } else {
              reject("connection faild :-(");
            }

          } catch (Error) {
            document.write("error in connection : " + Error.stack);
          }
        });
      }
      Reseau(false)
        .then((message) => {
          document.write(message);
        })
        .catch((message) => {
          document.write(message);
        });


      // Exercice 4 : 
