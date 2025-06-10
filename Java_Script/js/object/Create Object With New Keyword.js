let user=new Object({
    thename :"Mohamed Ali",
});

user.age=20;
user.country="Morocoo";
user.sayHello=function(){
    return `hello`;
}

console.log(user.age);
console.log(user.country);
console.log(user.sayHello());
