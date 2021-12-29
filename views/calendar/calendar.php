<?php include_once('views/templates/header.php'); ?>
<?php include_once('views/templates/nav-cupboard.php'); ?>

<main class="container">
    <div class="calendar_head">
        <button id="calendar_week_prev"><i class="fas fa-caret-square-left"></i></button>
        <h2>Semana 1</h2>
        <button id="calendar_week_next"><i class="fas fa-caret-square-right"></i></button>
    </div>
    <div class="calendar_week" id="calendar_week">

    <?php //foreach($week as $key => $day){?>
        <!--<div class="calendar_day">
            <div class="calendar_day_head">
                <h4 ><?php //echo $key . " " .$day;    ?></h4> 
            </div>
            <div class="calendar_day_body">      
                <table>
                    <tbody>
                        <tr>
                            <td><i class="fas fa-sun"></i></td>
                            <td>Fideos con manteca</td>
                            <td><i class="fas fa-pencil-alt"></td>                       
                        </tr>
                        <tr>
                            <td><i class="fas fa-moon" ></i></td>
                            <td>Pollitoo</td>
                            <td><i class="fas fa-pencil-alt"></td>                       
                        </tr>
                    </tbody>
                </table>
            </div>
        </div> -->
    <?php // }?>
        <input type="hidden" name="" id="id_recipe" value>
    </div>
 
       
</main> 
<?php include_once "views/templates/footer.php"; ?>
<script src="js/class/calendarClass.js"></script>
<script src="js/calendar.js"></script>
</body>
</html>