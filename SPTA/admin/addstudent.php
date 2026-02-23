<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SPTA</title>
    <link rel="icon" type="image/x-icon" href="../img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheets" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        .boxes {
            margin-top: 10px;
            background-color: #12664f;
            width: 1870px;
            height: 70px;
            border-radius: 5px;
            text-align: center;
            font-size: 40px;
            color: rgb(0, 0, 0);
        }

        .form-container {
            background: #fff;
            padding: 20px 30px;
            border-radius: 6px;
            max-width: 800px;
            margin: 220px auto;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #202c45;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
        }

        table td {
            padding: 10px;
            vertical-align: top;
        }

        label {
            font-weight: bold;
            color: #333;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
            height: 80px;
        }

        .buttons {
            margin-top: 15px;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
            margin-right: 10px;
        }

        .btn-add {
            background-color: #00bcd4;
            color: white;
        }

        .btn-reset {
            background-color: #e0e0e0;
            color: #333;
        }

        .btn:hover {
            opacity: 0.9;
        }

        .boxess {
            background-color: white;
            color: black;
            width: 580px;
            height: 42px;
        }
    </style>
</head>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

    <div class="boxes">
        <center>
            <p><b>Pawing Central School System</b></p>
        </center>
    </div>


    <!---->

    <br>
    <div class="form-container">
        <h2>Add Student</h2>
        <form action="../page/addlocation.php?function=addLocation" method="POST">
            <table>
                <tr>
                    <td><label for="name">Name</label></td>
                    <td><input type="text" id="wash" name="wash_name" placeholder="Students Name" required class="boxess"></td>
                </tr>
                <tr>
                    <td><label for="address">Address</label></td>
                    <td><textarea id="text" name="wash_address" placeholder="Address" required class="boxess"></textarea></td>
                </tr>
                <tr>
                    <td><label for="contact">Contact Number</label></td>
                    <td><input type="number" id="contact" name="wash_contact" placeholder="Contact Number" required class="boxess"></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="buttons">
                        <button type="submit" class="btn btn-add">ADD</button>
                        <button type="reset" class="btn btn-reset">RESET</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</main>

</html>