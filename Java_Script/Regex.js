<script>
      let myString =
        "hello my Name is Mohamed Ali , and my father name is mohamed";
      let regex = /mohamed/gi;
      console.log(myString.match(regex));

      let domains = "com net org ma thec";
      let regDomains = /(com|net|org|ma|thec)/gi;
      console.log(domains.match(regDomains));

      let nums = "123456789";
      let regNums = /[0-5]/g;
      console.log(nums.match(regNums));

      let numsWithspecialCar = "12@34#56!78?9";
      let regNumsWithspecialCar = /[^0-9]/g;
      console.log(numsWithspecialCar.match(regNumsWithspecialCar));

      let paractic = "os1 os10s os2 os8 os8os";
      let regPractic = /os[5-9]+os/i;
      console.log(paractic.match(regPractic));

      let letters = "abCdeFghIjklmnoP1233!#$%#@";
      let regLetters = /]a-z]/gi;
      console.log(letters.match(regLetters));

      let notletters = "abCdeFghIjklmnoP1233!#$%#@";
      let regnotLetters = /[^a-z0\d]/gi;
      console.log(notletters.match(regnotLetters));

      let email = "ali@gmail.com";
      let regEmail = /\w+@\w+.\w{3}/gi;
      console.log(email.match(regEmail));

      let number = "0110 110 00 ";
      let NReg = /0\d+0/gi;
      console.log(number.match(NReg));

      

      let url= "http://google.com https://www.website.net web.com";
      let urlReg=/(https?:\/\/(www.)?)?\w+.\w+/gi;
      console.log(url.match(urlReg));

      
      let test = " S100S s3000S s50000S s950000S";
      console.log(test.match(/s\d{3}s/ig));
      console.log(test.match(/s\d{4,5}s/ig));
      console.log(test.match(/s\d{4,}s/ig));


      let phrase = "hello my frind 5alissz";
      console.log(/ind$/.test(phrase));
      console.log(/^hel/.test(phrase));
      console.log(/^\w/.test(phrase));
      console.log(phrase.match(/\d\w{5}(?=z$)/ig));


      let message= "hello @, please enter your age : ";
      let regMessage= /@,/ig;
      console.log(message.replaceAll(regMessage,"Mohamed Ali"));

    </script>
