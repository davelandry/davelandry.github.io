document.getElementById("title").style.color = "red";
document.getElementById("title").innerHTML = "Welcome JavaScript";

var username = "Dave";

console.log(username + "123");

var myNumber = 42;

myNumber = myNumber + 10;

console.log(myNumber * 100);
console.log(500);

var big = myNumber > 100;

console.log(big);

var users = ["Dave", 100, "Dan", "Mengyue"];

console.log(users[1]);

var complexUser = {
  name: "Dave Landry",
  zip: 2131,
  color: "red",
  dog: true,
  greet: function(greeting) {
    console.log(greeting + " Dave!")
  }
};

complexUser.greet("Goodbye");

console.log(complexUser.color);

var sayHello = function(name) {
  console.log("Hello " + name);
}

sayHello("Dave");
sayHello("Lisa");
sayHello(complexUser.name);

var plusTen = function(num) {
  var x = num + 10 + myNumber;
  return x;
}

var newNum = plusTen(20);

console.log(newNum);

if (newNum > 100) {
  console.log("Wow! Big Number!");
}
else if (newNum > 50) {
  console.log("Ok, not so bad.");
}
else {
  console.log("Not so big...");
}

var greaterThanTen = function(num) {

  if (num > 10) {
    console.log("Yes!");
  }
  else {
    console.log("No!");
  }

  return num > 10;

}

var checkNumber = greaterThanTen(5);

console.log(checkNumber);
