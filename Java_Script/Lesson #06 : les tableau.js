//Exercice 1 : you have to use concut()
      var T1 = [10, 20, 30, 40, 50];
      var T2 = ["A", "B", "C", "D", "E"];
      var chaine = "";
      for (let i = 0; i < T1.length; i++) {
        chaine += T1[i] + ",";
      }

      for (let j = 0; j < T2.length; j++) {
        if (j < T2.length-1) {
          chaine += T2[j] + ",";
        }
        else{
          chaine += T2[j];
        }
      }
      chaine[chaine.length - 1] = "";
      document.write(chaine);

      //Exercice 2 :
      var T2 = ["A", "B", "C", "D", "E"];
      if (T2.includes("A")) {
        document.write(T2.indexOf("A"));
      }

      //Exercice 3 :
      var T1 = [3, 5, 7, 4, 6];
      var pair=T1.find((num)=> num % 2 == 0);
      document.write(`${pair} <br> ${T1.findIndex((num) => num === pair)}`);

      //Exercice 4 :
      var T1 = ["ali", "bob", "cici", "dolare", "ema"];
      T1.forEach((element)=> {
        document.write(element.toUpperCase()+" ");
      });

      //Exercice 5 : sort() est plus efficase avec les chaine de caractere
      var T1 = [88, 5, 17, 123,64, 6];
      document.write(T1.sort((a,b)=> (a-b))); 
      document.write(`<br> ${T1.slice(0,3)}`);

      //Exercice 6 : 
      var T1 = [88, 5, 17, 64];
      document.write(T1);
      T1.splice(T1.length/2,0,"A");
      document.write(`<br> ${T1}`);
      T1.splice(T1.length-1,1);
      document.write(`<br> ${T1}`);
      T1.splice(((T1.length)),0,"B");
      document.write(`<br> ${T1}`);
