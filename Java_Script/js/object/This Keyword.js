let user=new Object(
    {
        salary: 500,
        addresse: "tangier",
        sayHello:function(){
            console.log(`hello ${this.theName}`);
        },
    }
);
user.age=20;
user.theName="Mohamed Ali";

let btn=document.getElementById("cl");
btn.onclick=function(){
    
    this.classList.add("btn");
}

console.log(this)
console.log(user.sayHello())

