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