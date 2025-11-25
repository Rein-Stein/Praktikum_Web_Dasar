<?php
echo "<select name='tahun'>";
for ($tahun = 1990; $tahun <= 2021; $tahun++)
{
    echo "<option value='$tahun'>$tahun</option>";
}
echo "</select>";
?>
