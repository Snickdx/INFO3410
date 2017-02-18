<!doctype html>
<html>
    <head>
        <!--Note the CDN -->
        <!-- JQuery -->
        <script src="bower_components/jquery/dist/jquery.js"></script>
        <!-- Boostrap Library -->
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"></link>
        <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- SweetAlert Library -->
        <link rel="stylesheet" href="bower_components/sweetalert/dist/sweetalert.css"></link>
        <script src="bower_components/sweetalert/dist/sweetalert.min.js"></script>
        
        <script src="main.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">Data Source</div>
                        <div class="panel-body">
                            <select id="select_options" class="form-control" >
                                <option value="">Select Option</option>
                                <option value="nouns">Nouns</option>
                                <option value="names">Names</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <table class="table table-striped">
                        <thead><tr><th>Data</th></tr></thead>
                        <tbody id="table_recs_sec">

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </body>
</html>