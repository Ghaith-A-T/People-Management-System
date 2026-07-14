document.addEventListener("DOMContentLoaded", () => {
    loadData();

    document.getElementById("personForm").addEventListener("submit", function(e) {
        e.preventDefault();

        const name = document.getElementById("name").value;
        const age = document.getElementById("age").value;

        fetch("insert.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/x-www-form-urlencoded"
            },
            body: `name=${encodeURIComponent(name)}&age=${encodeURIComponent(age)}`
        })
        .then(response => response.text())
        .then(() => {
            document.getElementById("personForm").reset();
            loadData();
        });
    });
});

function loadData() {
    fetch("fetch.php")
    .then(response => response.text())
    .then(data => {
        document.getElementById("tableData").innerHTML = data;
    });
}

function toggleStatus(id) {
    fetch("toggle.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `id=${id}`
    })
    .then(response => response.text())
    .then(() => {
        loadData();
    });
}