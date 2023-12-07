<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>

<body>
    <div class="container">
        <input type="date" onchange="hitung()" class="form-control" id="tanggal_lahir">
        <input type="date" onchange="hitung()" class="form-control" id="today">

        <h1 class="usia"></h1>
    </div>
</body>
<script src="jquery-3.7.1.min.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script>
    hitung = () => {
        let dateString = $('#tanggal_lahir').val();
        let age = getAge(dateString);
        $(".usia").text(age);
    }
    getAge = (dateString) => {
        // var today = new Date();
        let today = new Date($("#today").val());
        var DOB = new Date(dateString);
        var totalMonths = (today.getFullYear() - DOB.getFullYear()) * 12 + today.getMonth() - DOB.getMonth();
        totalMonths += today.getDay() < DOB.getDay() ? -1 : 0;
        var years = today.getFullYear() - DOB.getFullYear();
        if (DOB.getMonth() > today.getMonth())
            years = years - 1;
        else if (DOB.getMonth() === today.getMonth())
            if (DOB.getDate() > today.getDate())
                years = years - 1;

        var days;
        var months;

        if (DOB.getDate() > today.getDate()) {
            months = (totalMonths % 12);
            if (months == 0)
                months = 11;
            var x = today.getMonth();
            switch (x) {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12: {
                    var a = DOB.getDate() - today.getDate();
                    days = 31 - a;
                    break;
                }
                default: {
                    var a = DOB.getDate() - today.getDate();
                    days = 30 - a;
                    break;
                }
            }

        } else {
            days = today.getDate() - DOB.getDate();
            if (DOB.getMonth() === today.getMonth())
                months = (totalMonths % 12);
            else
                months = (totalMonths % 12) + 1;
        }
        var age = years + ' years ' + months + ' months ' + days + ' days';
        return age;
    }
</script>

</html>