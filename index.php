<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>PHP with AJAX CRUD Operation</title>

</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-4 p-3 border border-info rounded ">
                <div class="msg">

                </div>
                <div class="form-control mt-3">
                    <label for="name">Student Name</label>
                    <input type="text" class="name form-control" id="name">
                </div>
                <div class="form-control mt-3">
                    <label for="email">Email Address</label>
                    <input type="email" class="email form-control" id="email">
                </div>
                <div class="form-control mt-3">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="phone form-control" id="phone">
                </div>
                <div class="form-control mt-3">
                    <label for="name">Status</label>
                    <select id="status" class="status form-control">
                        <option value="">------Select Status-------</option>
                        <option value="1">Active</option>
                        <option value="2">Inactive</option>
                    </select>
                </div>
                <div class="form-group mt-3">
                    <button class="btn btn-info save form-control">Save Info</button>
                </div>

            </div>
            <div class="col-md-7">
                <table class="table" border="1">
                    <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Student Name</th>
                            <th>Email Address</th>
                            <th>Phone Number</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="tData">

                    </tbody>

                </table>
            </div>
        </div>
    </div>


    <!-- Modal  -->
    <div class="modal fade" id="deleteItem" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmation Message ? </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure to delete the item ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">NO</button>
                    <button type="button" class="btn btn-primary btn-delete">YES</button>
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="ajax.js"></script>
</body>

</html>