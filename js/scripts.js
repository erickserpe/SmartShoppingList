const form = document.getElementById('formLista');

form.addEventListener('submit', () => {
  form.querySelector('button[type="submit"]').disabled = true;
});
