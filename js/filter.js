filterSelection("all") // ვასრულეთ ფუნქციას და ვაჩვენებთ ყველა სვეტს
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("imb");
  if (c == "all") c = "";
  //  ვამატებთ "show" კლასს (display:block) გასაფილტრულ ელემენტებს და ვშლით "შოუს" კლასს იმ ელემენტებიდან, რომლებიც არ არის არჩეული
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// გაფილტრული ელემენტების ჩვენება
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// ვამალებთ ელემენტებს, რომლებიც არ არის არჩეული 
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// მიმდინარე ღილაკს ვამატებთ აქტიურ კლასს 
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}