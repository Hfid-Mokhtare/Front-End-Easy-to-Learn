 <script>
      // Exercice 1.1 :
      Personne={
        nom:"Mohamed Ali",
        age:19,
        presentation:function() {
          document.write(`le nom est : ${this.nom} <br> l'age est  : ${this.age}`);
        }

      }
      Personne.presentation();

      // Exercice 1.2 :
      Personne={
        nom:"Mohamed Ali",
        age:19,
        presentation:function() {
          document.write(`<hr>le nom est : ${this.nom} <br> l'age est  : ${this.age}`);
        }

      }
      Personne.presentation();
      Personne.age=20;
      Personne.presentation();

      // Exercice 1.3 :
      Personne={
        nom:"Mohamed Ali",
        age:20,
        presentation:function() {
          document.write(`<hr>le nom est : ${this.nom} <br> l'age est  : ${this.age}`);
        },
        AjouterAge:function (addAge){
          Personne.age+=addAge;
        }

      }
      Personne.presentation();
      Personne.AjouterAge(20)
      Personne.presentation();

      // Exercice 2 :
      Car = {
        brand: "AAA",
        model: "XXX",
        presentation: function () {
          document.write(
            `<hr>brand : ${this.brand} <br> model : ${this.model} <br> year : ${Car.Year}`
          );
        },
      };
      Car.presentation();
      Car.Year = 2025;
      delete Car.model;
      Car.presentation();

      // Exercice 3 :
      Car = {
        brand: "AAA",
        model: "XXX",
        presentation: function () {
          document.write(
            `<hr>brand : ${this.brand} <br> model : ${this.model} <br> year : ${this.Year}`
          );
        },
      };
      Car.presentation();
      Car.Year = 2025;
      delete Car.model; // try to commentout this line to see the defrance
      if(Car.hasOwnProperty("model")){
        document.write("<br> true")
      }
      else{
        document.write("<br> false")

      }
      Car.presentation();

      


    </script>
