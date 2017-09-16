<!DOCTYPE html>
<html>
<head>
    <title>Codeigniter 3 - Ajax CRUD Example</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <br>
            <div class="pull-left">
                <h2>Codeigniter 3 - Ajax CRUD Example</h2>
            </div>
            <div class="pull-right">
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-user"> Create
                    User
                </button>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th width="200px">Action</th>
        </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <ul id="pagination" class="pagination-sm"></ul>

    <!-- Create Item Modal -->
    <div class="modal fade" id="create-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Create User</h4>
                </div>
                <div class="modal-body">
                    <form data-toggle="validator" action="users/store" method="POST">
                        <div class="form-group">
                            <label class="control-label" for="first_name">First Name:</label>
                            <input type="text" name="first_name" class="form-control" data-error="Please enter first name."
                                   required/>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="last_name">Last Name:</label>
                            <input type="text" name="last_name" class="form-control" data-error="Please enter last name."
                                   required/>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-save btn-success">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Item Modal -->
    <div class="modal fade" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">×</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit Item</h4>
                </div>
                <div class="modal-body">
                    <form data-toggle="validator" action="" method="put">
                        <div class="form-group">
                            <label class="control-label" for="title">Title:</label>
                            <input type="text" name="title" class="form-control" data-error="Please enter title."
                                   required/>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="title">Description:</label>
                            <textarea name="description" class="form-control" data-error="Please enter description."
                                      required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/bootstrap.min.js"></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

<script type="text/javascript">
    var url = "users";
</script>

<script src="/assets/js/user-ajax.js"></script>

</body>
</html>