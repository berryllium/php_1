//функция отправки запроса, получения и записи ответа от сервера
function getResult(url, result) {
  fetch(url)
  .then (response => response.text())
  .then (data => result.innerHTML = data)
}


document.querySelectorAll('input[type="submit"]').forEach(el => {
  el.addEventListener('click', (event) => {
    event.preventDefault()
    let id = +event.target.dataset.id
    let result = document.querySelector('.result' + id)
    console.log(`Задача №${id}`)
    switch (id) {
      case 1: {
        let a = document.querySelector('#input1_1').value
        let b = document.querySelector('#input1_2').value
        let url = `functions.php?id=${id}&a=${a}&b=${b}`
        if ((a !== '') && (b !== '')) {
          getResult(url, result)
        }
        else alert('Заполните все поля!')
        break
      }
      case 2: {
        let a = document.querySelector('#input2_1').value
        let url = `functions.php?id=${id}&a=${a}`
        if ((a !== '')) {
          getResult(url, result)
        }
        else alert('Заполните все поля!')
        break
      }
    }
  })
})
