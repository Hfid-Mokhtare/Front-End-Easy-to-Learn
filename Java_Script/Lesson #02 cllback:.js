// Exercice 1
      function Calculatrice(num1, num2, Op) {
        switch (Op) {
          case "+":
            return num1 + num2;
          case "-":
            return num1 - num2;
          case "*":
            return num1 * num2;
          case "/":
            return num1 / num2;
        }
      }
      var Num1 = parseInt(prompt(`entrer le promier number : `));
      var Num2 = parseInt(prompt(`entrer le deusieme number : `));
      var Op = prompt(`entrer l'operation : `);
      document.write(`${Calculatrice(Num1, Num2, Op)}`);

      Exercice 2
      var Notes = [10, 11, 12, 13, 14, 15];
      var counter = 0;
      var som = 0;
      var Moyen = (note) => som += note;

      for (note of Notes) {
        Moyen(note);
        counter++;
      }
      document.write(`le moyen de tous les nombre : ${som/counter}`)

      Exercice 3
      var num = parseInt(prompt(`enter a number N : `));
      var som=0;
      function Som1toN(){
      }
      document.write(`le some de 1 a ${num} est :  ${Som1toN(num)}`);

      Exercice 4
      function AddNumber(Num1, Num2, CallBack)
      {
        setTimeout(() => {CallBack(Num1+Num2)},1000)
      }

      var N1=10;
      var N2=10;

      AddNumber(N1,N2,afichesum)
      function afichesum(add)
      {
        document.write( add )
      }
