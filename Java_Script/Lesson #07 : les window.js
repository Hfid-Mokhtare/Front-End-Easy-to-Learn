 // Exercice 1 :

        for (let counter = 0; counter <= 5; counter++) {
          setTimeout(() => {
            document.write(counter);
          }, 1000);
        }

    // Exercice 2 :
      document.write("helo")
      window.open(width=100,height=100, );

        function Open_New_Window(URL,W, H, Px, Py) {
          const parametres = `width=${W},height=${H},left=${Px},top=${Py}`;
          window.open(URL,"_blank", parametres);
          document.write("the window is opend !")
        }

        Open_New_Window("https://www.youtube.com/watch?v=Qpd21A_EtcE&ab_channel=ARAMTV-%D8%A2%D8%B1%D8%A7%D9%85%D8%AA%D9%8A%D9%81%D9%8A",800, 600, 100, 50);
