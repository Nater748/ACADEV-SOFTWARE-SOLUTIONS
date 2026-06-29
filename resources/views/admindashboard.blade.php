<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>\
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <nav class="nav">
            <div class="container-fluid">
                <button class="btn-out">Logout</button>
            </div>
        </nav>

        <h2>Welcome, Admin</h2>
        
        <div class="card mb-4">
            <div class="card-header">
                Add New Course
            </div>

            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label class="form-label">Course Code</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Course Title</label>
                        <input type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Assign Lecturer</label>
                        <select class="form-select">
                            <option selected disabled>-- select Lecturer --</option>
                            <option> Dr. John Doe</option>
                        </select>
                    </div>

                    <button type="submit" class="btn-success">
                        Add Course
                    </button>
                </form>
            </div>
        </div>
    </div>



    <div class="card">
        <div class="card-header">
            List Of Courses
        </div>

        <div class="card-body">
            <table class="table">
                <thead class="table-secondary">
                    <tr>
                        <th>Course Code</th>
                        <th>Course Title</th>
                        <th>Lecturer</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>CSC101</td>
                        <td>Introduction to Computing</td>
                        <td>DR.John Doe</td>
                        <td>
                            <button class=btn-danger>
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>