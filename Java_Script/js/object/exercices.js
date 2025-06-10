// // Create Your Object Here
// let member=new Object({
//     name:"Mohamed Ali",
//     age:20,
//     country:"Morocco",
//     fullDetails:function(){
//         console.log(`My name is ${this.name},My Age is ${this.age},I Live in ${this.country}`)
//     }
// })

// console.log(member.name); // Elzero
// console.log(member.age); // 38
// console.log(member.country); // Egypt
// console.log(member.fullDetails());
// // My Name Is Elzero, My Age Is 38, I Live in Egypt

// console.log("-".repeat(40));
// //------------------------------------------------------------

// let objMethodOne={
//     property:["html","css","js"],
// }

// console.log(objMethodOne.property); // "Method One"

// let objMethodTwo=new Object({
//      property:["html","css","js"],
// })

// console.log(objMethodTwo.property); // "Method Two"

// let objMethodThree=new Object.create();

console.log("-".repeat(40));
//------------------------------------------------------------

// The Object To Work With
let myFavGames = {
  "Trinity Universe": {
    publisher: "NIS America",
    price: 40,
  },
  "Titan Quest": {
    publisher: "THQ",
    bestThree: {
      one: "Immortal Throne",
      two: "Ragnarök",
      three: "Atlantis",
    },
    price: 50,
  },
  YS: {
    publisher: "Falcom",
    bestThree: {
      one: "Oath in Felghana",
      two: "Ark Of Napishtim",
      three: "origin",
    },
    price: 40,
  },
};

// Code One => How To Get Object Length ?
let objectLength = Object.keys(myFavGames).length;
let game = Object.keys(myFavGames);
// console.log(game);
game.forEach(function (ele) {
  let gameObject = myFavGames[ele];
  console.log(`----------${ele}-----------`);

  let properties = Object.keys(gameObject);
  properties.forEach((p) => {
    let value = gameObject[p];
    if (typeof value === "object") {
      console.log(`${p} : ${value}`);
    } else {
      console.log(`${p} : ${value}`);
    }
  });
});

// console.log(game);

// for (let i = 0; i < objectLength; i++) {
//   console.log(`The Game Name Is ${game[i]}`);
//   console.log(`The Publisher Is ${game[i][0]}`);
//   console.log(`The Price Is ${game[i]["price"]}`);

//   // Check If Nested Object Has Property (bestThree)
//   if (myFavGames[i].bestThree) {
//     console.log("- Game Has Releases");
//     console.log(`First => ${this.one}`);
//     console.log(`Second => ${this.two}`);
//     console.log(`Third => ${this.three}`);
//   }
//   console.log("#".repeat(20));
// }

// Ouput

// "The Game Name Is Trinity Universe"
// "The Publisher Is NIS America"
// "The Price Is 40"
// "####################"
// "The Game Name Is Titan Quest"
// "The Publisher Is THQ"
// "The Price Is 50"
// "- Game Has Releases"
// "First => Immortal Throne"
// "Second => Ragnarök"
// "Third => Atlantis"
// "####################"
// "The Game Name Is YS"
// "The Publisher Is Falcom"
// "The Price Is 40"
// "- Game Has Releases"
// "First => Oath in Felghana"
// "Second => Ark Of Napishtim"
// "Third => origin"
// "####################"
