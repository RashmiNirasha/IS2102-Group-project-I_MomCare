<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }

        .confirm-box {
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        padding: 30px 80px;
        max-width: 400px;
        margin: 0 auto;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        }

        .confirm-box .material-icons {
            font-size:40px;
            color: red;
            margin-bottom: 30px;
        }

        .confirm-box h3 {
        font-size: 20px;
        margin-top: 0;
        padding-top:3%;
        padding-left:1%
        }

        .confirm-box p {
        font-size: 16px;
        margin-bottom: 30px;
        text-align: center;
        }

        .deletediv {
            display: flex;
            justify-content:space-evenly;
        }

        .confirm-buttons {
        display: flex;
        justify-content: center;
        }

        .confirm-delete, .confirm-cancel {
        display: inline-block;
        padding: 8px 12px;
        border: none;
        cursor: pointer;
        font-size: 14px;
        margin: 10px;
        }

        .confirm-delete {
        background-color: #029EE4;
        color: #fff;
        }

        .confirm-delete:hover {
        background-color: #0062cc;
        }

        .confirm-cancel {
        background-color: #ccc;
        color: #333;
        }

        .confirm-cancel:hover {
        background-color: #eee;
        }
    </style>
</head>
<body>
    <button onclick="deleteItem()">Delete Item</button>

    <div class="confirm-box" id="confirm-box" style="display:none;">
    <div class="deletediv">
    <i class = "material-icons" alt = "delete">delete</i>
    <h3>Confirm Deletion</h3>
    </div>
    <p>Are you sure you want to delete?</p>
    <div class="confirm-buttons">
    <button class="confirm-delete" onclick="deleteConfirmed()">Delete</button>
    <button class="confirm-cancel" onclick="hideConfirmBox()">Cancel</button>
    </div>
    </div>
    <script>
    function deleteItem() {
    document.getElementById('confirm-box').style.display = 'block';
    }

    function deleteConfirmed() {
    // Code to delete the item
    alert("Item deleted successfully.");
    hideConfirmBox();
    }

    function hideConfirmBox() {
    document.getElementById('confirm-box').style.display = 'none';
    }
    </script>
</body>
</html>

