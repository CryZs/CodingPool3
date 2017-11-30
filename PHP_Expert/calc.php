

<?php 
    $a = $_GET['first'];
    $b = $_GET['second'];
    $op = $_GET['op'];
    if($op == "+"){
        $res = $a + $b;
    }
    else if ($op == "-"){
        $res = $a - $b;
    }
    else if ($op == "*"){
        $res = $a * $b;
    }
    else if ($op == "/"){
        $res = $a / $b;
    }
    $ops = ['+','-','*','/'];
?>
<form>
    <input type="text" name="first" value="<?php echo $a;?>"/>
    <select name="op" id="op">
        <?php 
        foreach($ops as $val){
            $selected = ($op === $val) ? 'selected' : '';
            echo '<option value="'.$val.'" '.$selected.'>'.$val.'</option>';
            // echo "<option value=\"$val\" $selected>$val</option>";
        }
        ?>
    </select>
    <input type="text" name="second"value="<?php echo $b;?>"/>
    <input type="submit" value="="/>
    <?php echo $res;?>
</form>

