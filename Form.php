<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>People Database</title>

    <link rel="stylesheet" href="S.css">
</head>
<body>

<div class="container">

    <h2>Add Person</h2>

    <form id="personForm">
        <input type="text" id="name" placeholder="Enter Name" required>
        <input type="number" id="age" placeholder="Enter Age" required>
        <button type="submit">Submit</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody id="tableData"></tbody>
    </table>

</div>

<script src="script.js"></script>

</body>
</html>