document.addEventListener('DOMContentLoaded', () => {
    fetch('load_propriete.php')
        .then(response => response.json())
        .then(data => {
            const select = document.querySelector('#propriete_id');
            data.forEach(row => {
                const option = document.createElement('option');
                option.value = row.propriete_id;
                option.textContent = `ID: ${row.propriete_id} - Adresse: ${row.adresse}`;
                select.appendChild(option);
            });
        });
});
