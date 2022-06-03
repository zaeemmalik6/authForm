<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <style>
        h1 {
            text-align: center;
            font-style: italic;
            color: royalblue;
        }

        h2 {
            text-align: center;
            font-style: italic;
            color: royalblue;
        }

        th {
            font-style: italic;
        }

        td {
            text-align: center;
            font-style: italic;
        }

    </style>

</head>

<body>
    <div class="w-100 d-flex justify-content-end p-3">
        <a href="{{ route('logout.perform') }}" class="btn btn-primary">
            Logout
        </a>
    </div>

    <h1><b>Welcome Teacher</b></h1>
    <br>
    <h2>Your registered students are:-</h2>

    <div class="col-lg-6 m-auto">

    </div>
    <div class="container">
        <div class="col-lg-12">
            <br>
            <table id="tabledata" class=" table table-striped table-hover table-bordered">

                <tr class="bg-dark text-white text-center">
                    <th>Student Id</th>
                    <th> Student Name </th>
                    <th>Student Email</th>
                </tr>


                @foreach ($teacherStudents as $teacherStudent)
                    <tr>
                        <td>
                            {{ $teacherStudent->id }}
                        </td>
                        <td>
                            {{ $teacherStudent->name }}
                        </td>
                        <td>
                            {{ $teacherStudent->email }}
                        </td>
                    </tr>
                @endforeach

</body>

</html>
