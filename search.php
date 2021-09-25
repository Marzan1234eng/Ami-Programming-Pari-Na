<?php
session_start();
if (isset($_SESSION["username"])){
    include "include/header.php";
?>
<div class="log-out">
    <button class="btn btn-primary"><a class="logout-btn" href="include/logout.php">Log Out</a></button>
</div>
<div class="row search-form">
    <div class="offset-md-4 col-md-4">
        <form class="input-form" method="" action="">
            <div class="mb-3">
                <label for="inputStringValue" class="form-label">Input Values: </label>
                <input type="text" name="inputString" class="form-control" id="inputStringValue">
            </div>
            <div class="mb-3">
                <label for="searchValue" class="form-label">Search Values: </label>
                <input type="number" name="searchValue" class="form-control" id="searchValue">
            </div>
            <button type="button" onclick="resultFind()" class="btn btn-success submit-btn">Khoj</button>
            <br>
            <br>
            <label for="">Result: <span id="result"></span></label>
        </form>
    </div>
</div>

<script>


    function resultFind(){
        let stringValue = document.getElementById("inputStringValue").value;
        const searchValue = document.getElementById("searchValue").value;
        stringValue = stringValue.replace(/\s+/g, '');  /*to remove white space*/
        const arr = stringValue.split(',');
        let newSort = [];
        arr.map(value=>{
            newSort.push(parseInt(value));
        });

        newSort.sort(function(a, b){return b - a});

        const result = newSort.includes(parseInt(searchValue));

        const node = document.createTextNode(result);
        const resValue = document.getElementById("result");
        resValue.innerHTML = result;
        //console.log("stringValue: ",newSort," searchValue: ",searchValue, "Result: ",result);

        let http = new XMLHttpRequest();
        http.open("POST", "include/search-db.php");
        http.setRequestHeader("Content-Type", "application/json;charset=UTF-8");
        http.send(JSON.stringify({"inputString": newSort, "searchValue": searchValue}));
    }

</script>

<?php
include "include/footer.php";
}else{
    header("Location: ./index.php");
}
?>