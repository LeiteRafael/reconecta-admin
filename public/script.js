document.addEventListener('DOMContentLoaded', () => {
    const tbody = document.querySelector('#user-table tbody');
    if (!tbody) {
        console.error('Tabela com id "user-table" não encontrada!');
        return;
    }

    const rows = tbody.querySelectorAll('tr');

    rows.forEach((row, index) => {
        row.setAttribute('draggable', true);

        row.addEventListener('dragstart', (e) => {
            e.dataTransfer.setData('text/plain', index);
            row.classList.add('opacity-50');
        });

        row.addEventListener('dragend', (e) => {
            row.classList.remove('opacity-50');
        });

        row.addEventListener('dragover', (e) => {
            e.preventDefault();
            row.classList.add('table-primary');
        });

        row.addEventListener('dragleave', (e) => {
            row.classList.remove('table-primary');
        });

        row.addEventListener('drop', (e) => {
            e.preventDefault();
            row.classList.remove('table-primary');

            const fromIndex = parseInt(e.dataTransfer.getData('text/plain'), 10);
            const toIndex = index;

            if (fromIndex !== toIndex) {
                const fromRow = rows[fromIndex];
                const toRow = rows[toIndex];

                if (fromRow && toRow) {
                    if (toIndex > fromIndex) {
                        tbody.insertBefore(fromRow, toRow.nextSibling);
                    } else {
                        tbody.insertBefore(fromRow, toRow);
                    }
                }
            }
        });
    });
});
