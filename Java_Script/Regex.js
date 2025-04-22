

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
  </head>
  <body>
    <script>
      let myString ="hello my Name is Mohamed Ali , and my father name is mohamed";
      let regex = /mohamed/gi;
      console.log(myString.match(regex));

      let domains= "com net org ma thec";
      let regDomains= /(com|net|org|ma|thec)/ig;
      console.log(domains.match(regDomains));

      let nums= "123456789";
      let regNums= /[0-5]/g;
      console.log(nums.match(regNums));

       let numsWithspecialCar= "12@34#56!78?9";
      let regNumsWithspecialCar= /[^0-9]/g;
      console.log(numsWithspecialCar.match(regNumsWithspecialCar));

      let paractic= "os1 os10s os2 os8 os8os";
      let regPractic= /os[5-9]+os/i;
      console.log(paractic.match(regPractic));

       let letters= "abCdeFghIjklmnoP1233!#$%#@";
      let regLetters= /]a-z]/gi;
      console.log(letters.match(regLetters));

      let notletters= "abCdeFghIjklmnoP1233!#$%#@";
      let regnotLetters= /[^a-z0\d]/gi;
      console.log(notletters.match(regnotLetters));

       let email= "ali@gmail.com";
      let regEmail= /\w+@\w+.\w{3}/gi;
      console.log(email.match(regEmail));
    </script>
  </body>
</html>
