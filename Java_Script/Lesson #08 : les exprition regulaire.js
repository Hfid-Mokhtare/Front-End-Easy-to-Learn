// Ex 1 :
      let passeWord = "helloA6";
      const RE = new RegExp(/[a-zA-Z0-9]{6}/);
      console.log(RE.test(passeWord));

      // EX 2 :
      let string = "helloAli23 333 dsdf5";
      const RE = new RegExp(/[0-9]+/g);
      console.log(string.match(RE));

      // EX 3 :
      let string = "il a une ou et mais et ou blabla mais";
      const RE = new RegExp(/(ou)|(mais)|(et)/ig);
      console.log(string.replace(RE,"***"));

      // EX 4 :
      let string = "000-000-0001";
      const RE = new RegExp(/(([0-9]{3})|(\([0-9]{3}\)-[0-9]{3}-[0-9]{4}))/);
      console.log(RE.test(string));


      // EX 5 :
      let string = "aspnwcloud@gmail.com";
      const RE = new RegExp(/[a-zA-Z0-9_]+@[a-zA-Z0-9_]+.[a-zA-Z]{2,}/g);
      console.log(string.match(RE));


      // EX 6 :
      let passeWord = "Ab6aaaaaaaa";
      const RE = new RegExp(/[a-zA-Z0-9!@#etc.]{8,12}/);
      console.log(RE.test(passeWord));


      // EX 7 :
      let string = "const x=5;let y=10; const z='text'";
      const RE = new RegExp(/const \w+=/g);
      console.log(string.match(RE));
