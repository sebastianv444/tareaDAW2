function moverAleatoriamente() {
  let top = Math.trunc(Math.random() * 300 + 1);
  let bottom = Math.trunc(Math.random() * 300 + 1);
  let left = Math.trunc(Math.random() * 640 + 1);
  let right = Math.trunc(Math.random() * 640 + 1);
  console.log(top, bottom, left, right);

  const button = document.querySelector("button");
  
  if(button.style.position !== 'relative'){
    button.style.position = "relative";
  }

  button.style.top = top;
  button.style.bottom = bottom;
  button.style.left = left;
  button.style.right = right;
  button.style.color = "red";
}

document
  .querySelector("button")
  .addEventListener("mouseover", moverAleatoriamente);
