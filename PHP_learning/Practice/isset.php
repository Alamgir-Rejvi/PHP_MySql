<?php
if (isset ($n)) {
    return $a = $n +$n + 2;
}else {
    trigger_error ('$n is notice error');
}
?>