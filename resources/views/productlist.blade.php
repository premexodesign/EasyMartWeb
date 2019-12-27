<html>
    <head>
    </head>

    <body>

        <center>
            <h1>Laravel Dynamic Drop Down with ajax</h1>

            <span>Product Category: </span>
            <select class="productcategory" id="prod_cat_id">
                <option value="0" disabled="true" selected="true">--Select--</option>
                <option>mina</option>
                <option>tohuf</option>
            </select>

            <span>Product Name: </span>
            <select class="productname" >
                <option value="0" disabled="true" selected="true">--productname--</option>
                <option>mina</option>
                <option>tohuf</option>
            </select>

            <span>price:</span>
            <input type="text" class="prod_price">

        </center>

        <script src="http//ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){
                $(document).on('change','productcategory',function(){
                    console.log("it's change");

                    var id=$(this).val();
                    console.log(id); 
                });
            })
        </script>

    </body>

</html>