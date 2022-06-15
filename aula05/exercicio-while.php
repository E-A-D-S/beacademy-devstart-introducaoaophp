<select>
        <option selected> -- selecione uma opção -- </option>
    <?php
        
        $ano = 2022;

        while ($ano >=1900) {

            echo "<option>{$ano}</option>";

            $ano--;
        }
     ?>
</select>
