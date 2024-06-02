
<div id="resultado"></div>

<script>
const form = document.querySelector('form');
const resultado = document.querySelector('#resultado');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const busca = document.querySelector('input[name="busca"]').value;

    fetch(`/busca.php?busca=${busca}`)
    .then(response => response.text())
    .then(data => {
        resultado.innerHTML = data;
    })
    .catch(error => console.error(error));
});
</script>