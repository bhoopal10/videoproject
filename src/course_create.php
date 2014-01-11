<!DOCTYPE html>
<head>
    <title>Welcome</title>
    <link rel="stylesheet" href="../css/fuelux.min.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<div class="container no-js fuelux">

    <div id="my-wizard" class="wizard">
        <ul class="steps">
            <li data-target="#step1" class="active"><span class="badge badge-info">1</span>Step 1<span class="chevron"></span></li>
            <li data-target="#step2"><span class="badge">2</span>Step 2<span class="chevron"></span></li>
            <li data-target="#step3"><span class="badge">3</span>Step 3<span class="chevron"></span></li>
            <li data-target="#step4"><span class="badge">4</span>Step 4<span class="chevron"></span></li>
            <li data-target="#step5"><span class="badge">5</span>Step 5<span class="chevron"></span></li>
        </ul>
        <div class="actions">
            <button class="btn btn-mini btn-prev"> <i class="icon-arrow-left"></i>Prev</button>
            <button class="btn btn-mini btn-next" data-last="Finish">Next<i class="icon-arrow-right"></i></button>
        </div>
    </div>
    <div class="step-content">
        <div class="step-pane active" id="step1">

        </div>
        <div class="step-pane" id="step2">

        </div>
        <div class="step-pane" id="step3">

        </div>
    </div>

</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/loader.min.js"></script>
<script>
    $(document).ready(function(){

        $('#my-wizard').on('change', function(e, data) {
            console.log('change');
            if(data.step===3 && data.direction==='next') {
                // return e.preventDefault();
            }
        });

        $('#my-wizard').on('changed', function(e, data) {
            console.log('changed');
        });

        $('#my-wizard').on('finished', function(e, data) {
            console.log('finished');
        });

        $('.btn-prev').on('click', function() {
            console.log('prev');
        });

        $('.btn-next').on('click', function() {
            console.log('next');
        });
    });
</script>
</body>
</html>