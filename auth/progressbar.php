<div class="progress mb-3">
    <div class="progress-bar" style="
        <?php
            if(isset($_GET['stage'])){
                switch($_GET['stage']){
                    case 1:
                        echo 'width:25%';
                        break;
                    case 2:
                        echo 'width:50%';
                        break;
                    case 3:
                        echo 'width:75%';
                        break;
                    case 4:
                        echo 'width:100%';
                        break;
                    default:
                        echo 'width:25%';
                }
            }else {
                echo 'width:25%';
            }
        ?>
    ">
    </div>


</div>

<div class="mb-5 d-flex justify-content-around">
    <p>Stage 1</p>
    <p>Stage 2</p>
    <p>Stage 3</p>
    <p>Stage 4</p>
</div>


<!-- My Design
<div class="d-flex justify-content-between align-items-center mb-4" style="height:8px; background-color: lightgray;">
    <div class="rounded-circle" style="height: 35px; width: 35px; background-color: lightgray;" id="stage1"></div>
    <div class="rounded-circle" style="height: 35px; width: 35px; background-color: lightgray;" id="stage2"></div>
    <div class="rounded-circle" style="height: 35px; width: 35px; background-color: lightgray;" id="stage3"></div>
    <div class="rounded-circle" style="height: 35px; width: 35px; background-color: lightgray;" id="stage4"></div>
</div>
<div class="mb-5 d-flex justify-content-between">
    <p>Stage 1</p>
    <p>Stage 2</p>
    <p>Stage 3</p>
    <p>Stage 4</p>
</div> -->