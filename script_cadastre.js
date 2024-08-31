document.addEventListener('DOMContentLoaded', () => {
    fetch('load_cadastre.php')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.querySelector('#cadastreTable tbody');
            tableBody.innerHTML = ''; // Clear existing rows

            data.forEach(row => {
                const tr = document.createElement('tr');
                Object.values(row).forEach(text => {
                    const td = document.createElement('td');
                    td.textContent = text;
                    tr.appendChild(td);
                });
                tableBody.appendChild(tr);
            });
        });
});
