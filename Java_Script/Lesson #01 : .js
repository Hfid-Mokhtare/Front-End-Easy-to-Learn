<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width , initial-scale=1.0" />

    <title>Document</title>
  </head>

  <body>
    <h1>Exercices de 1 a 13 :</h1>
    <script>
      //Exercice 5
      function isLeapYear(year)
      {
        return (year % 4 === 0 && year % 100 !== 0) || year % 400 === 0;
      }

      let yeartocheck = prompt(" enter the year : ");
      let year = parseInt(yeartocheck)

      switch (isLeapYear(year))
      {
        case true:
        document.write( `<p>est une anne bissextile`);
        break;

        case false:
        document.write(`est une anne pas bissextile`);
        break;
      }

      // Exercie 6

      let age=prompt("please enter your age : ");
      let Iage=Number(age);

      if(Iage<12)
      {
        document.write(`enfant`)
      }
      else if(Iage<=17)
      {
        document.write(`adolescent`)
      }
      else if(Iage<=64)
      {
        document.write(`adulte`)
      }
      else
      {
        document.write(`senior`)
      }

      // Exercice 7
      var som=0;
      for(let i=1;i<=10;i++)
      {
        som+=i;
      }
      document.write(`la some de 1 a 10 est : ${som}`)

      // Exercice 8
      let table=["blue","red", "ali","reda"]

      for (element in table)
      {
        document.write(` ${table[element]}`)
      }

      // Exercice 9
      var chaine = prompt("enter votre chaine :");
      let voyel = ["a", "e", "y", "u", "i", "o"];
      let voyelNum = 0;
      for (let i = 0; i < chaine.length; i++) {
        for (Vo of voyel) {
          if (chaine[i].toLocaleLowerCase() === Vo) {
            voyelNum++;
            break;
          }
        }
      }
      document.write(`<p><strong>le nombre de voyel dons la chaine est : ${voyelNum}</strong></p>`)

      // Exercice 10
      var Num=prompt("entrer un positive number : ");
      while(Num<=0 || Num!=isNaN )
      {
        document.write(`entrer un number positive : `)
        Num=parseInt(prompt("entrer un positive number : "));
      }

      // Exercice 11
      let puissance=2;
      let number=0;
      let counter=1;
      while(number!=1024)
      {
        number=puissance**counter;
        document.write(`${number}</br>`);
        counter++;
      }

      // Exercice 12
      let voyel = ["A", "B", "C", "D", "E", "F"];
      voyel.forEach(function (lettre, index) {
        document.write(`${lettre.charCodeAt()}</br>`);
      });

      // Exercice 13 :
      let voyel = ["A", "A", "A", "D", "E", "A"];
      var letter = prompt("entrer une letter : ");
      var counter=0;
      for (let ele of voyel) {
        if (ele == letter) {
          counter++;
        }
      }
      document.write(`${counter}</br>`);

      // Exercice 14
      var NumArr = [5, 66, 7];
      let Num = 0;
      for (let num of NumArr) {
        if (num % 7 == 0) {
          document.write(`${num} : s'est le prumier nombre divisible par 7 dans le tableau`)
        }
      }

      // Exercie 15
      var NumArr = [5, 66, 7, -11, 88, -33, -2, 0, 35, 12];
      for (num of NumArr) {
        if (num > 0) {
          document.write(`${num} </br>`);
        }
      }

     
    </script>
  </body>
</html>

