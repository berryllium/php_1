let result
function res(response) {
  result.innerHTML = response
}
function calc(url, callback) {
  var xhr;

  if (window.XMLHttpRequest) {
    xhr = new XMLHttpRequest();
  } else if (window.ActiveXObject) { 
    xhr = new ActiveXObject("Microsoft.XMLHTTP");
  }

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      callback(xhr.responseText);
    }
  }

  xhr.open('GET', url, true);
  xhr.send();
}

document.querySelector('input[type="submit"]').addEventListener('click', (event) => {
  event.preventDefault()
  let id = +event.target.dataset.id
  result = document.querySelector('.result'+id)
  switch (id) {
    case 1: {
      let a = document.querySelector('#input1_1').value
      let b = document.querySelector('#input1_2').value
      let url = `functions.php?id=1&a=${a}&b=${b}`
      if ((a !== '') && (b !== '') ) {
        calc(url, res)
      }
      else alert('Заплните все поля!')
      break
    }
      
    
  }
})
